<?php

require_once 'app/utility/util.php';

require 'app/model/tutorModel.php';
require 'app/model/experienciaLaboralModel.php';
require 'app/model/modalidadAcademicaModel.php';
require 'app/model/educacionSuperiorModel.php';

require 'app/dto/tutorDTO.php';
require 'app/dto/experienciaLaboralDTO.php';
require 'app/dto/modalidadAcademicaDTO.php';
require 'app/dto/educacionSuperiorDTO.php';

/**
 *
 */
class TutorController
{

    private $modelTutor;
    private $modelExperienciaLaboral;
    private $modelModalidadAcademica;
    private $modelEducacionSuperor;

    function __construct()
    {
        $this->modelTutor = new ModelTutor();
        $this->modelExperienciaLaboral = new ExperienciaLaboralModel();
        $this->modelModalidadAcademica = new ModalidadAcademicaModel();
        $this->modelEducacionSuperior = new EducacionSuperiorModel();
    }

    public function registrarHojaDeVida($nombres, $apellido1, $apellido2, $tipo_doc, $numero, $sexo, $nacionalidad, $lbrta_mil_clase, $num_lbrta_mil,
                                        $dm, $fecha_nacim, $pais_nacim, $depto_nacim, $mun_nacim, $direccion_corresp, $pais_corresp, $depto_corresp,
                                        $mun_corresp, $telefono, $email, $ultm_grd_aprob, $titulo_obtenido, $fecha_grado,
                                        $fecha_diligenciamiento, $observacion, $ciudad_diligenciamiento, $experiencias_laborales, $educaciones_superiores){

                $id_tutor = $this->registrarTutor($nombres, $apellido1, $apellido2, $tipo_doc, $numero, $sexo, $nacionalidad, $lbrta_mil_clase, $num_lbrta_mil,
                    $dm, $fecha_nacim, $pais_nacim, $depto_nacim, $mun_nacim, $direccion_corresp, $pais_corresp, $depto_corresp,
                    $mun_corresp, $telefono, $email, $ultm_grd_aprob, $titulo_obtenido, $fecha_grado, $fecha_diligenciamiento, $observacion, $ciudad_diligenciamiento);

                if(!is_numeric($id_tutor) || $id_tutor  < 0){
                    return 'Ha ocurido un error en el registro de los datos personales';
                }
                $i = 1;
                foreach ($educaciones_superiores as $edu) {
                    $resp = $this->registrarEducacionSuperior($edu['modalidad_academica_id'], $id_tutor, $edu['numero_semest_aprob'], $edu['graduado'],
                        $edu['estudio_titulo_obte'], $edu['fecha_terminacion'], $edu['num_tarjeta_prof']);

                    echo $resp;

                    if(!is_numeric($resp) || $resp == 1){
                        return 'Ha ocurrido un error en el registro de los datos de educacion superior';
                    }

                    $i = $i+1;
                }

                foreach ($experiencias_laborales as $exp) {
                    $resp = $this->registrarExperienciaLaboral($id_tutor, $exp['empresa_entidad'], $exp['tipo'], $exp['pais'], $exp['departamento'], $exp['municipio'],
                        $exp['correo_entidad'], $exp['telefono_entidad'], $exp['fecha_ingreso'], $exp['fecha_retiro'], $exp['cargo_contratado'],
                        $exp['dependencia'], $exp['direccion'], $exp['estado_contrato']);

                    if(!is_numeric($resp) || $resp == 1){
                        return 'Ha ocurrido un error en el registro de los datos experiencia laboral';
                    }
                }

        return 'Hoja de vida registrada';
    }

