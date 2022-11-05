<style>
    #header {
		text-align: center;
				margin:auto;
				width:660px;
				font-family:Arial, Helvetica, sans-serif;
			}
            ul, ol {
				list-style:none;
			}
            .nav > li {
				float:left;
			}
            .nav li a {
				background-color:#0D75BD;
				color:#fff;
				text-decoration:none;
				padding:10px 15px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#0D75BD;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:70px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-70px;
				top:0px;
			}
            header {
				border-bottom: 2px solid #eee;
				padding: 20px 0;
				margin-bottom: 10px;
				width: 100%;
				text-align: center;

			}
			header a {
				text-decoration: none;
				color: #333;
				
			}
</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
<div id="header">
			<ul class="nav">
				<li><a href="">Crear registro</a>
                <ul>
						<li><a href="./comedores.php">Comedores</a></li>
						<li><a href="./gestantesform.php">Gestantes</a></li>
						

                </ul>
            </li>

				<li><a href="./consultar.php">Consultar registro</a>
                
                </li>
				<li>
				<a href="">Actualizar registro</a>

				</li>
				<li>
				<a href="./eliminar.php">Eliminar registro</a>
				</li>
			
</div>
 

</body>
<style>

#cent{
    text-align: center;
}
 


</style>