<?php

require_once 'app/utility/util.php';

require 'app/model/tutorModel.php';
require 'app/model/experienciaLaboralModel.php';
require 'app/model/educacionSuperiorModel.php';

require 'app/dto/tutorDTO.php';
require 'app/dto/experienciaLaboralDTO.php';
require 'app/dto/modalidadAcademicaDTO.php';
require 'app/dto/educacionSuperiorDTO.php';

/**
 * Class TutorController Clase para el acceso al modulo de tutor
 */
class TutorController {

    private $modelTutor;
    private $modelExperienciaLaboral;
    private $modelModalidadAcademica;
    private $modelEducacionSuperor;

    function __construct() {
        $this->modelTutor = new ModelTutor();
        $this->modelExperienciaLaboral = new ExperienciaLaboralModel();
        $this->modelModalidadAcademica = new ModalidadAcademicaModel();
        $this->modelEducacionSuperior = new EducacionSuperiorModel();
    }

    /**
     * Metodo para tutor
     */

    /**
     * Metodo que permite el registro de hojas de vida, se realiza el registro de los datos personales del
     * tutor, datos de experiencias laborales, datos de estudios de educacion superior y anexo a la
     * hoja de vida del tutor
     *
     * @param $nombres
     * @param $apellido1
     * @param $apellido2
     * @param $tipo_doc
     * @param $numero
     * @param $sexo
     * @param $nacionalidad
     * @param $lbrta_mil_clase
     * @param $num_lbrta_mil
     * @param $dm
     * @param $fecha_nacim
     * @param $pais_nacim
     * @param $depto_nacim
     * @param $mun_nacim
     * @param $direccion_corresp
     * @param $pais_corresp
     * @param $depto_corresp
     * @param $mun_corresp
     * @param $telefono
     * @param $email
     * @param $ultm_grd_aprob
     * @param $titulo_obtenido
     * @param $fecha_grado
     * @param $fecha_diligenciamiento
     * @param $observacion
     * @param $ciudad_diligenciamiento
     * @param $experiencias_laborales
     * @param $educaciones_superiores
     * @return string
     */
    public function registrarHojaDeVida($nombres, $apellido1, $apellido2, $tipo_doc, $numero, $sexo,
            $nacionalidad, $lbrta_mil_clase, $num_lbrta_mil,$dm, $fecha_nacim, $pais_nacim, $depto_nacim,
            $mun_nacim, $direccion_corresp, $pais_corresp, $depto_corresp,$mun_corresp, $telefono, $email,
            $ultm_grd_aprob, $titulo_obtenido, $fecha_grado, $fecha_diligenciamiento, $observacion,
            $ciudad_diligenciamiento, $experiencias_laborales, $educaciones_superiores){

        $id_tutor = $this->registrarTutor($nombres, $apellido1, $apellido2, $tipo_doc, $numero, $sexo,
            $nacionalidad, $lbrta_mil_clase, $num_lbrta_mil,$dm, $fecha_nacim, $pais_nacim, $depto_nacim,
            $mun_nacim, $direccion_corresp, $pais_corresp, $depto_corresp, $mun_corresp, $telefono, $email,
            $ultm_grd_aprob, $titulo_obtenido, $fecha_grado, $fecha_diligenciamiento, $observacion,
            $ciudad_diligenciamiento);

        if(!is_numeric($id_tutor) || $id_tutor  < 0){
            return 'Ha ocurido un error en el registro de los datos personales';
        }

        $educaciones = json_decode($educaciones_superiores);

        foreach ($educaciones as $edu) {
            $resp = $this->registrarEducacionSuperior($edu->modalidad_academica_id, $id_tutor,
                $edu->numero_semest_aprob, $edu->graduado, $edu->estudio_titulo_obte,
                $edu->fecha_terminacion, $edu->num_tarjeta_prof);

            if(!is_numeric($resp) || $resp == 1){
                return 'Ha ocurrido un error en el registro de los datos de educacion superior';
            }

        }

        $experiencias = json_decode($experiencias_laborales);
        foreach ($experiencias as $exp) {
            $resp = $this->registrarExperienciaLaboral($id_tutor, $exp->empresa_entidad, $exp->tipo,
                $exp->pais, $exp->departamento, $exp->municipio, $exp->correo_entidad,
                $exp->telefono_entidad, $exp->fecha_ingreso, $exp->fecha_retiro,
                $exp->cargo_contratado, $exp->dependencia, $exp->direccion, $exp->estado_contrato);

            if(!is_numeric($resp) || $resp == 1){
                return 'Ha ocurrido un error en el registro de los datos experiencia laboral';
            }
        }

        return 'Hoja de vida registrada';
    }

