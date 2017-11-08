<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php 
		include("includes/nav.php");
		?>
        <div class="jumbotron jumbotron-fluid" id="contenedor">
            <div  id="titulo">
            </div>
            <div id="logo">
            <img class="img-responsive" src="img/logo.png" alt="no se pudo cargar la imagen">
            </div>
            <div class="container" id="description">
            <p> Bienvenido a Agrinandum, la herramienta de control de plantas más completa. 
                Tenemos una base de datos con más de 150 tipos de plantas y sus métodos de control dependiendo 
                el entorno en el que se encuentren, garantizando así no perjudicar las demas especies cercanas.</p>      
            </div>
        </div>
        <?php
		
		include("includes/footer.php");
	?>
        <script src="js/controladoras/controladoraEspecies.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>