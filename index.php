<?php

$paises = array("Colombia", "Venezuela", "Ecuador", "Argentina","Mexico", "Otro");
$diplomados = array("Programacion PHP", "Programacion Java", "Base de Datos en SQL", "Diseño Digital", "Marketing");
$edades = array("Menor a 18", "18 a 25", "26 a 35", "36 a 45", "Mayor a 45");
$informaciones = array("Bring", "Educaedu", "Emagister","Facebook", "Google", "Instagram", "Yahoo", "Referido", "Volante");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pagina 1 Registro Diplomado </title>
    <link rel="stylesheet" href="style.css" />
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
                <h1 class="tituloPrincipal"> Registro en Pagina del Politécnico de Colombia </h1>
                <p>
                    El sisgiente formulario es una "replica" del formulario utilizado en el Politécnico de Colombia para realizar las inscripciones a los diplomados virtuales. Que se realiza como fin acádemico como parte de uno de los ejercicios planteados dentro del diplomado en PHP.
                </p>
            </div>
            <h3> Por favor diligenciar toda la información </h3>
        </section>
        <form method="POST" action="informacionInscripcion.php">
            <label for="Documento">Numero Documento</label>
            <input type="number" id="Documento"name="Documento" class="input-padron" required="" placeholder="Cédula, CURP, PPT o C.I.T. Sin puntos y comas.">
            <label for="ConfirmarDocumento">Confirmar número de documento</label>
            <input type="number" id= "ConfirmarDocumento"name="ConfirmarDocumento" class="input-padron" required="" placeholder="Cédula, CURP, PPT o C.I.T. Sin puntos y comas.">
            <label for="Nombres">Nombres</label>  
            <input type="text" id="Nombres" name="Nombres" class="input-padron" required="" placeholder="Nombres">
            <label for="Apellidos">Apellidos</label>
            <input type="text" id="Apellidos" name="Apellidos" class="input-padron" required="" placeholder="Apellidos">
            <label for="Correo">Correo</label> 
            <input type="email" id="Correo" name="Correo" class="input-padron" required="" placeholder="email@dominio.com">
            <label for="ConfirmarCorreo">Confirmar correo</label> 
            <input type="email" id="ConfirmarCorreo" name="ConfirmarCorreo" class="input-padron" required="" placeholder="email@dominio.com">
            <label for="Pais">Pais</label> 
            <select id="Pais" name="Pais" class="input-padron" required="">
                <option> Pais </option>
                <?php
                foreach($paises as $pais){
                ?>
                <option value="<?php echo $pais; ?>"> <?php echo $pais; ?> </option>
                <?php
                }
                ?>
            </select>
            <label for="Departamento">Departamento</label>
            <input type="text" id="Departamento" name="Departamento" class="input-padron" required="" placeholder="Departamento/Estado/Provincia">
            <label for="Ciudad">Ciudad</label>
            <input type="text" id="Ciudad" name="Ciudad" class="input-padron" required="" placeholder="Municipio/Ciudad">
            <label for="Edad">Edad</label> 
            <select id="Edad" name="Edad" class="input-padron" required="">
                <option> Edad </option>
                <?php
                foreach($edades as $edad){
                ?>
                <option value="<?php echo $edad; ?>"> <?php echo $edad; ?> </option>
                <?php
                }
                ?>
            </select>
            <label for="Dirección">Dirección</label>
            <input type="text" id="Dirección" name="Dirección" class="input-padron" required="" placeholder="Dirección de Residencia">
            <label for="Telefono">Teléfono de contacto</label>
            <input type="text" id="Telefono" name="Telefono" class="input-padron" required="" placeholder="Celular/Whatsapp (Sin indicativo)">
            <label for="Diplomado">Diplomado</label> 
            <select id="Diplomado" name="Diplomado" class="input-padron" required="">
                <option> Diplomado </option>
                <?php
                foreach($diplomados as $diplomado){
                ?>
                <option value="<?php echo $diplomado; ?>"> <?php echo $diplomado; ?> </option>
                <?php
                }
                ?>
            </select>
            <label for="Informacion">¿Cómo se enteró?</label> 
            <select id="Informacion" name="Informacion" class="input-padron" required="">
                <option> ¿Cómo se enteró? </option>
                <?php
                foreach($informaciones as $informacion){
                ?>
                <option value="<?php echo $informacion; ?>"> <?php echo $informacion; ?> </option>
                <?php
                }
                ?>
            </select>
            <fieldset>
                <legend>Genero</legend>
                <label><input type="radio" name="Genero" value="Masculino" required="">Masculino</label>
                <label><input type="radio" name="Genero" value="Femenino" required="">Femenino</label>  
            </fieldset>
            <fieldset>
                <legend>Política de tratamiento de datos</legend>
                <label for="radio-tyc"><input type="radio" name="PoliticaUno" value="Terminos y Condiciones" id="radio-tyc" required="">Terminos y Condiciones</label>
                <label for="radio-data"><input type="radio" name="PoliticaDos" value="habeas data" id="radio-data" required="">Lee el habeas data</label>  
            </fieldset>
            <a href="informacionInscripcion.php">
                <input type="submit" value="Enviar Formulario" class="enviar">
            </a>
        </form>
    </main>
    <footer>
      <p class="copyright">&copy Copyrigth Politecnico de Colombia- 2023</p>
    </footer>
</body>
</html>

