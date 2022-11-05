<?php


$host='localhost';
$bd='gestantes';
$user='postgres';
$pass='12345678';

$conexion=pg_connect("host=$host dbname=$bd user=$user password=$pass");

$estado=$_POST["estad"];
$program=$_POST["program"];
$unid=$_POST["unid"];
$muniUbi=$_POST["muniUbi"];
$conve=$_POST["conve"];
$tipo=$_POST["tipo"];
$fechaI=$_POST["fechaI"];
$manej=$_POST["manej"];
$tall=$_POST["tall"];
$peso=$_POST["peso"];
$dig=$_POST["dig"];
$naciter=$_POST["naciter"];
$mesc=$_POST["mesc"];
$pri=$_POST["pri"];
$seg=$_POST["seg"];
$pria=$_POST["pria"];
$sega=$_POST["sega"];
$tipde=$_POST["tipde"];
$numdoc=$_POST["numdoc"];
$nacimm=$_POST["nacimm"];
$content=$_POST["content"];
$etario=$_POST["etario"];
$fechval=$_POST["fechval"];
$pesoActual=$_POST["pesoActual"];
$tallaActual=$_POST["tallaActual"];
$estNut=$_POST["estNut"];
$muniNaci=$_POST["muniNaci"];
$deparNaci=$_POST["deparNaci"];
$paisNaci=$_POST["paisNaci"];
$genero=$_POST["genero"];
$pertenencietn=$_POST["pertenencietn"];
$parentescbene=$_POST["parentescbene"];
$estciv=$_POST["estciv"];
$poblaDesp=$_POST["poblaDesp"];
$victim=$_POST["victim"];
$cual=$_POST["cual"];
$poblaDesp=$_POST["poblaDesp"];
$nived=$_POST["nived"];
$estudiAct=$_POST["estudiAct"];
$gradAct=$_POST["gradAct"];
$insti=$_POST["insti"];
$jornadaEst=$_POST["jornadaEst"];
$curso=$_POST["curso"];
$cualcur=$_POST["cualcur"];
$inscriprog=$_POST["inscriprog"];
$program1=$_POST["program1"];
$tiposubci=$_POST["tiposubci"];
$cualsub=$_POST["cualsub"];
$ingressub=$_POST["ingressub"];
$regimSeg=$_POST["regimSeg"];
$nombEA=$_POST["nombEA"];
$tipafi=$_POST["tipafi"];
$categSisb=$_POST["categSisb"];
$diversidFun=$_POST["diversidFun"];
$pesonac=$_POST["pesonac"];
$tallanac=$_POST["tallanac"];
$recilact=$_POST["recilact"];
$tiemplact=$_POST["tiemplact"];
$totallact=$_POST["totallact"];
$esquemVac=$_POST["esquemVac"];
$vacPendi=$_POST["vacPendi"];
$control=$_POST["control"];
$totallact=$_POST["totallact"];
$metodplani=$_POST["metodplani"];
$antecedentesclin=$_POST["antecedentesclin"];
$tqueanteced=$_POST["tqueanteced"];
$antecedepato=$_POST["antecedepato"];
$consumoEsp=$_POST["consumoEsp"];
$consumAlco=$_POST["consumAlco"];
$consumCiga=$_POST["consumCiga"];
$consumSpa=$_POST["consumSpa"];
$cualSpa=$_POST["cualSpa"];
$muniUbi=$_POST["muniUbi"];
$deparUbi=$_POST["deparUbi"];
$zonUbi=$_POST["zonUbi"];
$comunMani=$_POST["comunMani"];
$barrioVered=$_POST["barrioVered"];
$domidirec=$_POST["domidirec"];
$telefono=$_POST["telefono"];
$celular=$_POST["celular"];
$celu2=$_POST["celu2"];
$socioEco=$_POST["socioEco"];
$tipdeVi=$_POST["tipdeVi"];
$tenencia=$_POST["tenencia"];
$materi=$_POST["materi"];
$materiSuel=$_POST["materiSuel"];
$serviciosPub=$_POST["serviciosPub"];
$cuantosCuartos=$_POST["cuantosCuartos"];
$cuantosCuartosduer=$_POST["cuantosCuartosduer"];
$serviciosPubcuen=$_POST["serviciosPubcuen"];
$dedondeObt=$_POST["dedondeObt"];
$cuantascomidasDia=$_POST["cuantascomidasDia"];
$reduPor=$_POST["reduPor"];
$causadered=$_POST["causadered"];
$granos=$_POST["granos"];
$frutas=$_POST["frutas"];
$verduras=$_POST["verduras"];
$lacteos=$_POST["lacteos"];
$carnes=$_POST["carnes"];
$huevos=$_POST["huevos"];
$quienrpepa=$_POST["quienrpepa"];
$Nombparient=$_POST["Nombparient"];
$parentescBene=$_POST["parentescBene"];
$edadParent=$_POST["edadParent"];
$cedu=$_POST["cedu"];
$tipoFami=$_POST["tipoFami"];
$ocupacion=$_POST["ocupacion"];
$lugarlabor=$_POST["lugarlabor"];
$ingresosSmlv=$_POST["ingresosSmlv"];
$egresosSmlv=$_POST["egresosSmlv"];







