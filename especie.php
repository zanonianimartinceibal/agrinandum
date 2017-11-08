<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body onload="verEspecie();">
        <?php 
            include("includes/nav.php");
            ?>
            <div class="jumbotron jumbotron-fluid" id="contenedor">
                
                <div id="container">

                    
                </div>
            </div>
            <?php
            
            include("includes/footer.php");
        ?>
        <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Cnontrol de ESPECIE en ENTORNO</h4>
            </div>
            <div class="modal-body">
                <h3>Metodo</h3>
                <p>Some text in the modal Some text in the modal Some text in the modal Some text in the modal
                Some text in the modal Some text in the modal Some text in the modal Some text in the modal 
                Some text in the modal Some text in the modal Some text in the modal.</p>
            </div>
        </div>

        </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/controladoras/controladoraEspecies.js"></script>
        
    </body>
</html>