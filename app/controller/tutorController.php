<?php 

require 'app/model/tutorModel.php';
require 'app/dto/tutorDTO.php';
require 'app/dto/experienciaLaboral.php';
require_once 'app/utility/util.php';

/**
* 
*/
class TutorController
{

    private $modelTutor;

    function __construct()
    {
        $this->modelTutor = new ModelTutor();
    }

    public function registrarTutor($nombres, $apellido1, $apellido2, $tipo_doc, $numero, $sexo, $nacionalidad, $lbrta_mil_clase, $num_lbrta_mil,
                                   $dm, $fecha_nacim, $pais_nacim, $depto_nacim, $mun_nacim, $direccion_corresp, $pais_corresp, $depto_corresp,
                                   $mun_corresp, $telefono, $email, $ultm_grd_aprob, $titulo_obtenido, $fecha_grado)
    {

        if(!Util::validarString([$nombres, $apellido1, $tipo_doc, $numero, $sexo, $pais_nacim, $depto_nacim, $mun_nacim,
                $direccion_corresp, $pais_corresp, $depto_corresp, $mun_corresp, $telefono, $email, $ultm_grd_aprob]) || !Util::validarDate([$fecha_nacim, $fecha_grado])){
            return 'Datos Invalidos';
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

        return $this->modelTutor->registrarTutor($dto);
    }

    public function registrarExperienciaLaboral($tutor, $empresa_entidad, $tipo, $pais, $departamento, $municipio, $correo_entidad, $telefono,
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

    }

}
 ?>