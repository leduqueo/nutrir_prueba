
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<title>Gestantes</title>
</head>
<body>


	
	<div >
	<h1 class="text-center">Registro gestantes</h1>
	</div>
	<br>


<form action="" class="d-flex justify-content-center" >
<fieldset>   
<legend class="text-center header text-success">Datos gestantes</legend> 

<div style="text-align: center;" class="form-group">

				<label for="est">Estado</label>
				<select name="estad" id="estad"class="form-control" onchange="validarCampos()" required>
                    <option  id="estad" name="estad" value="1">Activo</option>
                    <option  id="estad" name="estad" value="2">Inactivo</option>
                </select>
				

</div>
<br>
<div style="text-align: center;" class="form-group"> 

    <label for="est">Programa</label>
				<select name="program" id="program"class="form-control" onchange="validarCampos()" required>
                    <option  id="program" name="program" value="1">Comedores</option>
                    <option  id="program" name="program" value="2">Gestar futuro</option>
                </select>



</div>
<br>
<div style="text-align: center;" class="form-group"> 

    <label for="est">Unidad de servicio</label>
				<select name="unid" id="unid"class="form-control" onchange="validarCampos()" required>
                    <option  id="unid" name="unid" value="">Buena Vista</option>
                    <option  id="unid" name="unid" value="">Comuneros</option>
                    <option  id="unid" name="unid" value="">El Carmen</option>
                    <option  id="unid" name="unid" value="">Guayabal</option>
                    <option  id="unid" name="unid" value="">Hogar Amigos</option>
                    <option  id="unid" name="unid" value="">Jaime Restrepo</option>
                    <option  id="unid" name="unid" value="">Juan XXIII</option>
                    <option  id="unid" name="unid" value="">La Frontera</option>
                    <option  id="unid" name="unid" value="">La Playita</option>
                    <option  id="unid" name="unid" value="">La Victoria</option>
                    <option  id="unid" name="unid" value="">Marmato</option>
                    <option  id="unid" name="unid" value="">Nevado</option>
                    <option  id="unid" name="unid" value="">Pastoral Social</option>
                    <option  id="unid" name="unid" value="">Perpetuo Socorro</option>
                    <option  id="unid" name="unid" value="">San Anibal</option>
                    <option  id="unid" name="unid" value="">San Cayetano</option>
                    <option  id="unid" name="unid" value="">San Sebastian</option>
                    <option  id="unid" name="unid" value="">Santa Ana</option>
                    <option  id="unid" name="unid" value="">Solferino</option>
                    <option  id="unid" name="unid" value="">Villa del Carmen</option>
                    
                </select>




</div>
<br>

<div style="text-align: center;" class="form-group" > 

<label for="est">Municipio de ubicacion de la unidad de servicio</label>
<input type="text" id="muniUbi" name="muniUbi" class="form-control" onchange="validarCampos()" >




</div>
<br>
<div style="text-align: center;" class="form-group"> 

    <label for="est">Convenio</label>
    <select name="conve" id="conve"class="form-control" onchange="validarCampos()" required>
                    <option  id="conve" name="conve" value="">Alcaldia</option>
                    <option  id="conve" name="conve" value="">Exito</option>
                    <option  id="conve" name="conve" value="">Luker</option>
                    <option  id="conve" name="conve" value="">Buen Cafe</option>
                    <option  id="conve" name="conve" value="">Terpel</option>
                    <option  id="conve" name="conve" value="">SUMATEC</option>
                    <option  id="conve" name="conve" value="">SURA</option>
                    <option  id="conve" name="conve" value="">Ninguna</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group"> 

    <label for="est">Tipo de población</label>
    <select name="tipo" id="tipo"class="form-control" onchange="validarCampos()" required>
      <option  id="tipo" name="tipo" value="">Niñez</option>
      <option  id="tipo" name="tipo" value="">Gestante</option>
      <option  id="tipo" name="tipo" value="">Lactante</option>
    

</select>
</div>
<br>

<div class="form-group">

			<label for="fechaI">Fecha de inscripcion</label>
			<input id="fechaI" name="fechaI"  type="date"  class="form-control"  onchange="validarCampos()" required>

			

</div>
<br>
<div class="form-group">
<label for="manej">Autoriza manejo de la informacion y permiso fotografico</label>

<select name="manej" id="manej"class="form-control" onchange="validarCampos()" required>
      <option  id="manej" name="manej" value="">Si</option>
      <option  id="manej" name="manej" value="">No</option> 

</select>
</div>
<br>

<div style="text-align: center;" class="form-group" > 

<label for="tall">Talla al ingreso</label>
<input type="number" id="tall" name="tall" class="form-control" placeholder="Metros" onchange="validarCampos()" >

</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="peso">Peso al ingreso</label>
<input type="number" id="peso" name="peso" class="form-control" placeholder="KG" onchange="validarCampos()" >

</div>

<br>
<div style="text-align: center;" class="form-group" > 

<label for="peso">Estado nutrición al día de ingreso</label>
<input type="text" id="dig" name="dig" class="form-control"  onchange="validarCampos()" >

</div>
<br>
<div style="text-align: center;" class="form-group"> 

    <label for="naciter">Nacimiento a termino</label>
    <select name="naciter" id="naciter"class="form-control" onchange="validarCampos()" required>
      <option  id="naciter" name="naciter" value="">Si</option>
      <option  id="naciter" name="naciter" value="">No</option>
      <option  id="naciter" name="naciter" value="">Nfa</option>
    

