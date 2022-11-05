<?php include("funciones.php"); 

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Consultar</title>
</head>
<body>
<h1 class="text-center">Consulta de registros</h1>
    <table  id="tabli"  class="display nowrap" style="width:100%">  
        <thead>
        <tr>
            <th>Estado</th>
            <th>Programa</th>
            <th>Unidad de servicio</th>
            <th>Municipio de ubicacion de la unidad de servicio</th>
            <th>Convenio</th>
            <th>Tipo de población</th>
            <th>Fecha de inscripcion</th>
            <th>Autoriza manejo de la informacion y permiso fotografico</th>
            <th>Talla al ingreso</th>
            <th>Peso al ingreso</th>
            <th>Estado nutrición al día de ingreso</th>
            <th>Nacimiento a termino</th>
            <th>De cuantos meses fue el nacimiento</th>
            <th>Primer Nombre</th>
            <th>Segundo nombre</th>
            <th>Primer apellio</th>
            <th>Segungo apellio</th>
            <th>Tipo de documento</th>
            <th>Número de documento</th>
            <th>Fecha de nacimiento</th>
            <th>Años</th>
            <th>Grupo Etario</th>
            <th>Fecha de valoracion</th>
            <th>Peso</th>
            <th>Talla</th>
            <th>Estado nutricional en valoración</th>
            <th>Municipio de Nacimiento</th>
            <th>Departamento de Nacimiento</th>
            <th>Pais de Nacimiento</th>
            <th>Genero</th>
            <th>Pertenencia etnica</th>
            <th>Parentesco con otro beneficiario</th>
            <th>Estado civil</th>
            <th>Poblacion desplazada</th>
            <th>¿Victima de otro tipo de violencia?</th>
            <th>¿Cual?</th>
            <th>¿Sabe leer y escribir?</th>
            <th>Nivel educativo</th>
            <th>Estudia actualmente</th>
            <th>Grado que cursa actualmente</th>
            <th>Institucion educativa</th>
            <th>Jornada de estudio</th>
            <th>¿Ha realizado algun curso?</th>
            <th>¿Cual?</th>
            <th>¿Esta inscrito en otro programa social?</th>
            <th>¿Que programa?</th>
            <th>¿Cuenta con algun tipo de subsidio?</th>
            <th>¿Cual?</th>
            <th>Ingresos recibidos por subcidios</th>
            <th>Regimen de seguridad social</th>
            <th>Nombre de la EAPB</th>
            <th>Tipo de Afiliación</th>
            <th>Categoria de sisben</th>
            <th>Diversidad funcional</th>
            <th>Peso al nacer</th>
            <th>Talla al nacer</th>
            <th>¿Recibio lactancia materna?</th>
            <th>Tiempo lactancia materna exclusiva</th>
            <th>Total lactancia materna</th>
            <th>Esquema de vacunacion completo</th>
            <th>Vacunas pendientes</th>
            <th>¿Ha tenido control de salud en los ultimos 12 meses?</th>
            <th>Edad gestacional al ingreso del programa</th>
            <th>Metodo de planificación</th>
            <th>Antecedentes clinicos</th>
            <th>Que antecedentes clinicos</th>
            <th>Antedecente patológico familiar importante</th>
            <th>¿Antecedentes de consumo de SPA en la familia?</th>
            <th>¿Consume alcohol?</th>
            <th>¿Consume cigarrillo?</th>
            <th>¿Consume SPA?</th>
            <th>¿Cual SPA?</th>
            <th>Municipio</th>
            <th>Departamento</th>
            <th>Comuna (Solo para Manizales)</th>
            <th>Barrio/Vereda</th>
            <th>Domicilio direccion</th>
            <th>Teléfono</th>
            <th>Celular</th>
            <th>Celular 2</th>
            <th>Estrato socioeconómico</th>
            <th>Tipo de vivienda</th>
            <th>Tenencia</th>
            <th>Material de la estructura</th>
            <th>Material del suelo</th>
            <th>Servicios públicos con los que cuenta la vivienda</th>
            <th>¿Cuantos cuartos hay incluyendo sala comedor?</th>
            <th>¿En cuantos cuartos duermen las personas de la vivienda?</th>
            <th>¿Con que servicio sanitario cuenta la vivienda?</th>
            <th>¿De donde obtiene el agua para consumo y preparacion de alimentos?</th>
            <th>¿Usualmente cuántas comidas al dia consume la familia?</th>
            <th>¿Cual es la causa?</th>
            <th>Granos</th>
            <th>Frutas</th>
            <th>Verduras</th>
            <th>Lácteos</th>
            <th>Carnes</th>
            <th>Huevos</th>
            <th>¿Quien prepara los alimentos en el hogar?</th>
            <th>Nombre completo</th>
            <th>Parentesco con el beneficiario</th>
            <th>Edad</th>
            <th>Cédula</th>
            <th>Tipologia familiar</th>
            <th>Ocupación actual</th>
            <th>¿Lugar donde labora actualmente?</th>
            <th>Ingresos en SMLV</th>
            <th>Nombre completo</th>
            <th>Egresos en SMLV</th>

        </tr>
        </thead>
        <tbody>
    <?php 
    
            $tabla="tabla_gestantes";
            $resultado=consultarSinWhere($tabla);
            while($extraer = pg_fetch_array($resultado)){
                $estado=$extraer["estado"];
                $program=$extraer["Programa"];
                $unid=$extraer["unid"];
                $muniUbi=$extraer["muniUbi"];
                $conve=$extraer["conve"];
                $tipo=$extraer["tipo"];
                $fechaI=$extraer["fechaI"];
                $manej=$extraer["manej"];
                $tall=$extraer["tall"];
                $peso=$extraer["peso"];
                $dig=$extraer["dig"];
                $naciter=$extraer["naciter"];
                $mesc=$extraer["mesc"];
                $pri=$extraer["pri"];
                $seg=$extraer["seg"];
                $pria=$extraer["pria"];
                $sega=$extraer["sega"];
                $tipde=$extraer["tipde"];
                $numdoc=$extraer["numdoc"];
                $nacimm=$extraer["nacimm"];
                $content=$extraer["content"];
                $etario=$extraer["etario"];
                $fechval=$extraer["fechval"];
                $pesoActual=$extraer["pesoActual"];
                $tallaActual=$extraer["tallaActual"];
                $estNut=$extraer["estNut"];
                $muniNaci=$extraer["muniNaci"];
                $deparNaci=$extraer["deparNaci"];
                $paisNaci=$extraer["paisNaci"];
                $genero=$extraer["genero"];
                $pertenencietn=$extraer["pertenencietn"];
                $parentescbene=$extraer["parentescbene"];
                $estciv=$extraer["estciv"];
                $poblaDesp=$extraer["poblaDesp"];
                $victim=$extraer["victim"];
                $cual=$extraer["cual"];
                $poblaDesp=$extraer["poblaDesp"];
                $nived=$extraer["nived"];
                $estudiAct=$extraer["estudiAct"];
                $gradAct=$extraer["gradAct"];
                $insti=$extraer["insti"];
                $jornadaEst=$extraer["jornadaEst"];
                $curso=$extraer["curso"];
                $cualcur=$extraer["cualcur"];
                $inscriprog=$extraer["inscriprog"];
                $program1=$extraer["program1"];
                $tiposubci=$extraer["tiposubci"];
                $cualsub=$extraer["cualsub"];
                $ingressub=$extraer["ingressub"];
                $regimSeg=$extraer["regimSeg"];
                $nombEA=$extraer["nombEA"];
                $tipafi=$extraer["tipafi"];
                $categSisb=$extraer["categSisb"];
                $diversidFun=$extraer["diversidFun"];
                $pesonac=$extraer["pesonac"];
                $tallanac=$extraer["tallanac"];
                $recilact=$extraer["recilact"];
                $tiemplact=$extraer["tiemplact"];
                $totallact=$extraer["totallact"];
                $esquemVac=$extraer["esquemVac"];
                $vacPendi=$extraer["vacPendi"];
                $control=$extraer["control"];
                $totallact=$extraer["totallact"];
                $metodplani=$extraer["metodplani"];
                $antecedentesclin=$extraer["antecedentesclin"];
                $tqueanteced=$extraer["tqueanteced"];
                $antecedepato=$extraer["antecedepato"];
                $consumoEsp=$extraer["consumoEsp"];
                $consumAlco=$extraer["consumAlco"];
                $consumCiga=$extraer["consumCiga"];
                $consumSpa=$extraer["consumSpa"];
                $cualSpa=$extraer["cualSpa"];
                $muniUbi=$extraer["muniUbi"];
                $deparUbi=$extraer["deparUbi"];
                $zonUbi=$extraer["zonUbi"];
                $comunMani=$extraer["comunMani"];
                $barrioVered=$extraer["barrioVered"];
                $domidirec=$extraer["domidirec"];
                $telefono=$extraer["telefono"];
                $celular=$extraer["celular"];
                $celu2=$extraer["celu2"];
                $socioEco=$extraer["socioEco"];
                $tipdeVi=$extraer["tipdeVi"];
                $tenencia=$extraer["tenencia"];
                $materi=$extraer["materi"];
                $materiSuel=$extraer["materiSuel"];
                $serviciosPub=$extraer["serviciosPub"];
                $cuantosCuartos=$extraer["cuantosCuartos"];
                $cuantosCuartosduer=$extraer["cuantosCuartosduer"];
                $serviciosPubcuen=$extraer["serviciosPubcuen"];
                $dedondeObt=$extraer["dedondeObt"];
                $cuantascomidasDia=$extraer["cuantascomidasDia"];
                $reduPor=$extraer["reduPor"];
                $causadered=$extraer["causadered"];
                $granos=$extraer["granos"];
                $frutas=$extraer["frutas"];
                $verduras=$extraer["verduras"];
                $lacteos=$extraer["lacteos"];
                $carnes=$extraer["carnes"];
                $huevos=$extraer["huevos"];
                $quienrpepa=$extraer["quienrpepa"];
                $Nombparient=$extraer["Nombparient"];
                $parentescBene=$extraer["parentescBene"];
                $edadParent=$extraer["edadParent"];
                $cedu=$extraer["cedu"];
                $tipoFami=$extraer["tipoFami"];
                $ocupacion=$extraer["ocupacion"];
                $lugarlabor=$extraer["lugarlabor"];
                $ingresosSmlv=$extraer["ingresosSmlv"];
                $egresosSmlv=$extraer["egresosSmlv"];
                
    ?>
            <tr>
            <td><?php echo $estado; ?></td>
            <td><?php echo $program;  ?></td>
            <td><?php echo $unid;  ?></td>
            <td><?php echo $muniUbi; ?></td>
            <td><?php echo $conve; ?></td>
            <td><?php echo $tipo; ?></td>
            <td><?php echo $fechaI; ?></td>
            <td><?php echo $manej; ?></td>
            <td><?php echo $tall; ?></td>
            <td><?php echo $peso; ?></td>
            <td><?php echo $dig; ?></td>
            <td><?php echo $naciter; ?></td>
            <td><?php echo $mesc; ?></td>
            <td><?php echo $pri; ?></td>
            <td><?php echo $seg; ?></td>
            <td><?php echo $pria; ?></td>
            <td><?php echo $sega; ?></td>
            <td><?php echo $tipde; ?></td>
            <td><?php echo $numdoc; ?></td>
            <td><?php echo $nacimm; ?></td>
            <td><?php echo $content; ?></td>
            <td><?php echo $etario; ?></td>
            <td><?php echo $fechval; ?></td>
            <td><?php echo $pesoActual; ?></td>
            <td><?php echo $tallaActual; ?></td>
            <td><?php echo $estNut; ?></td>
            <td><?php echo $muniNaci; ?></td>
            <td><?php echo $deparNaci; ?></td>
            <td><?php echo $paisNaci; ?></td>
            <td><?php echo $genero; ?></td>
            <td><?php echo $pertenencietn; ?></td>
            <td><?php echo $parentescbene; ?></td>
            <td><?php echo $estciv; ?></td>
            <td><?php echo $poblaDesp; ?></td>
            <td><?php echo $victim; ?></td>
            <td><?php echo $cual; ?></td>
            <td><?php echo $poblaDesp; ?></td>
            <td><?php echo $nived; ?></td>
            <td><?php echo $estudiAct; ?></td>
            <td><?php echo $gradAct; ?></td>
            <td><?php echo $insti; ?></td>
            <td><?php echo $jornadaEst; ?></td>
            <td><?php echo $curso; ?></td>
            <td><?php echo $cualcur; ?></td>
            <td><?php echo $inscriprog; ?></td>
            <td><?php echo $program1; ?></td>
            <td><?php echo $tiposubci; ?></td>
            <td><?php echo $cualsub; ?></td>
            <td><?php echo $ingressub; ?></td>
            <td><?php echo $regimSeg; ?></td>
            <td><?php echo $nombEA; ?></td>
            <td><?php echo $tipafi; ?></td>
            <td><?php echo $categSisb; ?></td>
            <td><?php echo $diversidFun; ?></td>
            <td><?php echo $pesonac; ?></td>
            <td><?php echo $tallanac; ?></td>
            <td><?php echo $recilact; ?></td>
            <td><?php echo $tiemplact; ?></td>
            <td><?php echo $totallact; ?></td>
            <td><?php echo $esquemVac; ?></td>
            <td><?php echo $vacPendi; ?></td>
            <td><?php echo $control; ?></td>
            <td><?php echo $totallact; ?></td>
            <td><?php echo $metodplani; ?></td>
            <td><?php echo $antecedentesclin; ?></td>
            <td><?php echo $tqueanteced; ?></td>
            <td><?php echo $antecedepato; ?></td>
            <td><?php echo $consumoEsp; ?></td>
            <td><?php echo $consumAlco; ?></td>
            <td><?php echo $consumCiga; ?></td>
            <td><?php echo $consumSpa; ?></td>
            <td><?php echo $cualSpa; ?></td>
            <td><?php echo $muniUbi; ?></td>
            <td><?php echo $deparUbi; ?></td>
            <td><?php echo $zonUbi; ?></td>
            <td><?php echo $comunMani; ?></td>
            <td><?php echo $barrioVered; ?></td>
            <td><?php echo $domidirec; ?></td>
            <td><?php echo $telefono; ?></td>
            <td><?php echo $celular; ?></td>
            <td><?php echo $celu2; ?></td>
            <td><?php echo $socioEco; ?></td>
            <td><?php echo $tipdeVi; ?></td>
            <td><?php echo $tenencia; ?></td>
            <td><?php echo $materi; ?></td>
            <td><?php echo $materiSuel; ?></td>
            <td><?php echo $serviciosPub; ?></td>
            <td><?php echo $cuantosCuartos; ?></td>
            <td><?php echo $cuantosCuartosduer; ?></td>
            <td><?php echo $serviciosPubcuen; ?></td>
            <td><?php echo $cuantascomidasDia; ?></td>
            <td><?php echo $reduPor; ?></td>
            <td><?php echo $causadered; ?></td>
            <td><?php echo $granos; ?></td>
            <td><?php echo $frutas; ?></td>
            <td><?php echo $verduras; ?></td>
            <td><?php echo $lacteos; ?></td>
            <td><?php echo $carnes; ?></td>
            <td><?php echo $huevos; ?></td>
            <td><?php echo $quienrpepa; ?></td>
            <td><?php echo $Nombparient; ?></td>
            <td><?php echo $parentescBene; ?></td>
            <td><?php echo $edadParent; ?></td>
            <td><?php echo $cedu; ?></td>
            <td><?php echo $tipoFami; ?></td>
            <td><?php echo $ocupacion; ?></td>
            <td><?php echo $lugarlabor; ?></td>
            <td><?php echo $ingresosSmlv; ?></td>
            <td><?php echo $egresosSmlv; ?></td>
         

            <?php
    }
    ?>
    </tbody>
  </table>

<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"  type="text/javascript"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"  type="text/javascript"></script>
<script>
$(document).ready(function() {
    $('#tabli').DataTable( {
        responsive: true
    } );
} );
</script>



<a href="inicio.php" class="btn btn-secondary">Ir Inicio</a>

<br>
</body>
</html>