<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registro en bolsa de empleo</title>
</head>
<body>
    <div class="contenedor">
        <div class="cabecera">Registro en bolsa de empleo</div>
        <div class="contenido">
            <form action="registra.php" method='post'>
            <label for="i1">Identificacion</label>
            <input type="number" id="i1" name="c1"><!--VALIDACIÓN E.2.1 En los datos personales se tiene el campo de identificación que recibe solamente valores numéricos. -->
            <br>
            <label for="i2">Nombre</label>
            <input type="text" id="i2" name="c2">
            <br>
            <label for="i3">Apellidos</label>
            <input type="text" id="i3" name="c3">
            <br>
            <label for="i4">Correo</label>
            <input type="text" id="i4" name="c4">
            <br>
            <label for="i5">Clave</label>
            <input type="text" id="i5" name="c5">
            <br>
            <label for="i6">Fecha de nacimiento</label>
            <input type="date" id="i6" name="c6" min="01/01/1950"><!--VALIDACIÓN E.2.2  La fecha de nacimiento no puede ser menor de 1950.-->
            <br><br>
            <label for="i7">Provincia</label>
            <input type="text" id="i7" name="c7">
            <br>
            <label for="i8">Cantón</label>
            <input type="text" id="i8" name="c8">
            <br>
            <label for="i9">Distrito</label>
            <input type="text" id="i9" name="c9">
            <br>
            <label for="i10">Otras Señas</label>
            <input type="text" id="i10" name="c10">
            <br>
            <label for="i11">Celular</label>
            <input type="text" id="i11" name="c11">
            <br>
            <label for="i12">Teléfono fijo</label>
            <input type="text" id="i12" name="c12">
            <br>
			
            <label for="i13">Movilidad Laboral</label>
            <select id="i13" name="c13">
				<option>SI</option>
				<option>NO</option>
			</select>
            <br>
            <label for="i14">Aspiración Salarial</label>            
            <select id="i14" name="c14">
				<option>300,000 a 400,000</option>
				<option>400,001 a 500,000</option>
				<option>500,001 a 600,000</option>
				<option>Mayor a 600,000</option>
			</select>
			<br>
			<br>
            <label for="i15">Licencia de conducir</label>
            <select id="i15" name="c15">
				<option>SI</option>
				<option>NO</option>
			</select>
            <br>
			
			<h1>EMPRESA DONDE LABORO 1</h1>
            <label for="i16">Empresa</label>
            <input type="text" id="i16" name="c16">
            <br>
            <label for="i17">Fecha de inicio</label>
            <input type="date" id="i17" name="c17">
            <br>
            <label for="i18">Fecha final</label>
            <input type="date" id="i18" name="c18" min="01/01/1980"><!--VALIDACIÓN E.2.6  El año de concluido un estudio, debe ser mayor a 1980. -->
            <br>
            <label for="i19">Logro</label>
            <input type="text" id="i19" name="c19">
            <br>
            <label for="i20">Responsabilidad</label>
            <input type="text" id="i20" name="c20">
            <br>
			
			<h1>EMPRESA DONDE LABORO 2</h1>
            <label for="i21">Empresa</label>
            <input type="text" id="i21" name="c21">
            <br>
            <label for="i22">Fecha de inicio</label>
            <input type="date" id="i22" name="c22">
            <br>
            <label for="i23">Fecha final</label>
            <input type="date" id="i23" name="c23" min="01/01/1980"><!--VALIDACIÓN E.2.6  El año de concluido un estudio, debe ser mayor a 1980. -->
            <br>
            <label for="i24">Logro</label>
            <input type="text" id="i24" name="c24">
            <br>
            <label for="i25">Responsabilidad</label>
            <input type="text" id="i25" name="c25">
            <br>
			
			<h1>EMPRESA DONDE LABORO 3</h1>
            <label for="i26">Empresa</label>
            <input type="text" id="i26" name="c26">
            <br>
            <label for="i27">Fecha de inicio</label>
            <input type="date" id="i27" name="c27">
            <br>
            <label for="i28">Fecha final</label>
            <input type="date" id="i28" name="c28" min="01/01/1980"><!--VALIDACIÓN E.2.6  El año de concluido un estudio, debe ser mayor a 1980. -->
            <br>
            <label for="i29">Logro</label>
            <input type="text" id="i29" name="c29">
            <br>
            <label for="i30">Responsabilidad</label>
            <input type="text" id="i30" name="c30">
            <br>
			
			<h1>ÚLTIMO NIVEL ACADÉMICO ALCANZADO</h1>
            <label for="i31">Nivel académico</label>          
            <select id="i31" name="c31">
				<option>N/A</option>
				<option>Doctorado</option>
				<option>Maestria</option>
				<option>Licenciatura</option>
				<option>Bachillerato</option>
				<option>Diplomado</option>
				<option>Técnico</option>
			</select>
            <br>
            <label for="i32">Título</label>           
            <select id="i32" name="c32">
				<option>N/A</option>
				<option>ADMINISTRACION</option>
				<option>EDUCACION</option>
				<option>TECNOLOGIA</option>
				<option>MEDICINA</option>
				<option>COMUNICACION</option>
			</select>
            <br>
            <label for="i33">Institución</label>
            <input type="text" id="i33" name="c33">
            <br>
            <label for="i34">Año</label>
            <input type="text" id="i34" name="c34">
            <br>
			
			<h1>PENÚLTIMO NIVEL ACADÉMICO ALCANZADO</h1>
            <label for="i35">Nivel académico</label>           
            <select id="i35" name="c35">
				<option>N/A</option>
				<option>Doctorado</option>
				<option>Maestria</option>
				<option>Licenciatura</option>
				<option>Bachillerato</option>
				<option>Diplomado</option>
				<option>Técnico</option>
			</select>
            <br>
            <label for="i36">Título</label>           
            <select id="i36" name="c36">
				<option>N/A</option>
				<option>ADMINISTRACION</option>
				<option>EDUCACION</option>
				<option>TECNOLOGIA</option>
				<option>MEDICINA</option>
				<option>COMUNICACION</option>
			</select>
            <br>
            <label for="i37">Institución</label>
            <input type="text" id="i37" name="c37">
            <br>
            <label for="i38">Año</label>
            <input type="text" id="i38" name="c38">
            <br>
			
			<h1>ANTE-PENÚLTIMO NIVEL ACADÉMICO ALCANZADO</h1>
            <label for="i39">Nivel académico</label>           
            <select id="i39" name="c39">
				<option>N/A</option>
				<option>Doctorado</option>
				<option>Maestria</option>
				<option>Licenciatura</option>
				<option>Bachillerato</option>
				<option>Diplomado</option>
				<option>Técnico</option>
			</select>
            <br>
            <label for="i40">Título</label>           
            <select id="i40" name="c40">
				<option>N/A</option>
				<option>ADMINISTRACION</option>
				<option>EDUCACION</option>
				<option>TECNOLOGIA</option>
				<option>MEDICINA</option>
				<option>COMUNICACION</option>
			</select>
            <br>
            <label for="i41">Institución</label>
            <input type="text" id="i41" name="c41">
            <br>
            <label for="i42">Año</label>
            <input type="text" id="i42" name="c42">
            <br>
            <input type="submit" value="GUARDAR">
            </form>
        </div>
    </div>
</body>
</html>