</select>
</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="mesc">De cuantos meses fue el nacimiento</label>
<input type="text" id="mesc" name="mesc" class="form-control"  onchange="validarCampos()" >

</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="pri">Primer Nombre</label>
<input type="text" id="pri" name="pri" class="form-control"  onchange="validarCampos()" >

</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="seg">Segundo nombre</label>
<input type="text" id="seg" name="seg" class="form-control"  onchange="validarCampos()" >

</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="pria">Primer apellio</label>
<input type="text" id="pria" name="pria" class="form-control"  onchange="validarCampos()" >

</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="sega">Segungo apellio</label>
<input type="text" id="sega" name="sega" class="form-control"  onchange="validarCampos()" >

</div>
<br>
<div style="text-align: center;" class="form-group"> 

    <label for="naciter">Tipo de documento</label>
    <select name="tipde" id="tipde"class="form-control" onchange="validarCampos()" required>
      <option  id="tipde" name="tipde" value="">RC</option>
      <option  id="tipde" name="tipde" value="">TI</option>
      <option  id="tipde" name="tipde" value="">CC</option>
      <option  id="tipde" name="tipde" value="">CE</option>
      <option  id="tipde" name="tipde" value="">PA</option>
      <option  id="tipde" name="tipde" value="">PEP</option>
      <option  id="tipde" name="tipde" value="">RUT</option>
      <option  id="tipde" name="tipde" value="">SD</option>
      <option  id="tipde" name="tipde" value="">VISA</option>
      <option  id="tipde" name="tipde" value="">TMF</option>
    

</select>

</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="numdoc">Número de documento</label>
<input type="text" id="numdoc" name="numdoc" class="form-control"  onchange="validarCampos()" >

</div>
<br>
<div style="text-align: center;" class="form-group">

			<label for="nacimm">Fecha de nacimiento</label>
			<input id="nacimm" name="nacimm"  type="date"  class="form-control"  onchange="validarCampos()" required>
			

	</div>
<br>
<br>
<h1>Edad</h1>
<br>
<div  style="text-align: center;" class="form-group">
<label for="content">Años</label>
<div id= "content" name="content" class="form-control"> </div>
    
</div>
<div style="text-align: center;" class="form-group">

			<label for="etario">Grupo Etario</label>
			<div id= "etario" name="etario" class="form-control"> </div>
    
</div>
<br>
<div style="text-align: center;" class="form-group">

			<label for="fechval">Fecha de valoracion</label>
			<input id="fechval" name="fechval"  type="date"  class="form-control"  onchange="validarCampos()" required>
			

	</div>
    <br>
<div style="text-align: center;" class="form-group" > 

<label for="pesoActual">Peso </label>
<input type="number" id="pesoActual" name="pesoActual" class="form-control" placeholder="KILOGRAMOS" onchange="validarCampos()" >

</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="tallaActual">Talla</label>
<input type="number" id="tallaActual" name="tallaActual" class="form-control" placeholder="METROS" onchange="validarCampos()" >

</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="estNut">Estado nutricional en valoración</label>
<input type="text" id="estNut" name="estNut" class="form-control"  onchange="validarCampos()" >
</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="muniNaci">Municipio de Nacimiento</label>
<select name="muniNaci" id="muniNaci" class="form-control"></select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="deparNaci">Departamento de Nacimiento</label>
<select name="deparNaci" id="deparNaci" class="form-control"></select>

</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="paisNaci">Pais de Nacimiento</label>
<select name="paisNaci" id="paisNaci" class="form-control"></select>

