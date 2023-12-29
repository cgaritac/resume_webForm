<?php
//Validación de datos completos:
//E.2.4	Se debe ingresar mínimo un registro de experiencia laboral
//E.2.5	Se debe ingresar mínimo un registro de formación académica.
//E.2.6	El año de concluido un estudio, debe ser mayor a 1980. 
$identificacion = !empty($_POST['c1']) ? $_POST['c1'] : '';
$nombre = !empty($_POST['c2']) ? $_POST['c2'] : '';
$apellidos = !empty($_POST['c3']) ? $_POST['c3'] : '';
$correo = !empty($_POST['c4']) ? $_POST['c4'] : '';
$clave = !empty($_POST['c5']) ? $_POST['c5'] : '';
$fechadenacimiento = !empty($_POST['c6']) ? $_POST['c6'] : '';
$provincia = !empty($_POST['c7']) ? $_POST['c9'] : '';
$canton = !empty($_POST['c8']) ? $_POST['c8'] : '';
$distrito = !empty($_POST['c9']) ? $_POST['c9'] : '';
$otrassenas = !empty($_POST['c10']) ? $_POST['c10'] : '';
$celular = !empty($_POST['c11']) ? $_POST['c11'] : '';
$telefonofijo = !empty($_POST['c12']) ? $_POST['c12'] : '';
$movilidad = !empty($_POST['c13']) ? $_POST['c13'] : '';
$aspiracion = !empty($_POST['c14']) ? $_POST['c14'] : '';
$licencia = !empty($_POST['c15']) ? $_POST['c15'] : '';
$empresa1 = !empty($_POST['c16']) ? $_POST['c16'] : '';
$fechainicio1 = !empty($_POST['c17']) ? $_POST['c17'] : '';
$fechafinal1 = !empty($_POST['c18']) ? $_POST['c18'] : '';
$logro1 = !empty($_POST['c19']) ? $_POST['c19'] : '';
$responsabilidad1 = !empty($_POST['c20']) ? $_POST['c20'] : '';
$empresa2 = !empty($_POST['c21']) ? $_POST['c21'] : '';
$fechainicio2 = !empty($_POST['c22']) ? $_POST['c22'] : '';
$fechafinal2 = !empty($_POST['c23']) ? $_POST['c23'] : '';
$logro2 = !empty($_POST['c24']) ? $_POST['c24'] : '';
$responsabilidad2 = !empty($_POST['c25']) ? $_POST['c25'] : '';
$empresa3 = !empty($_POST['c26']) ? $_POST['c26'] : '';
$fechainicio3 = !empty($_POST['c27']) ? $_POST['c27'] : '';
$fechafinal3 = !empty($_POST['c28']) ? $_POST['c28'] : '';
$logro3 = !empty($_POST['c29']) ? $_POST['c29'] : '';
$responsabilidad3 = !empty($_POST['c30']) ? $_POST['c30'] : '';
$nivelacademico1 = !empty($_POST['c31']) ? $_POST['c31'] : '';
$titulo1 = !empty($_POST['c32']) ? $_POST['c32'] : '';
$institucion1 = !empty($_POST['c33']) ? $_POST['c33'] : '';
$anio1 = !empty($_POST['c34']) ? $_POST['c34'] : '';
$nivelacademico2 = !empty($_POST['c35']) ? $_POST['c35'] : '';
$titulo2 = !empty($_POST['c36']) ? $_POST['c36'] : '';
$institucion2 = !empty($_POST['c37']) ? $_POST['c37'] : '';
$anio2 = !empty($_POST['c38']) ? $_POST['c38'] : '';
$nivelacademico3 = !empty($_POST['c39']) ? $_POST['c39'] : '';
$titulo3 = !empty($_POST['c40']) ? $_POST['c40'] : '';
$institucion3 = !empty($_POST['c41']) ? $_POST['c41'] : '';
$anio3 = !empty($_POST['c42']) ? $_POST['c42'] : '';

if($identificacion && $nombre  && $apellidos  && $correo  && $clave  && $fechadenacimiento  && $provincia  && $canton  && $distrito  && $otrassenas  && $celular  && $telefonofijo  && $movilidad  && $aspiracion  && $licencia  && $empresa1  && $fechainicio1  && $fechafinal1  && $logro1  && $responsabilidad1  && $empresa2  && $fechainicio2  && $fechafinal2  && $logro2  && $responsabilidad2  && $empresa3  && $fechainicio3  && $fechafinal3  && $logro3  && $responsabilidad3  && $nivelacademico1  && $titulo1  && $institucion1  && $anio1  && $nivelacademico2  && $titulo2  && $institucion2  && $anio2  && $nivelacademico3  && $titulo3  && $institucion3  && $anio3){
    include('conexion.php');
    $consulta="insert into tbempleados(identificacion, nombre, apellidos, correo, clave, fechadenacimiento, provincia, canton, distrito, otrassenas, celular, telefonofijo, movilidadlaboral, aspiracionsalarial, licenciadeconducir,empresa1, fechainicio1, fechafinal1, logro1, responsabilidad1, empresa2, fechainicio2, fechafinal2, logro2, responsabilidad2, empresa3, fechainicio3, fechafinal3, logro3, responsabilidad3, nivelacademico1, titulo1, institucion1, anio1, nivelacademico2, titulo2, institucion2, anio2, nivelacademico3, titulo3, institucion3, anio3) VALUES ('$identificacion','$nombre','$apellidos','$correo','$clave','$fechadenacimiento','$provincia','$canton','$distrito','$otrassenas','$celular','$telefonofijo','$movilidad','$aspiracion','$licencia','$empresa1','$fechainicio1','$fechafinal1','$logro1','$responsabilidad1','$empresa2','$fechainicio2','$fechafinal2','$logro2','$responsabilidad2','$empresa3','$fechainicio3','$fechafinal3','$logro3','$responsabilidad3','$nivelacademico1','$titulo1','$institucion1','$anio1','$nivelacademico2','$titulo2','$institucion2','$anio2','$nivelacademico3','$titulo3','$institucion3','$anio3')";
	
	
	//Almacenar variables de sesión
	session_start(); //Iniciamos o Continuamos la sesion
	$_SESSION['titulo1']=$titulo1;
	$_SESSION['titulo2']=$titulo2;
	$_SESSION['titulo3']=$titulo3;
	
    if(!mysqli_query($conexion,$consulta)){
        die('No se pudo agregar el registro');
    }
}
header('Location: lista.php');