<?php include("funciones.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Consultar</title>
</head>
<body>
<h1 class="text-center">Eliminar registros</h1>
<div class="row justify-content-center">
    <div class="col-auto">
      <table class="table table-responsive" >
      <table class="center" border="1">  
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Tipo de documento</th>
            <th>Numero de documento</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Fecha de valroacion</th>
            <th>Peso</th>
            <th>Talla</th>
            <th>Edad gestacional</th>
            <th>IMC</th>
            <th>Dx nutricional</th>
            <th>Fecha ultimo control prenatal</th>
            <th>Eliminar</th>
        </tr>
        </thead>
        <tbody>
    <?php 
            $tabla="tabla_gestantes";
            $resultado=consultarSinWhere($tabla);
            while($extraer = pg_fetch_array($resultado)) {
                $nom=$extraer["nombre"];
                $apellidos=$extraer["apellidos"];
                $documen=$extraer["tipo_de_documento"];
                $numdoc=$extraer["numero"];
                $direcc=$extraer["direccion"];
                $tele=$extraer["telefono"];
                $fechaVal=$extraer["fecha_de_valoracion"];
                $peso=$extraer["peso"];
                $tall=$extraer["talla"];
                $edadGestaedadGesta=$extraer["edad_gestacional"];
                $imc=$extraer["imc"];
                $dx=$extraer["dx_nutricional"];
                $fech=$extraer["fecha_ultimo_control_prenatal"];
                $id=$extraer["id_usuario"];
    ?>
            <tr id="borrar"<?php echo $id; ?>>
            <td><?php echo $nom; ?></td>
            <td><?php echo $apellidos;  ?></td>
            <td><?php echo $documen;  ?></td>
            <td><?php echo $numdoc; ?></td>
            <td><?php echo $direcc; ?></td>
            <td><?php echo $tele; ?></td>
            <td><?php echo $fechaVal; ?></td>
            <td><?php echo $peso; ?></td>
            <td><?php echo $tall; ?></td>
            <td><?php echo $edadGestaedadGesta; ?></td>
            <td><?php echo $imc; ?></td>
            <td><?php echo $dx; ?></td>
            <td><?php echo $fech; ?></td>
            <td> <button onclick="eliminarConAjax(<?php  echo $id; ?>)" class="btn btn-danger">Eliminar</button></td>
            <?php
    }
    ?>
    </tbody>
  </table>



<a href="inicio.php" class="btn btn-secondary">Ir Inicio</a>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

function eliminarConAjax(id){
    if(confirm("¿Estás seguro de borrar este registro?")){
        $.ajax({
            type:'post',
            url:'eliminar.php',
            data:{eliminar_dato:id},
            success:function(data){
                $('#borrar'+id).hide();
            }
        })

    }   
}
  </script>

<br>
</body>
</html>