</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="genero">Genero</label>
<select name="genero" id="genero" class="form-control"> 
<option name="genero" id="genero" value="">Femenino</option>
<option name="genero" id="genero" value="">Masculino</option>
<option name="genero" id="genero" value="">Otro</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="pertenencietn">Pertenencia etnica</label>
<select name="pertenencietn" id="pertenencietn" class="form-control">
<option name="pertenencietn" id="pertenencietn" value="Indígena">Indigena</option>
<option name="pertenencietn" id="pertenencietn" value="">Rom (gitano)</option>
<option name="pertenencietn" id="pertenencietn" value="">Raizal Del Archipiélago De San Andres Y Providencia</option>
<option name="pertenencietn" id="pertenencietn" value="">Negro-A</option>
<option name="pertenencietn" id="pertenencietn" value="">Mulato-A</option>
<option name="pertenencietn" id="pertenencietn" value="">Afrocolombiano-A</option>
<option name="pertenencietn" id="pertenencietn" value="">Afrodescendiente</option>
<option name="pertenencietn" id="pertenencietn" value="">Ninguno de los anteriores</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="parentescbene">Parentesco con otro beneficiario</label>
<select name="parentescbene" id="parentescbene" class="form-control">
<option name="parentescbene" id="parentescbene" value="">Madre</option>
<option name="parentescbene" id="parentescbene" value="">Hijo-a</option>
<option name="parentescbene" id="parentescbene" value="">Hermano-a</option>
<option name="parentescbene" id="parentescbene" value="">Primo-a</option>
<option name="parentescbene" id="parentescbene" value="">Tío-a</option>
<option name="parentescbene" id="parentescbene" value="">Sobrino-a</option>
<option name="parentescbene" id="parentescbene" value="">Abuelo-a</option>
<option name="parentescbene" id="parentescbene" value="">Nieto-a</option>
<option name="parentescbene" id="parentescbene" value="">Otro</option>
<option name="parentescbene" id="parentescbene" value="">No aplica</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="estciv">Estado civil</label>
<select name="estciv" id="estciv" class="form-control">
<option name="estciv" id="estciv" value="">Soltero(a)</option>
<option name="estciv" id="estciv" value="">Casado(a)</option>
<option name="estciv" id="estciv" value="">Separado(a)</option>
<option name="estciv" id="estciv" value="">Unión Libre</option>
<option name="estciv" id="estciv" value="">Viudo(a)</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="poblaDesp">Poblacion desplazada</label>
<select name="poblaDesp" id="poblaDesp" class="form-control">
<option name="poblaDesp" id="poblaDesp" value="">Si</option>
<option name="poblaDesp" id="poblaDesp" value="">No</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="victim">¿Victima de otro tipo de violencia?</label>
<select name="victim" id="victim" class="form-control">
<option name="victim" id="victim" value="">Si</option>
<option name="victim" id="victim" value="">No</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="cual">¿Cual?</label>
<input type="text" id="cual" name="cual" class="form-control" >
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="estciv">¿Sabe leer y escribir?</label>
<select name="poblaDesp" id="poblaDesp" class="form-control">
<option name="poblaDesp" id="poblaDesp" value="">Si</option>
<option name="poblaDesp" id="poblaDesp" value="">No</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="nived">Nivel educativo</label>
<select name="nived" id="nived" class="form-control">
<option name="nived" id="nived" value="">Jardín</option>
<option name="nived" id="nived" value="">Preescolar</option>
<option name="nived" id="nived" value="">Básica Primaria Completa</option>
<option name="nived" id="nived" value="">Básica Primaria Incompleta</option>
<option name="nived" id="nived" value="">Secundaria Completa</option>
<option name="nived" id="nived" value="">Secundaria Incompleta</option>
<option name="nived" id="nived" value="">Técnico</option>
<option name="nived" id="nived" value="">Tecnológico</option>
<option name="nived" id="nived" value="">Universitaria Compelto</option>
<option name="nived" id="nived" value="">Universitaria Incompleta</option>
<option name="nived" id="nived" value="">Posgrado Completo</option><option name="nived" id="nived" value="">No</option>
<option name="nived" id="nived" value="">Posgrado Incompleto</option>
<option name="nived" id="nived" value="">Ninguno</option>
</select>

</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="estciv">¿Estudia actualmente?</label>
<select name="estudiAct" id="estudiAct" class="form-control">
<option name="estudiAct" id="estudiAct" value="">Si</option>
<option name="estudiAct" id="estudiAct" value="">No</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="cual">Grado que cursa actualmente</label>
<input type="text" id="gradAct" name="cual" class="form-control" >
</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="cual">Institucion educativa</label>
<input type="text" id="insti" name="insti" class="form-control" >
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="nived">Jornada de estudio</label>
<select name="jornadaEst" id="jornadaEst" class="form-control">
<option name="jornadaEst" id="jornadaEst" value="">Mañana</option>
<option name="jornadaEst" id="jornadaEst" value="">Tarde</option>
<option name="jornadaEst" id="jornadaEst" value="">Única</option>
<option name="jornadaEst" id="jornadaEst" value="">Nocturna</option>
<option name="jornadaEst" id="jornadaEst" value="">Alterna</option>
<option name="jornadaEst" id="jornadaEst" value="">Sabatina</option>
</select>

</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="curso">¿Ha realizado algun curso?</label>
<select name="curso" id="curso" class="form-control">
<option name="curso" id="curso" value="">Si</option>
<option name="curso" id="curso" value="">No</option>
</select>
</div>
<br>

<div style="text-align: center;" class="form-group" > 

