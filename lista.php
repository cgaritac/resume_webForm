<?php
include('conexion.php');
session_start(); //Iniciamos o Continuamos la sesion
$titulo1=strval($_SESSION['titulo1']);
//echo "<script>alert('".$titulo1."');</script>";
$consulta = 'select * from tbPuestosdeempresas where puestosolicitado='."'$titulo1'".'';
$resultado = mysqli_query($conexion,$consulta);
$tabla =<<<FIN
<table>
<tr>
<th>Identificación</th>
<th>Empresa</th>
<th>Puesto Solicitado</th>
<th>Nivel Académico necesario</th>
<th>Titulo necesario</th>
<th>Salario</th>
<th>Contacto</th>
<th>Teléfono</th>
<th>Correo</th>
</tr>
FIN;
while($registro=mysqli_fetch_assoc($resultado)){
    $tabla.='<tr>';
    $tabla.="<td>{$registro['identificacion']}</td>";
    $tabla.="<td>{$registro['empresa']}</td>";
    $tabla.="<td>{$registro['puestosolicitado']}</td>";
    $tabla.="<td>{$registro['nivelacademiconecesario']}</td>";
    $tabla.="<td>{$registro['titulonecesario']}</td>";
    $tabla.="<td>{$registro['salario']}</td>";
    $tabla.="<td>{$registro['contacto']}</td>";
    $tabla.="<td>{$registro['telefono']}</td>";
    $tabla.="<td>{$registro['correo']}</td>";
    //$tabla.="<td><a href=borrar.php?id={$registro['identificacion']}>Borrar</a></td>";
    //$tabla.="<td><a href=editar.php?id={$registro['identificacion']}>Editar</a></td>";
    $tabla.='</tr>';
}
$tabla.='</table>';

//TABLA 2
$titulo2=strval($_SESSION['titulo2']);
//echo "<script>alert('".$titulo2."');</script>";
$consulta = 'select * from tbPuestosdeempresas where puestosolicitado='."'$titulo2'".'';
$resultado = mysqli_query($conexion,$consulta);
$tabla2 =<<<FIN
<table>
<tr>
<th>Identificación</th>
<th>Empresa</th>
<th>Puesto Solicitado</th>
<th>Nivel Académico necesario</th>
<th>Titulo necesario</th>
<th>Salario</th>
<th>Contacto</th>
<th>Teléfono</th>
<th>Correo</th>
</tr>
FIN;
while($registro=mysqli_fetch_assoc($resultado)){
    $tabla2.='<tr>';
    $tabla2.="<td>{$registro['identificacion']}</td>";
    $tabla2.="<td>{$registro['empresa']}</td>";
    $tabla2.="<td>{$registro['puestosolicitado']}</td>";
    $tabla2.="<td>{$registro['nivelacademiconecesario']}</td>";
    $tabla2.="<td>{$registro['titulonecesario']}</td>";
    $tabla2.="<td>{$registro['salario']}</td>";
    $tabla2.="<td>{$registro['contacto']}</td>";
    $tabla2.="<td>{$registro['telefono']}</td>";
    $tabla2.="<td>{$registro['correo']}</td>";
    $tabla2.='</tr>';
}
$tabla2.='</table>';

//TABLA3
$titulo3=strval($_SESSION['titulo3']);
//echo "<script>alert('".$titulo3."');</script>";
	
$consulta = 'select * from tbPuestosdeempresas where puestosolicitado='."'$titulo3'".'';
$resultado = mysqli_query($conexion,$consulta);
$tabla3 =<<<FIN
<table>
<tr>
<th>Identificación</th>
<th>Empresa</th>
<th>Puesto Solicitado</th>
<th>Nivel Académico necesario</th>
<th>Titulo necesario</th>
<th>Salario</th>
<th>Contacto</th>
<th>Teléfono</th>
<th>Correo</th>
</tr>
FIN;
while($registro=mysqli_fetch_assoc($resultado)){
    $tabla3.='<tr>';
    $tabla3.="<td>{$registro['identificacion']}</td>";
    $tabla3.="<td>{$registro['empresa']}</td>";
    $tabla3.="<td>{$registro['puestosolicitado']}</td>";
    $tabla3.="<td>{$registro['nivelacademiconecesario']}</td>";
    $tabla3.="<td>{$registro['titulonecesario']}</td>";
    $tabla3.="<td>{$registro['salario']}</td>";
    $tabla3.="<td>{$registro['contacto']}</td>";
    $tabla3.="<td>{$registro['telefono']}</td>";
    $tabla3.="<td>{$registro['correo']}</td>";
    $tabla3.='</tr>';
}
$tabla3.='</table>';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <title>lista</title>
</head>
<body>
    <div class="contenedor">
        <div class="cabecera">Puestos disponibles por Título Académico</div>
        <div class="contenido">
        <p><a href="registrar.php">Registrar</a></p>
		<h1>TITULO 1</h1>
		<div class="tabla">
        <?php echo $tabla; ?>
        </div>
		<br>
		<h1>TITULO 2</h1>
		<div class="tabla">
        <?php echo $tabla2; ?>
        </div>
		<br>
		<h1>TITULO 3</h1>
		<div class="tabla">
        <?php echo $tabla3; ?>
        </div>
        </div>
    </div>
</body>
</html>