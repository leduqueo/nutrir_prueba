<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<title>Niños</title>
</head>
<body>

	<div class="page-header bg-primary text-white text-center">
		<span class="h4">Niños</span>
	</div>

	<form  method="POST" style="width:35%;margin:0 auto;">

		<fieldset>
			
		<legend class="text-center header text-success">Datos personales</legend>
		<div class="form-group">
             <label for="">Nombres</label>
				<input id="nombreNi" name="nombreNi" class="form-control"   onchange="validarCampos()" required>
				

		</div>
		<div class="form-group">

				<label for="">Apellidos</label>
				<input class="form-control" id="documento" name="documento"  onchange="validarCampos()" required>
				

		</div>
        <div class="form-group">

				<label for="">Numero de registro civil</label>
				<input class="form-control" id="numregisCi" name="numregisCi"  onchange="validarCampos()" required>
				

		</div>
        <div class="form-group">

				<label for="">Fecha de nacimiento</label>
				<input id="fechaNacimi" name="fechaNacimi"  type="date"  class="form-control"  onchange="validarCampos()" required>
				

		</div>
        <div class="form-group">

				<label for="apell">Nombre del acudiente</label>
				<input class="form-control" id="nomacu" name="nomacu"  onchange="validarCampos()" required>
				

		</div>

        <div class="form-group">

				<label for="tip">Tipo de documento de identidad acudiente</label>
				<select  id="tipdocument1"  name="tipdocument1" class="form-control"  onchange="validarCampos()" required>
                <option id="tipdocument1" name="tipdocument1" value="Tarjeta de identidad">Tarjeta de identidad</option>
                <option id="tipdocument1" name="tipdocument1" value="Cedula de ciudadania">Cedula de ciudadania</option>
                <option id="tipdocument1" name="tipdocument1" value="Cedula de extranjeria">Cedula de extranjeria</option>
                <option id="tipdocument1" name="tipdocument1" value="NIT">NIT</option>
			    </select>


				

		</div>
        <div class="form-group">

				<label for="">Número de documento del acudiente</label>
				<input id="numeroTi" name="numeroTi" class="form-control"  onchange="validarCampos()" required>
				

		</div>
        <div class="form-group">

				<label for="">Parentesco</label>
				<input id="paren" name="paren" class="form-control" onchange="validarCampos()" required>
            
				

		</div>
        <div class="form-group">

			     <label for="">EPS</label>
			     <input id="eps1" name="eps1" class="form-control"  onchange="validarCampos()" required>
			

		</div>

        <div class="form-group">

				<label for="">Direccion</label>
				<input id="direcc1" name="direcc1" class="form-control"  onchange="validarCampos()" required>
		</div>

        <div class="form-group">

			   <label for="">Telefono</label>
			   <input id="tele1" name="tele1" class="form-control"  onchange="validarCampos()" required>
			

		</div>
        <div class="form-group">

			<label for="">Fecha de la valoracion</label>
			<input id="fechaVal" name="fechaVal"  type="date"  class="form-control"  onchange="validarCampos()" required>
			

		</div>
        <div class="form-group">

			<label for="">Edad (meses)</label>
			<input id="edadmes" name="edadmes"  type="date"  class="form-control"  onchange="validarCampos()" required>
			

		</div>
        <div class="form-group">

			<label for="">Peso</label>
			<input id="peso1" name="peso1" class="form-control" placeholder="Peso en Kg"  onchange="validarCampos()" required>
			

		</div>
        <div class="form-group">

			<label for="">Talla</label>
			<input id="tall1" name="tall1" class="form-control"  onchange="validarCampos()" required>
			

		</div>
        <div class="form-group">

			<label for="">Perimetro cefálico</label>
			<input id="pericef" name="pericef" class="form-control"  onchange="validarCampos()" required>
			

		</div>
        <div class="form-group">

			<label for="">Desviacion estandar peso/talla</label>
			<input id="desvipesot" name="desvipesot" class="form-control"  onchange="validarCampos()" required>
			

		</div>
        <div class="form-group">

			<label for="">Diagnóstico peso/talla</label>
			<input id="diagnosti" name="diagnosti" class="form-control"  onchange="validarCampos()" required>
			

		</div>
        <div class="form-group">

			<label for="">Desviacion estandar talla/edad</label>
			<input id="desvitalla" name="desvitalla" class="form-control"  onchange="validarCampos()" required>
			

		</div>
        <div class="form-group">

			<label for="">Diagnóstico de talla/edad</label>
			<input id="diagnóstictaed" name="diagnóstictaed" class="form-control"  onchange="validarCampos()" required>
			

		</div>
        <div class="form-group">

			<label for="">Desviación estándar perímetro Cefálico</label>
			<input id="desviestper" name="desviestper" class="form-control"  onchange="validarCampos()" required>
			

		</div>
        <div class="form-group">

			<label for="">Diagnóstico perímetro Cefálico</label>
			<input id="diagnostipericef" name="diagnostipericef" class="form-control"  onchange="validarCampos()" required>
			

		</div>
        <div class="form-group">

			<label for="">Desviación estándar peso/edad</label>
			<input id="desviestpese" name="desviestpese" class="form-control"  onchange="validarCampos()" required>
			

		</div>
        <div class="form-group">

			<label for="">Desviación estándar IMC</label>
			<input id="estimc" name="estimc" class="form-control"  onchange="validarCampos()" required>
			

		</div>
        <div class="form-group">

			<label for="">Fecha último control de crecimiento y desarrollo</label>
			<input id="fechaCon" name="fechaCon"  type="date"  class="form-control"  onchange="validarCampos()" required>
			

		</div>
        <div class="form-group">

			<label for="">Fecha última vacuna</label>
			<input id="fechaultivac" name="fechaultivac"  type="date"  class="form-control"  onchange="validarCampos()" required>
			

		</div>
        <div class="form-group">

			
			<button onchange="validarCampos()" name="registrar" class="btn btn-success form-control" >Registrar</button>
			

		</div>

		

	</fieldset>












    </form>            