    private function registrarTutor($nombres, $apellido1, $apellido2, $tipo_doc, $numero, $sexo, $nacionalidad, $lbrta_mil_clase, $num_lbrta_mil,
                                   $dm, $fecha_nacim, $pais_nacim, $depto_nacim, $mun_nacim, $direccion_corresp, $pais_corresp, $depto_corresp,
                                   $mun_corresp, $telefono, $email, $ultm_grd_aprob, $titulo_obtenido, $fecha_grado, $fecha_dilig, $ciudad_dilig, $observaciones)
    {

        if(!Util::validarString([$nombres, $apellido1, $tipo_doc, $numero, $sexo, $pais_nacim, $depto_nacim, $mun_nacim,
                $direccion_corresp, $pais_corresp, $depto_corresp, $mun_corresp, $telefono, $email, $ultm_grd_aprob, $ciudad_dilig, $observaciones]) ||
                !Util::validarDate([$fecha_nacim, $fecha_grado, $fecha_dilig])){
            return 'Datos personales Invalidos';
        }

        $dto = new TutorDTO();
        $dto->setNombres($nombres);
        $dto->setApellido1($apellido1);
        $dto->setApellido2($apellido2);
        $dto->setTipoDoc($tipo_doc);
        $dto->setNumero($numero);
        $dto->setSexo($sexo);
        $dto->setNacionalidad($nacionalidad);
        $dto->setLbrtaMilClase($lbrta_mil_clase);
        $dto->setNumLbrtaMil($num_lbrta_mil);
        $dto->setDm($dm);
        $dto->setFechaNacim($fecha_nacim);
        $dto->setPaisNacim($pais_nacim);
        $dto->setDeptoNacim($depto_nacim);
        $dto->setMunNacim($mun_nacim);
        $dto->setDireccionCorresp($direccion_corresp);
        $dto->setPaisCorresp($pais_corresp);
        $dto->setDeptoCorresp($depto_corresp);
        $dto->setMunCorresp($mun_corresp);
        $dto->setTelefono($telefono);
        $dto->setEmail($email);
        $dto->setUltmGrdAprob($ultm_grd_aprob);
        $dto->setTituloObtenido($titulo_obtenido);
        $dto->setFechaGrado($fecha_grado);
        $dto->setFechaDilig(date('Y-m-j').'');
        $dto->setCiudadDilig($ciudad_dilig);
        $dto->setObservaciones($observaciones);

        $id_tutor =  $this->modelTutor->registrarTutor($dto);

        if($id_tutor == -1 || $id_tutor == -2){
            return 'Ha ocurido un error en el registro de los datos personales';
        }

        return $id_tutor;
    }

    private function registrarExperienciaLaboral($tutor, $empresa_entidad, $tipo, $pais, $departamento, $municipio, $correo_entidad, $telefono,
                                                $fecha_ingreso, $fecha_retiro, $cargo_contratado, $dependencia, $direccion, $estado_contrato){
        if(!Util::validarString([$empresa_entidad, $tipo, $pais, $departamento, $municipio, $telefono, $cargo_contratado, $dependencia, $direccion, $estado_contrato]) ||
            !Util::validarNumber([$tutor]) || !Util::validarDate([$fecha_ingreso, $fecha_retiro])){
            return 'Datos invalidos';
        }

        $dto = new ExperienciaLaboralDTO();
        $dto->setTutor($tutor);
        $dto->setEmpresaEntidad($empresa_entidad);
        $dto->setTipo($tipo);
        $dto->setPais($pais);
        $dto->setDepartamento($departamento);
        $dto->setMunicipio($municipio);
        $dto->setCorreoEntidad($correo_entidad);
        $dto->setTelefono($telefono);
        $dto->setFechaIngreso($fecha_ingreso);
        $dto->setFechaRetiro($fecha_retiro);
        $dto->setCargoContratado($cargo_contratado);
        $dto->setDependencia($dependencia);
        $dto->setDireccion($direccion);
        $dto->setEstadoContrato($estado_contrato);

        return $this->modelExperienciaLaboral->registrarExperienciaLaboral($dto);
    }

    private function registrarModalidadAcademica($modalidad){
        if(!Util::validarString([$modalidad])){
            return 'Datos Invalidos';
        }

        $dto = new ModalidadAcademicaDTO();
        $dto->setModalidad($modalidad);

        return $this->modelModalidadAcademica->registrarModalidadAcademica($dto);
    }

    private function registrarEducacionSuperior($modalidad_academica_id, $tutor, $numero_semest_aprob, $graduado, $estudio_titulo_obte, $fecha_terminacion, $num_tarjeta_prof){
        if(!Util::validarString([$numero_semest_aprob, $graduado, $estudio_titulo_obte, $num_tarjeta_prof]) || !Util::validarNumber([$modalidad_academica_id])
            || !Util::validarDate([$fecha_terminacion])){
            return 'Datos Invalidos';
        }

        $educacionSuperiorDTO = new EducacionSuperiorDTO();

        $educacionSuperiorDTO->setModalidadAcademicaId($modalidad_academica_id);
        $educacionSuperiorDTO->setTutor($tutor);
        $educacionSuperiorDTO->setNumeroSemestAprob($numero_semest_aprob);
        $educacionSuperiorDTO->setGraduado($graduado);
        $educacionSuperiorDTO->setEstudioTituloObte($estudio_titulo_obte);
        $educacionSuperiorDTO->setFechaTerminacion($fecha_terminacion);
        $educacionSuperiorDTO->setNumTarjetaProf($num_tarjeta_prof);

        return $this->modelEducacionSuperior->registrarEducacionSuperior($educacionSuperiorDTO);
    }

}
?>