    /**
     * Metodo para listar los datos personales de todos los tutores registrados
     * @return string
     */
    public function listarDatosTutores(){
    	return $this->modelTutor->listarTutores();
    }

    /**
     * Metodo que permite obtener los datos personles de un tutor en especifico
     * @param $tipo_doc tipo de documento
     * @param $numero numero de documento de identidad
     * @return string
     */
    public function obtenerDatosTutor($tipo_doc, $numero){
		if(!Util::validarString([$tipo_doc, $numero])){
			return 'Datos invalidos';
		}

		$tutorDTO = new TutorDTO();
		$tutorDTO->setTipoDoc($tipo_doc);
		$tutorDTO->setNumero($numero);

		return json_encode($this->modelTutor->obtenerDatosTutor($tutorDTO));
	}

    /**
     * Metodo que permite el registro de los datos personales de un tutor
     * @param $nombres
     * @param $apellido1
     * @param $apellido2
     * @param $tipo_doc
     * @param $numero
     * @param $sexo
     * @param $nacionalidad
     * @param $lbrta_mil_clase
     * @param $num_lbrta_mil
     * @param $dm
     * @param $fecha_nacim
     * @param $pais_nacim
     * @param $depto_nacim
     * @param $mun_nacim
     * @param $direccion_corresp
     * @param $pais_corresp
     * @param $depto_corresp
     * @param $mun_corresp
     * @param $telefono
     * @param $email
     * @param $ultm_grd_aprob
     * @param $titulo_obtenido
     * @param $fecha_grado
     * @param $fecha_dilig
     * @param $ciudad_dilig
     * @param $observaciones
     * @return int|string
     */
    private function registrarTutor($nombres, $apellido1, $apellido2, $tipo_doc, $numero, $sexo,
            $nacionalidad, $lbrta_mil_clase, $num_lbrta_mil, $dm, $fecha_nacim,
            $pais_nacim, $depto_nacim, $mun_nacim, $direccion_corresp, $pais_corresp,
            $depto_corresp, $mun_corresp, $telefono, $email, $ultm_grd_aprob,
            $titulo_obtenido, $fecha_grado, $fecha_dilig, $observaciones, $ciudad_dilig){

        if(!Util::validarString([$nombres, $apellido1, $tipo_doc, $numero, $sexo, $pais_nacim,
                $depto_nacim, $mun_nacim, $direccion_corresp, $pais_corresp, $depto_corresp,
                $mun_corresp, $telefono, $email, $ultm_grd_aprob, $ciudad_dilig, $observaciones]) ||
                !Util::validarDate([$fecha_nacim, $fecha_grado, $fecha_dilig])) {
            return 'Datos personales Invalidos';
        }

        $dto = new TutorDTO($nombres, $apellido1, $apellido2, $tipo_doc, $numero, $sexo, $nacionalidad,
            $lbrta_mil_clase, $num_lbrta_mil, $dm, $fecha_nacim, $pais_nacim, $depto_nacim, $mun_nacim,
            $direccion_corresp, $pais_corresp, $depto_corresp, $mun_corresp, $telefono, $email,
            $ultm_grd_aprob, $titulo_obtenido, $fecha_grado, (date('Y-m-j').''), $ciudad_dilig,
            $observaciones);

        $id_tutor =  $this->modelTutor->registrarTutor($dto);

        if($id_tutor == -1 || $id_tutor == -2){
            return 'Ha ocurido un error en el registro de los datos personales';
        }

        return $id_tutor;
    }

    /**
     * Metodo para experiencia laboral
     */