<label for="cualcur">¿Cual?</label>
<input type="text" id="cualcur" name="cualcur" class="form-control" >
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="inscriprog">¿Esta inscrito en otro programa social?</label>
<select name="inscriprog" id="inscriprog" class="form-control">
<option name="inscriprog" id="inscriprog" value="">Si</option>
<option name="inscriprog" id="inscriprog" value="">No</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="program1">¿Que programa?</label>
<input type="text" id="program1" name="program1" class="form-control" >
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="tiposubci">¿Cuenta con algun tipo de subsidio?</label>
<select name="tiposubci" id="tiposubci" class="form-control">
<option name="tiposubci" id="tiposubci" value="">Si</option>
<option name="tiposubci" id="tiposubci" value="">No</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="cualsub">¿Cual?</label>
<input type="text" id="cualsub" name="cualsub" class="form-control" >
</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="ingressub">Ingresos recibidos por subcidios</label>
<input type="number" id="ingressub" name="ingressub" class="form-control" >
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="regimSeg">Regimen de seguridad social</label>
<select name="regimSeg" id="regimSeg" class="form-control">
<option name="regimSeg" id="regimSeg" value="">Vinculado</option>
<option name="regimSeg" id="regimSeg" value="">Subsidiado</option>
<option name="regimSeg" id="regimSeg" value="">Contributivo </option>
<option name="regimSeg" id="regimSeg" value="">Especial</option>
<option name="regimSeg" id="regimSeg" value="">No afiliado</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="nombEA">Nombre de la EAPB</label>
<input type="text" id="nombEA" name="nombEA" class="form-control">
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="tipafi">Tipo de Afiliación</label>
<select name="tipafi" id="tipafi" class="form-control">
<option name="tipafi" id="tipafi" value="">Cotizante</option>
<option name="tipafi" id="tipafi" value="">Beneficiario</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="categSisb">Categoria de sisben</label>
<select name="categSisb" id="categSisb" class="form-control">
<option name="categSisb" id="categSisb" value="">Desde A1 hasta A5</option>
<option name="categSisb" id="categSisb" value="">Desde B1 hasta B7</option>
<option name="categSisb" id="categSisb" value="">Desde C1 hasta C18 </option>
<option name="categSisb" id="categSisb" value="">Desde D1 hasta D21</option>
<option name="categSisb" id="categSisb" value="">No Aplica</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="diversidFun">Diversidad funcional</label>
<select name="diversidFun" id="diversidFun" class="form-control">
<option name="diversidFun" id="diversidFun" value="">Movilidad (Física)</option>
<option name="diversidFun" id="diversidFun" value="">Piel, Uñas y Cabello (Física)</option>
<option name="diversidFun" id="diversidFun" value=""> Auditiva (Sensorial)</option>
<option name="diversidFun" id="diversidFun" value="">Visual (Sensorial)</option>
<option name="diversidFun" id="diversidFun" value="">Sordo-Ceguera (Sensorial)</option>
<option name="diversidFun" id="diversidFun" value="">Gusto, Olfato, Tacto (Sensorial)</option>
<option name="diversidFun" id="diversidFun" value="">Voz y Habla (Sensorial)</option>
<option name="diversidFun" id="diversidFun" value="">Sistémica</option>
<option name="diversidFun" id="diversidFun" value="">Cognitiva (Mental)</option>
<option name="diversidFun" id="diversidFun" value="">Psicosocial (Mental)</option>
<option name="diversidFun" id="diversidFun" value="">Enanismo </option>
<option name="diversidFun" id="diversidFun" value="">Multidéficit</option>
<option name="diversidFun" id="diversidFun" value="">Alteración del Desarrollo</option>
<option name="diversidFun" id="diversidFun" value="">Trastorno generalizado del desarrollo</option>
<option name="diversidFun" id="diversidFun" value="">Ninguno</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="pesonac">Peso al nacer</label>
<input type="number" id="pesonac" name="pesonac" class="form-control" placeholder="Gramos" onchange="validarCampos()" >

</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="tallanac">Talla al nacer</label>
<input type="number" id="tallanac" name="tallanac" class="form-control" placeholder="Gramos" onchange="validarCampos()" >

</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="recilact">¿Recibio lactancia materna?</label>
<select name="recilact" id="recilact" class="form-control">
<option name="recilact" id="recilact" value="">Si</option>
<option name="recilact" id="recilact" value="">No</option>
</select>
</div>
<br>

<div style="text-align: center;" class="form-group" > 

<label for="tiemplact">Tiempo lactancia materna exclusiva</label>
<input type="number" id="tiemplact" name="tiemplact" class="form-control" placeholder="Meses"  >

</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="totallact">Total lactancia materna</label>
<input type="number" id="totallact" name="totallact" class="form-control" placeholder="Meses" >

</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="esquemVac">Esquema de vacunacion completo</label>
<select name="esquemVac" id="esquemVac" class="form-control">
<option name="esquemVac" id="esquemVac" value="">Si</option>
<option name="esquemVac" id="esquemVac" value="">No</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="vacPendi">Vacunas pendientes</label>
<select name="vacPendi" id="vacPendi" class="form-control">
<option name="vacPendi" id="vacPendi" value="">BGC Antituberculosa</option>
<option name="vacPendi" id="vacPendi" value="">Antipolio</option>
<option name="vacPendi" id="vacPendi" value="">Antirotavirus</option>
<option name="vacPendi" id="vacPendi" value="">Difteria, Tosferina y Tetanos (DPT)</option>
<option name="vacPendi" id="vacPendi" value="">Neumococo</option>
<option name="vacPendi" id="vacPendi" value="">Triple Viral</option>
<option name="vacPendi" id="vacPendi" value="">Haemophilus Influenza tipo B</option>
<option name="vacPendi" id="vacPendi" value="">Antihepatitis B</option>
<option name="vacPendi" id="vacPendi" value="">Fiebre Amarilla</option>
<option name="vacPendi" id="vacPendi" value="">Influenza</option>

</select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="control">¿Ha tenido control de salud en los ultimos 12 meses?</label>
<select name="control" id="control" class="form-control">
<option name="control" id="control" value="">Si</option>
<option name="control" id="control" value="">No</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="totallact">Edad gestacional al ingreso del programa</label>
<input type="number" id="totallact" name="totallact" class="form-control" placeholder="Semanas" >

