<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body onload="loadIdentificar();">
        <?php 
            $pagina = "identificar"; 
            include("includes/nav.php");
            ?>
            <div class="jumbotron jumbotron-fluid" id="contenedor">
                <div id="container">
                    <div class="alert alert-info" role="alert">
                        Si no sabes que opción elegir en el boton 
                        <span  class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                        vas a encontrar ayuda.
                    </div>
                    <form class="form-horizontal">
                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="planta">Tipo deplanta</label>
                        <div class="col-md-3">
                            <select id="planta" name="planta" class="form-control" onchange="showForm();">
                                <option value="0" disabled selected value> -- Seleccionar tipo -- </option>
                                <option value="1">Pasto</option>
                                <option value="2">Hierba</option>
                            </select>
                        </div>
                    </div>
                    </form>
                        <?php
                            include("includes/form/identificar/pastoform.php"); 
                            include("includes/form/identificar/hierbaform.php"); 
                            ?>
                </div>
            </div>
            <div class="container">
                <div class='row' id='resultado'>
                    <!-- Modales de ayuda -->
                </div>
            </div>
            <?php
            
            include("includes/footer.php");
        ?>

        <!-- Modales de ayuda -->
        <!-- Ayuda tipo vegetativo -->
        <?php
            include("includes/modalesAyuda/ayudapastos.php");
            include("includes/modalesAyuda/ayudahierbas.php");
            
        ?>
    
        <!-- Fin modales de ayuda -->
        

        <script src="js/controladoras/controladoraEspecies.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </body>
</html>