$query=("INSERT INTO tabla_gestantes (estado,Programa,Unidad_de_servicio,Municipio_de_ubicacion_de_la_unidad_de_servicio,Convenio,Tipo_de_población,Fecha_de_inscripcion,Autoriza_manejo_de_la_informacion_y_permiso_fotografico,Talla_al_ingreso,Peso_al_ingreso,Estado_nutrición_al_día_de_ingreso,Nacimiento_a_termino,De_cuantos_meses_fue_el_nacimiento,Primer_Nombre,Primer_apellio,Segundo_apellio,Tipo_de_documento,Número_de_documento,Años,Grupo_Etario,Fecha_de_valoracion,Peso,Talla,Estado_nutricional_en_valoración,Municipio_de_Nacimiento,Departamento_de_Nacimiento,Pais_de_Nacimiento,Genero,Pertenencia_etnica,Parentesco_con_otro_beneficiario,Estado_civil,Poblacion_desplazada,¿Victima_de_otro_tipo_de_violencia?,¿Cual?,¿Sabe_leer_y_escribir?,Nivel_educativo,¿Estudia_actualmente?,Grado_que_cursa_actualmente,Institucion_educativa,Jornada_de_estudio,¿Ha_realizado_algun_curso?,¿Cual?,¿Esta_inscrito_en_otro_programa_social?,¿Que_programa?,¿Cuenta_con_algun_tipo_de_subsidio?,¿Cual?,Ingresos_recibidos_por_subcidios,Regimen_de_seguridad_social,Nombre_de_la_EAPB,Tipo_de_Afiliación,Categoria_de_sisben,Categoria_de_sisben,Diversidad_funcional,Peso_al_nacer,Talla_al_nacer,¿Recibio_lactancia_materna?,Tiempo_lactancia_materna_exclusiva,Total_lactancia_materna,Esquema_de_vacunacion_completo,Vacunas_pendientes,¿Ha_tenido_control_de_salud_en_los_ultimos_12_meses?,Edad_gestacional_al_ingreso_del_programa,Metodo_de_planificación,Antecedentes_clinicos,Antedecente_patológico_familiar_importante,¿Antecedentes_de_consumo_de_SPA_en_la_familia?,¿Consume_alcohol?,¿Consume_cigarrillo?,¿Consume_SPA?,¿Cual_SPA?,Municipio,Departamento,Zona,Comuna_(Solo_para_Manizales),Barrio/Vereda,Domicilio_direccion,Teléfono,Celular,Celular2,Estrato_socioeconómico,Tipo_de_vivienda,Tenencia,Material_de_la_estructura,Material_del_suelo,Servicios_públicos_con_los_que_cuenta_la_vivienda,¿Cuantos_cuartos_hay_incluyendo_sala_comedor?,¿En_cuantos_cuartos_duermen_las_personas_de_la_vivienda?,¿Con_que_servicio_sanitario_cuenta_la_vivienda?,¿De_donde_obtiene_el_agua_para_consumo_y_preparacion_de_alimentos?,¿Usualmente_cuántas_comidas_al_dia_consume_la_familia?,¿Cual_es_la_causa?,Granos,Frutas,Verduras,Lácteos,Carnes,Huevos,¿Quien_prepara_los_alimentos_en_el_hogar?,Nombre_completo,Parentesco_con_el_beneficiario,Edad,Cédula,Tipologia_familiar,Ocupación_actual,¿Lugar_donde_labora_actualmente?,Ingresos_en_SMLV,Egresos_en_SMLV)
  VALUES ('$_REQUEST[estado]','$_REQUEST[program]','$_REQUEST[unid]','$_REQUEST[muniUbi]','$_REQUEST[conve]','$_REQUEST[tipo]','$_REQUEST[fechaI]','$_REQUEST[manej]','$_REQUEST[tall]','$_REQUEST[peso]','$_REQUEST[naciter]','$_REQUEST[mesc]','$_REQUEST[pri]','$_REQUEST[pria]','$_REQUEST[sega]','$_REQUEST[tipde]','$_REQUEST[numdoc]','$_REQUEST[nacimm]','$_REQUEST[content]','$_REQUEST[etario]','$_REQUEST[fechval]','$_REQUEST[pesoActual]','$_REQUEST[tallaActual]','$_REQUEST[estNut]','$_REQUEST[muniNaci]','$_REQUEST[deparNaci]','$_REQUEST[paisNaci]','$_REQUEST[genero]','$_REQUEST[pertenencietn]','$_REQUEST[parentescbene],'$_REQUEST[estciv]','$_REQUEST[poblaDesp]','$_REQUEST[victim]','$_REQUEST[cual]','$_REQUEST[poblaDesp]','$_REQUEST[nived]','$_REQUEST[estudiAct]','$_REQUEST[gradAct]','$_REQUEST[insti]','$_REQUEST[jornadaEst]','$_REQUEST[curso]','$_REQUEST[cualcur]','$_REQUEST[inscriprog]','$_REQUEST[program1]','$_REQUEST[tiposubci]','$_REQUEST[cualsub]','$_REQUEST[ingressub]','$_REQUEST[regimSeg]','$_REQUEST[nombEA]','$_REQUEST[tipafi]','$_REQUEST[categSisb]','$_REQUEST[diversidFun]','$_REQUEST[pesonac]','$_REQUEST[tallanac]','$_REQUEST[recilact]','$_REQUEST[tiemplact]','$_REQUEST[totallact]','$_REQUEST[esquemVac]','$_REQUEST[vacPendi]','$_REQUEST[control]','$_REQUEST[totallact]','$_REQUEST[metodplani]','$_REQUEST[antecedentesclin]','$_REQUEST[tqueanteced]','$_REQUEST[antecedepato]','$_REQUEST[consumoEsp]','$_REQUEST[consumAlco]','$_REQUEST[consumCiga]','$_REQUEST[consumSpa]','$_REQUEST[cualSpa]','$_REQUEST[muniUbi]','$_REQUEST[deparUbi]','$_REQUEST[zonUbi]','$_REQUEST[comunMani]','$_REQUEST[barrioVered]','$_REQUEST[domidirec]','$_REQUEST[telefono]','$_REQUEST[celular]','$_REQUEST[celu2]','$_REQUEST[socioEco]','$_REQUEST[tipdeVi]','$_REQUEST[tenencia]','$_REQUEST[materi]','$_REQUEST[materiSuel]','$_REQUEST[serviciosPub]','$_REQUEST[cuantosCuartos]','$_REQUEST[cuantosCuartosduer]','$_REQUEST[serviciosPubcuen]','$_REQUEST[dedondeObt]','$_REQUEST[cuantascomidasDia]','$_REQUEST[reduPor]','$_REQUEST[causadered]','$_REQUEST[granos]','$_REQUEST[frutas]','$_REQUEST[verduras]','$_REQUEST[lacteos]','$_REQUEST[carnes]','$_REQUEST[huevos]','$_REQUEST[quienrpepa]','$_REQUEST[Nombparient]','$_REQUEST[parentescBene]','$_REQUEST[edadParent]','$_REQUEST[cedu]','$_REQUEST[tipoFami]','$_REQUEST[ocupacion]','$_REQUEST[lugarlabor]','$_REQUEST[ingresosSmlv]','$_REQUEST[egresosSmlv]')");

  $consulta=pg_query($conexion,$query);
  pg_close();
  echo'guardado correctamente';



 
?>
<br>
<a href="inicio.php" class="btn btn-secondary">Ir Inicio</a>