</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="metodplani">Metodo de planificación</label>
<select name="metodplani" id="metodplani" class="form-control">
<option name="metodplani" id="metodplani" value="">DIU</option>
<option name="metodplani" id="metodplani" value="">Implante subdérmico</option>
<option name="metodplani" id="metodplani" value="">Pastillas</option>
<option name="metodplani" id="metodplani" value="">Condón</option>
<option name="metodplani" id="metodplani" value="">Vasectomía</option>
<option name="metodplani" id="metodplani" value="">Pomeroi</option>
<option name="metodplani" id="metodplani" value="">Histerectomía</option>
<option name="metodplani" id="metodplani" value="">Histerectomía</option>
<option name="metodplani" id="metodplani" value="">Ritmo</option>
<option name="metodplani" id="metodplani" value="">Otro</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="antecedentesclin">Antecedentes clinicos</label>
<select name="antecedentesclin" id="antecedentesclin" class="form-control">
<option name="antecedentesclin" id="antecedentesclin" value="">Si</option>
<option name="antecedentesclin" id="antecedentesclin" value="">No</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="tqueanteced">Que antecedentes clinicos</label>
<input type="text" id="tqueanteced" name="tqueanteced" class="form-control">

</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="antecedepato">Antedecente patológico familiar importante</label>
<input type="text" id="antecedepato" name="antecedepato" class="form-control">

</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="consumoEsp">¿Antecedentes de consumo de SPA en la familia?</label>
<select name="consumoEsp" id="consumoEsp" class="form-control">
<option name="consumoEsp" id="consumoEsp" value="">Si</option>
<option name="consumoEsp" id="consumoEsp" value="">No</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="consumAlco">¿Consume alcohol?</label>
<select name="consumAlco" id="consumAlco" class="form-control">
<option name="consumAlco" id="consumAlco" value="">Si</option>
<option name="consumAlco" id="consumAlco" value="">No</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="consumCiga">¿Consume cigarrillo?</label>
<select name="consumCiga" id="consumCiga" class="form-control">
<option name="consumCiga" id="consumCiga" value="">Si</option>
<option name="consumCiga" id="consumCiga" value="">No</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="consumSpa">¿Consume SPA?</label>
<select name="consumSpa" id="consumSpa" class="form-control">
<option name="consumSpa" id="consumSpa" value="">Si</option>
<option name="consumSpa" id="consumSpa" value="">No</option>
</select>
</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="cualSpa">¿Cual SPA?</label>
<input type="text" id="cualSpa" name="cualSpa" class="form-control">

</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="muniNaci">Municipio</label>
<select name="muniUbi" id="muniUbi" class="form-control"></select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="deparUbi">Departamento</label>
<select name="deparUbi" id="deparUbi" class="form-control"></select>

</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="zonUbi">Zona</label>
<select name="zonUbi" id="zonUbi" class="form-control"></select>
 <option name="zonUbi" id="zonUbi" value="">Cabecera municipal</option>
 <option name="zonUbi" id="zonUbi" value="">Rural</option>
 </select>
</div>
<br>

<div style="text-align: center;" class="form-group">
<label for="comunMani">Comuna (Solo para Manizales)</label>
<select name="comunMani" id="comunMani" class="form-control">
 <option name="comunMani" id="comunMani" value="">Atardeceres </option>
 <option name="comunMani" id="comunMani" value="">Ciudadela del Norte</option>
 <option name="comunMani" id="comunMani" value="">Cumanday</option>
 <option name="comunMani" id="comunMani" value="">Ecoturistico</option>
 <option name="comunMani" id="comunMani" value="">Cerro de Oro</option>
 <option name="comunMani" id="comunMani" value="">La Estación</option>
 <option name="comunMani" id="comunMani" value="">La Fuente</option>
 <option name="comunMani" id="comunMani" value="">La Macarena</option>
 <option name="comunMani" id="comunMani" value="">San José</option>
 <option name="comunMani" id="comunMani" value="">Tesorito</option>
 <option name="comunMani" id="comunMani" value="">Universitaria</option>

 </select>
</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="barrioVered">Barrio/Vereda</label>
<input type="text" id="barrioVered" name="barrioVered" class="form-control">

</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="domidirec">Domicilio direccion</label>
<input type="text" id="domidirec" name="domidirec" class="form-control">

</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="telefono">Teléfono</label>
<input type="text" id="telefono" name="telefono" class="form-control">

</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="celular">Celular</label>
<input type="text" id="celular" name="celular" class="form-control">

</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="celu2">Celular 2</label>
<input type="text" id="celu2" name="celu2" class="form-control">

