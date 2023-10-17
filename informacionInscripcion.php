<?php

$Datos = array('Documento'=>$_POST['Documento'], 'ConfirmarDocumento' => $_POST['ConfirmarDocumento'], 'Nombres' => $_POST['Nombres'], 'Apellidos' => $_POST['Apellidos'], 'Correo' => $_POST['Correo'],'ConfirmarCorreo' => $_POST['ConfirmarCorreo'], 'Pais' => $_POST['Pais'], 'Departamento' => $_POST['Departamento'], 'Ciudad' => $_POST['Ciudad'], 'Edad' => $_POST['Edad'], 'Dirección' => $_POST['Dirección'], 'Telefono' => $_POST['Telefono'], 'Diplomado' => $_POST['Diplomado'], 'Informacion' => $_POST['Informacion'], 'Genero' => $_POST['Genero'], 'PoliticaUno' => $_POST['PoliticaUno'], 'PoliticaDos' => $_POST['PoliticaDos']);

/*
foreach ($Datos as $key => $value) {
	echo $key. " ". $value;
}
*/

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
        	if($Datos['Documento'] == $Datos['ConfirmarDocumento'] && $Datos['Correo'] == $Datos['ConfirmarCorreo']){ 
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
                            <?php
                            for($i=0; $i<count($Datos)-2; $i++){
                            ?>
                            <tr>
                            <?php
                                 for($j=0; $j <1; $j++){
                                    ?>
                                    <td> <?php echo array_keys($Datos)[$i];?></td>
                                    <td> <?php echo array_values($Datos)[$i];?></td>
                                    <?php
                                }
                            ?>
                            </tr>
                            <?php
                            }
                            ?>
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