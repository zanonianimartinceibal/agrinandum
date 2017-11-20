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
                <div class="contacto">
                <div class="row">
                    <div class="col-md-8">
                        <div class="well well-sm">
                            <form action ="db/controller.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name ="nombre" placeholder="Nombre" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            Email</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                            </span>
                                            <input type="email" class="form-control" id="email" name ="email" placeholder="Email" required="required" /></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">
                                            Motivo</label>
                                        <select id="subject" name="motivo" class="form-control" required="required">
                                            <option value="problemas">Problemas con la pagina</option>
                                            <option value="sugerencia">Sugerencias</option>
                                            <option value="otro">Otro motivo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Mensaje</label>
                                        <textarea name="mensaje" id="message" class="form-control" rows="9" cols="25" required="required"
                                            placeholder="Mensaje"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="sendmail" value="sendemail" class="btn btn-primary pull-right" id="btnContactUs">
                                        Enviar</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <form>
                        <legend><span class="glyphicon glyphicon-globe"></span>Empresa</legend>
                        <address>
                            <strong>Agrinandum, Inc.</strong><br>
                            <strong>Oficinas:</strong><br>
                            Lamentablemente nuestro presupuesto no nos permite tener una oficina.<br>
                            Paysandú, Uruguay<br>
                            <abbr title="Phone">
                                Tel:</abbr>
                            099 093 872
                        </address>
                        <address>
                            <strong>Desarrollado por </strong><br>
                            Martin Zanoniani
                        </address>
                        </form>
                    </div>
                </div>
                </div>
                
            </div>
            <?php
            
            include("includes/footer.php");
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/controladoras/controladoraEspecies.js"></script>
        
    </body>
</html>