</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="socioEco">Estrato socioeconómico</label>
<select name="socioEco" id="socioEco" class="form-control">
 <option name="socioEco" id="socioEco" value="">1</option>
 <option name="socioEco" id="socioEco" value="">2</option>
 <option name="socioEco" id="socioEco" value="">3</option>
 <option name="socioEco" id="socioEco" value="">4</option>
 <option name="socioEco" id="socioEco" value="">5</option>
 <option name="socioEco" id="socioEco" value="">6</option>
 
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="tipdeVi">Tipo de vivienda</label>
<select name="tipdeVi" id="tipdeVi" class="form-control">
 <option name="tipdeVi" id="tipdeVi" value=""> Apartamento</option>
 <option name="tipdeVi" id="tipdeVi" value="">Inquilinato</option>
 <option name="tipdeVi" id="tipdeVi" value="">Cuarto (s)</option>
 <option name="tipdeVi" id="tipdeVi" value="">Institución</option>
 <option name="tipdeVi" id="tipdeVi" value="">Finca</option>
 <option name="tipdeVi" id="tipdeVi" value=""> Vivienda Tradicional Étnica</option>
 
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="tenencia">Tenencia</label>
<select name="tenencia" id="tenencia" class="form-control">
 <option name="tenencia" id="tenencia" value="">Propia, totalmente pagada</option>
 <option name="tenencia" id="tenencia" value="">Propia, la están pagando</option>
 <option name="tenencia" id="tenencia" value="">En arriendo o subarriendo</option>
 <option name="tenencia" id="tenencia" value="">En usufructo (prestada)</option>
 <option name="tenencia" id="tenencia" value="">Posesión sin título (invasión)</option>
 <option name="tenencia" id="tenencia" value="">Posesión sin título (invasión)</option>
 <option name="tenencia" id="tenencia" value="">Título de propiedad colectiva</option>
 <option name="tenencia" id="tenencia" value="">Familiar</option>
 
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="materi">Material de la estructura</label>
<select name="materi" id="materi" class="form-control">
 <option name="materi" id="materi" value="">Bloque, ladrillo, piedra, madera pulida.</option>
 <option name="materi" id="materi" value="">Tapia pisada, adobe.</option>
 <option name="materi" id="materi" value="">Bahareque revocado</option>
 <option name="materi" id="materi" value="">Madera burda, tabla, tablón.</option>
 <option name="materi" id="materi" value="">Material prefabricado</option>
 <option name="materi" id="materi" value="">Guadua, caña, esterilla, otro vegetal</option>
 <option name="materi" id="materi" value="">Material mixto</option>
 <option name="materi" id="materi" value="">Guadua, caña, esterilla, otro vegetal</option>
 <option name="materi" id="materi" value="">Zinc, tela, cartón, latas, desechos, plástico</option>
 <option name="materi" id="materi" value="">Sin paredes</option>
 

</select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="materiSuel">Material del suelo</label>
<select name="materiSuel" id="materiSuel" class="form-control">
 <option name="materiSuel" id="materiSuel" value="">Alfombra o tapete de pared a pared</option>
 <option name="materiSuel" id="materiSuel" value="">Madera pulida y lacada, parqué</option>
 <option name="materiSuel" id="materiSuel" value="">Mármol</option>
 <option name="materiSuel" id="materiSuel" value="">Baldosa, vinilo, tableta, ladrillo</option>
 <option name="materiSuel" id="materiSuel" value="">Madera burda, tabla, tablón, otro vegetal</option>
 <option name="materiSuel" id="materiSuel" value="">Cemento, gravilla</option>
 <option name="materiSuel" id="materiSuel" value="">Tierra, arena</option>
 </select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="serviciosPub">Servicios públicos con los que cuenta la vivienda</label>
<select name="serviciosPub" id="serviciosPub" class="form-control">
 <option name="serviciosPub" id="serviciosPub" value="">Agua</option>
 <option name="serviciosPub" id="serviciosPub" value="">Luz</option>
 <option name="serviciosPub" id="serviciosPub" value="">Alcantarillado</option>
 <option name="serviciosPub" id="serviciosPub" value="">Gas natural</option>
 <option name="serviciosPub" id="serviciosPub" value="">Telefonía</option>
 <option name="serviciosPub" id="serviciosPub" value="">Televisión</option>
 <option name="serviciosPub" id="serviciosPub" value="">Internet</option>
 </select>
</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="cuantosCuartos">¿Cuantos cuartos hay incluyendo sala comedor?</label>
<input type="text" id="cuantosCuartos" name="cuantosCuartos" class="form-control">

</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="cuantosCuartosduer">¿En cuantos cuartos duermen las personas de la vivienda?</label>
<input type="text" id="cuantosCuartosduer" name="cuantosCuartosduer" class="form-control">

</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="serviciosPubcuen">¿Con que servicio sanitario cuenta la vivienda?</label>
<select name="serviciosPubcuen" id="serviciosPubcuen" class="form-control">
 <option name="serviciosPubcuen" id="serviciosPubcuen" value="">Inodoro conectado a alcantarillado</option>
 <option name="serviciosPubcuen" id="serviciosPubcuen" value="">Inodoro conectado a pozo séptico</option>
 <option name="serviciosPubcuen" id="serviciosPubcuen" value="">Inodoro sin conexión</option>
 <option name="serviciosPubcuen" id="serviciosPubcuen" value="">Letrina</option>
 <option name="serviciosPubcuen" id="serviciosPubcuen" value="">Descarga directa a fuente de agua</option>
 <option name="serviciosPubcuen" id="serviciosPubcuen" value="">No tiene servicio sanitario</option>
 </select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="dedondeObt">¿De donde obtiene el agua para consumo y preparacion de alimentos?</label>
<select name="dedondeObt" id="dedondeObt" class="form-control">
 <option name="dedondeObt" id="dedondeObt" value="">cueducto público</option>
 <option name="dedondeObt" id="dedondeObt" value="">Acueducto veredal</option>
 <option name="dedondeObt" id="dedondeObt" value="">Poza con bomba</option>
 <option name="dedondeObt" id="dedondeObt" value="">Poza sin bomba o jagüey</option>
 <option name="dedondeObt" id="dedondeObt" value="">Agua lluvia</option>
 <option name="dedondeObt" id="dedondeObt" value="">Rio, quebrada, manantial o nacimiento</option>
 <option name="dedondeObt" id="dedondeObt" value="">Pila pública</option>
 <option name="dedondeObt" id="dedondeObt" value="">Carrotanque</option>
 <option name="dedondeObt" id="dedondeObt" value="">Aguatero</option>
 <option name="dedondeObt" id="dedondeObt" value="">Agua embotellada o en bolsa</option>
 <option name="dedondeObt" id="dedondeObt" value="">Otra</option>

 