    /**
     * Metodo que permite el registro de los datos de experiencias laborales de un tutor en especifico
     * @param $tutor
     * @param $empresa_entidad
     * @param $tipo
     * @param $pais
     * @param $departamento
     * @param $municipio
     * @param $correo_entidad
     * @param $telefono
     * @param $fecha_ingreso
     * @param $fecha_retiro
     * @param $cargo_contratado
     * @param $dependencia
     * @param $direccion
     * @param $estado_contrato
     * @return int|string
     */
    private function registrarExperienciaLaboral($tutor, $empresa_entidad, $tipo, $pais, $departamento,
                $municipio, $correo_entidad, $telefono, $fecha_ingreso, $fecha_retiro, $cargo_contratado,
                $dependencia, $direccion, $estado_contrato){

        if(!Util::validarString([$empresa_entidad, $tipo, $pais, $departamento, $municipio, $telefono,
                $cargo_contratado, $dependencia, $direccion, $estado_contrato]) || !Util::validarNumber([$tutor]) ||
                !Util::validarDate([$fecha_ingreso, $fecha_retiro])){
            return 'Datos invalidos';
        }

        $dto = new ExperienciaLaboralDTO($tutor, $empresa_entidad, $tipo, $pais, $departamento, $municipio,
            $correo_entidad, $telefono, $fecha_ingreso, $fecha_retiro, $cargo_contratado, $dependencia,
            $direccion, $estado_contrato);

        return $this->modelExperienciaLaboral->registrarExperienciaLaboral($dto);
    }

    /**
     * Metodo que permite el registro de una modalidad academica
     * @param $modalidad
     * @return string
     */
    public function registrarModalidadAcademica($modalidad){
        if(!Util::validarString([$modalidad])){
            return 'Datos Invalidos';
        }

        $dto = new ModalidadAcademicaDTO();
        $dto->setModalidad($modalidad);

        return $this->modelModalidadAcademica->registrarModalidadAcademica($dto);
    }

    /**
     * Metodo que permite listar las experiencias laborales de un tutor en especifico
     * @param $tutor_id identificador del tutor
     * @return string
     */
    public function listarExperienciasLaboralesTutor($tutor_id){
        if(!Util::validarString([$tutor_id])){
            return json_encode(Respuesta::get(102));
        }

        $tutorDTO = new TutorDTO();
        $tutorDTO->setTutorId($tutor_id);

        return json_encode($this->modelExperienciaLaboral->listarExperienciasLaboralesTutor($tutorDTO));
    }


    /**
     * Metodos para estudios de educacion superior
     */

    /**
     * Metodo que permite el registro de los datos de estudios de educacion superior de un
     * tutor en especifico
     * @param $modalidad_academica_id
     * @param $tutor
     * @param $numero_semest_aprob
     * @param $graduado
     * @param $estudio_titulo_obte
     * @param $fecha_terminacion
     * @param $num_tarjeta_prof
     * @return int|string
     */
    private function registrarEducacionSuperior($modalidad_academica_id, $tutor, $numero_semest_aprob,
            $graduado, $estudio_titulo_obte, $fecha_terminacion, $num_tarjeta_prof){
        if(!Util::validarString([$numero_semest_aprob, $graduado, $estudio_titulo_obte, $num_tarjeta_prof]) ||
            !Util::validarNumber([$modalidad_academica_id]) || !Util::validarDate([$fecha_terminacion])){
            return 'Datos Invalidos';
        }

        $educacionSuperiorDTO = new EducacionSuperiorDTO($modalidad_academica_id, $tutor, $numero_semest_aprob,
            $graduado, $estudio_titulo_obte, $fecha_terminacion, $num_tarjeta_prof);

        return $this->modelEducacionSuperior->registrarEducacionSuperior($educacionSuperiorDTO);
    }

    public function listarEstudiosSuperioresTutor($tutor_id){
        if(!Util::validarString([$tutor_id])){
            return json_encode(Respuesta::get(102));
        }

        $tutorDTO = new TutorDTO();
        $tutorDTO->setTutorId($tutor_id);

        return json_encode($this->modelEducacionSuperior->listarEstudiosSuperioresTutor($tutorDTO));
    }

}
?>