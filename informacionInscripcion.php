<?php
$Documento = "1014277079";
$ConfirmarDocumento = "1014277079";
$Nombres = "Brian Alexis";
$Apellidos = "Cardenas Castañeda";
$Correo = "Correo@ejemplo.com";
$ConfirmarCorreo = "Correo@ejemplo.com";
$Pais = "Colombia";
$Departamento = "Bogota";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2 Registro Diplomado</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="style_table.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<header>
        <div class="caja">
            <a href="https://politecnicodecolombia.edu.co//"> <img src="img\logo.png" width="300" height="150"></a>
        </div> 
        <div>
            <nav>
                <ul>
                    <li><a href="https://www.linkedin.com/in/brian-cardenas/"> <img src="img\LinkedIn.png"width="50" height="50"> </a></li>
                    <li><a href="https://github.com/Briancardenas12"> <img src="img\GitHub.png"width="50" height="50"> </a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
    	<section class="principal">
            <div>
                <h1 class="tituloPrincipal"> Tabla de presentación de datos del formulario </h1>
                <p>
                	La siguiente tabla hace parte de la continuación del ejercicio "replica" del formulario utilizado en el Politécnico de Colombia para realizar las inscripciones a los diplomados virtuales. 
                	En la que se presenta toda la información enviada desde el formalario por medio del metodo POST a una tabla estructurada en HTML
                </p>
            </div>
        </section>
        <section>
        	<?php
        	if($Documento == $ConfirmarDocumento && $Correo == $ConfirmarCorreo){ 
        		?>
	        	<div class="contenedor">
	        		<table border="3">
		        		<thead>
		        			<tr>
		        				<th>Dato</th>
		        				<th>Valor</th>
		        			</tr>
		        		</thead>
		        		<tbody>
		        			<tr>
		        				<th>Documento</th>
		        				<td><?php echo $Documento; ?> </td>
		        			</tr>
		        			<tr>
		        				<th>Confirmar Documento</th>
		        				<td><?php echo $ConfirmarDocumento; ?> </td>
		        			</tr>
		        			<tr>
		        				<th>Nombres</th>
		        				<td><?php echo $Nombres; ?> </td>
		        			</tr>
		        			<tr>
		        				<th>Apellidos</th>
		        				<td><?php echo $Apellidos; ?> </td>
		        			</tr>
		        			<tr>
		        				<th>Correo</th>
		        				<td><?php echo $Correo; ?> </td>
		        			</tr>
		        			<tr>
		        				<th>Confirmar Correo</th>
		        				<td><?php echo $ConfirmarCorreo; ?> </td>
		        			</tr>
		        			<tr>
		        				<th>Pais</th>
		        				<td><?php echo $Pais; ?> </td>
		        			</tr>
		        			<tr>
		        				<th>Departamento</th>
		        				<td><?php echo $Departamento; ?> </td>
		        			</tr>
		        		</tbody>
		        	</table>
	        	</div>
        		<?php
        		}
        		else{
        			echo "No son iguales";
        		}
        		?>
        </section>
    </main>
    <footer>
      <p class="copyright">&copy Copyrigth Politecnico de Colombia- 2023</p>
    </footer>
</body>
</html>