</select>
 </div>
<br>
<div style="text-align: center;" class="form-group">
<label for="cuantascomidasDia">¿Usualmente cuántas comidas al dia consume la familia?</label>
<select name="cuantascomidasDia" id="cuantascomidasDia" class="form-control">
 <option name="cuantascomidasDia" id="cuantascomidasDia" value="">Una</option>
 <option name="cuantascomidasDia" id="cuantascomidasDia" value="">Dos</option>
 <option name="cuantascomidasDia" id="cuantascomidasDia" value="">Tres</option>
 <option name="cuantascomidasDia" id="cuantascomidasDia" value="">Mas de tres</option>
 </div>
<br>
<div style="text-align: center;" class="form-group">
<label for="reduPor">¿Tuvo que reducir las porciones de las comidas en el último mes?</label>
<select name="reduPor" id="reduPor" class="form-control">
 <option name="reduPor" id="reduPor" value="">Si</option>
 <option name="reduPor" id="reduPor" value="">No</option>
 </select>
</div>
<br>
<div style="text-align: center;" class="form-group">
<label for="causadered">¿Cual es la causa?</label>
<select name="causadered" id="causadered" class="form-control">
 <option name="causadered" id="causadered" value="">Situación económica</option>
 <option name="causadered" id="causadered" value="">Situación de salud</option>
 </select>
</div>
<br>
<h1>Frecuencia de consumo de los siguientes alimentos:</h1>
<br>
<div style="text-align: center;" class="form-group">

<label for="granos">Granos</label>
<select name="granos" id="granos" class="form-control">
 <option name="granos" id="granos" value="">Diario</option>
 <option name="granos" id="granos" value="">Cada tercer día</option>
 <option name="granos" id="granos" value="">Una vez a la semana</option>
 <option name="granos" id="granos" value="">Una vez cada quince días</option>
 <option name="granos" id="granos" value="">Una vez al mes</option>
 <option name="granos" id="granos" value="">Casi nunca</option>
 <option name="granos" id="granos" value="">Nunca</option>
 
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">

<label for="frutas">Frutas</label>
<select name="frutas" id="frutas" class="form-control">
 <option name="frutas" id="frutas" value="">Diario</option>
 <option name="frutas" id="frutas" value="">Cada tercer día</option>
 <option name="frutas" id="frutas" value="">Una vez a la semana</option>
 <option name="frutas" id="frutas" value="">Una vez cada quince días</option>
 <option name="frutas" id="frutas" value="">Una vez al mes</option>
 <option name="frutas" id="frutas" value="">Casi nunca</option>
 <option name="frutas" id="frutas" value="">Nunca</option>
 
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">

<label for="verduras">Verduras</label>
<select name="verduras" id="verduras" class="form-control">
 <option name="verduras" id="verduras" value="">Diario</option>
 <option name="verduras" id="verduras" value="">Cada tercer día</option>
 <option name="verduras" id="verduras" value="">Una vez a la semana</option>
 <option name="verduras" id="verduras" value="">Una vez cada quince días</option>
 <option name="verduras" id="verduras" value="">Una vez al mes</option>
 <option name="verduras" id="verduras" value="">Casi nunca</option>
 <option name="verduras" id="verduras" value="">Nunca</option>
 
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">

<label for="lacteos">Lácteos</label>
<select name="lacteos" id="lacteos" class="form-control">
 <option name="lacteos" id="lacteos" value="">Diario</option>
 <option name="lacteos" id="lacteos" value="">Cada tercer día</option>
 <option name="lacteos" id="lacteos" value="">Una vez a la semana</option>
 <option name="lacteos" id="lacteos" value="">Una vez cada quince días</option>
 <option name="lacteos" id="lacteos" value="">Una vez al mes</option>
 <option name="lacteos" id="lacteos" value="">Casi nunca</option>
 <option name="lacteos" id="lacteos" value="">Nunca</option>
 
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">

<label for="carnes">Carnes</label>
<select name="carnes" id="carnes" class="form-control">
 <option name="carnes" id="carnes" value="">Diario</option>
 <option name="carnes" id="carnes" value="">Cada tercer día</option>
 <option name="carnes" id="carnes" value="">Una vez a la semana</option>
 <option name="carnes" id="carnes" value="">Una vez cada quince días</option>
 <option name="carnes" id="carnes" value="">Una vez al mes</option>
 <option name="carnes" id="carnes" value="">Casi nunca</option>
 <option name="carnes" id="carnes" value="">Nunca</option>
 
</select>
</div>
<br>
<div style="text-align: center;" class="form-group">

<label for="huevos">Huevos</label>
<select name="huevos" id="huevos" class="form-control">
 <option name="huevos" id="huevos" value="">Diario</option>
 <option name="huevos" id="huevos" value="">Cada tercer día</option>
 <option name="huevos" id="huevos" value="">Una vez a la semana</option>
 <option name="huevos" id="huevos" value="">Una vez cada quince días</option>
 <option name="huevos" id="huevos" value="">Una vez al mes</option>
 <option name="huevos" id="huevos" value="">Casi nunca</option>
 <option name="huevos" id="huevos" value="">Nunca</option>
 
</select>
</div>
<br>
<div style="text-align: center;" class="form-group" > 

<label for="quienrpepa">¿Quien prepara los alimentos en el hogar?</label>
<input type="text" id="quienrpepa" name="quienrpepa" class="form-control">

</div>
<br>
<h1>Estructura familiar</h1>
<div style="text-align: center;" class="form-group" > 
<label for="Nombparient">Nombre completo</label>
<input type="text" id="Nombparient" name="Nombparient" class="form-control">

</div>
<br>
<div style="text-align: center;" class="form-group">

<label for="parentescBene">Parentesco con el beneficiario</label>
<select name="parentescBene" id="parentescBene" class="form-control">
 <option name="parentescBene" id="parentescBene" value="">Madre</option>
 <option name="parentescBene" id="parentescBene" value="">Hijo-a</option>
 <option name="parentescBene" id="parentescBene" value="">Hermano-a</option>
 <option name="parentescBene" id="parentescBene" value="">Primo-a</option>
 <option name="parentescBene" id="parentescBene" value="">Tía</option>
 <option name="parentescBene" id="parentescBene" value="">Sobrino-a</option>
 <option name="parentescBene" id="parentescBene" value="">Abuela</option>
 <option name="parentescBene" id="parentescBene" value="">Nieto-a</option>
 <option name="parentescBene" id="parentescBene" value="">Otro</option>
 
</select>
</div>
<br>
<div style="text-align: center;" class="form-group" > 
<label for="edadParent">Edad</label>
<input type="text" id="edadParent" name="edadParent" class="form-control">

</div>
<br>
<div style="text-align: center;" class="form-group" > 
<label for="cedu">Cédula</label>
<input type="text" id="cedu" name="cedu" class="form-control">

</div>
<br>
<div style="text-align: center;" class="form-group">

<label for="tipoFami">Tipologia familiar</label>
<select name="tipoFami" id="tipoFami" class="form-control">
 <option name="tipoFami" id="tipoFami" value="">Nuclear</option>
 <option name="tipoFami" id="tipoFami" value="">Compuesta</option>
 <option name="tipoFami" id="tipoFami" value="">Extensa</option>
 <option name="tipoFami" id="tipoFami" value="">Monoparental</option>
 <option name="tipoFami" id="tipoFami" value="">JF</option>
 <option name="tipoFami" id="tipoFami" value="">JM</option>
 <option name="tipoFami" id="tipoFami" value="">Simultánea</option>
 </select>
</div>
<br>

<div style="text-align: center;" class="form-group" > 
<label for="ocupacion">Ocupación actual</label>
<input type="text" id="ocupacion" name="ocupacion" class="form-control">

</div>
<br>

<div style="text-align: center;" class="form-group" > 
<label for="lugarlabor">¿Lugar donde labora actualmente?</label>
<input type="text" id="lugarlabor" name="lugarlabor" class="form-control">

</div>
<br>
<div style="text-align: center;" class="form-group">

<label for="ingresosSmlv">Ingresos en SMLV</label>
<select name="ingresosSmlv" id="ingresosSmlv" class="form-control">
 <option name="ingresosSmlv" id="ingresosSmlv" value="">1 SMLV</option>
 <option name="ingresosSmlv" id="ingresosSmlv" value="">2 SMLV</option>
 <option name="ingresosSmlv" id="ingresosSmlv" value="">3 SMLV</option>
 <option name="ingresosSmlv" id="ingresosSmlv" value="">Más de tres SMLV</option>

 </select>
</div>
<br>
<div style="text-align: center;" class="form-group">

<label for="egresosSmlv">Egresos en SMLV</label>
<select name="egresosSmlv" id="egresosSmlv" class="form-control">
 <option name="egresosSmlv" id="egresosSmlv" value="">1 SMLV</option>
 <option name="egresosSmlv" id="egresosSmlv" value="">2 SMLV</option>
 <option name="egresosSmlv" id="egresosSmlv" value="">3 SMLV</option>
 <option name="egresosSmlv" id="egresosSmlv" value="">Más de tres SMLV</option>

 </select>
</div>
<br>
<br>
<div class="form-group">

			
		<button type="submit" onchange="validarCampos()" class="btn btn-success">Registrar</button>
			<a href="inicio.php" class="btn btn-secondary">Ir a Inicio</a>
			

	</div>


         
</form>

</fieldset>
</html>
<script>

	var nombres = document.getElementById("nombre").value;
	var apellidos = document.getElementById("apelli").value;
	var tipod = document.getElementById("tipdocument").value;
	var numeroti = document.getElementById("numeroTi").value;
	var direccion = document.getElementById("direcc").value;
	var tele = document.getElementById("tele").value;
	var fechadevalor = document.getElementById("fechaVal").value;
	var peso = document.getElementById("peso").value;
	var tall = document.getElementById("tall").value;
	var edadGesta = document.getElementById("edadGesta").value;
	var imcc = document.getElementById("imc").value;
	var dx = document.getElementById("dx").value;
	var fecha = document.getElementById("fech").value;
	var button = document.querySelector("button");
    var form = document.querySelector("form");
	
	


</script>