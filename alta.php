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
            include("includes/nav.php");
            ?>
            <div class="jumbotron jumbotron-fluid" id="contenedor">
                <div id="container">
                    <form class="form-horizontal">
                        <fieldset>
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
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="nombre">Nombre</label>  
                                <div class="col-md-5">
                                    <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md" required="">
                                
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="cientifico">Nombre cientifico</label>  
                                <div class="col-md-5">
                                    <input id="cientifico" name="cientifico" type="text" placeholder="Nombre cientifico" class="form-control input-md" required="">
                                
                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="descripcion1">Descripcion 1</label>
                                <div class="col-md-4">                     
                                    <textarea class="form-control" id="descripcion1" placeholder="Descripcion 1" name="descripcion1"></textarea>
                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="descripcion2">Descripcion 2</label>
                                <div class="col-md-4">                     
                                    <textarea class="form-control" id="descripcion2" placeholder="Descripcion 2" name="descripcion2"></textarea>
                                </div>
                            </div>

                            <!-- File Button --> 
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="foto">Foto</label>
                                <div class="col-md-4">
                                    <input id="foto" name="foto" class="input-file" type="file">
                                </div>
                            </div>

                            <!-- File Button --> 
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="dibujo">Dibujo</label>
                                <div class="col-md-4">
                                    <input id="dibujo" name="dibujo" class="input-file" type="file">
                                </div>
                            </div>

                            <div id="pastoform" style="display:none">
                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="vegetativo">Tipo Vegetativo</label>
                                    <div class="col-md-3">
                                        <select id="vegetativo" name="vegetativo" class="form-control">
                                            <option value="1">Cespitoso</option>
                                            <option value="2">Estolonífero</option>
                                            <option value="3">Rizomatosa</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="macollo">Macollo</label>
                                    <div class="col-md-3">
                                        <select id="macollo" name="macollo" class="form-control">
                                            <option value="1">Rollizo</option>
                                            <option value="2">Semi rollizo/semi comprimido</option>
                                            <option value="3">Comprimido</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="ligula">Tipo de Lígula</label>
                                    <div class="col-md-3">
                                        <select id="ligula" name="ligula" class="form-control">
                                            <option value="1">Membranácea</option>
                                            <option value="2">Poco visible</option>
                                            <option value="3">Pilosa</option>
                                            <option value="4">Membrano-pilosa</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="lamina">Tipo de Lámina</label>
                                    <div class="col-md-3">
                                        <select id="lamina" name="lamina" class="form-control">
                                            <option value="1">Lineal</option>
                                            <option value="2">Lanceolada</option>
                                            <option value="3">Navicular</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="singlebutton"></label>
                                    <div class="col-md-4">
                                        <button type="button" class="btn btn-info btn-lg" onclick="cargarEspecie();">Cargar Pasto</button>
                                    </div>
                                </div>
                                                        
                            </div>
                            <div id="hierbaform" style="display:none">
                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="porte">Porte de la hierba</label>
                                    <div class="col-md-3">
                                        <select id="porte" name="porte" class="form-control">
                                            <option value="1">Bajo porte/enanas</option>
                                            <option value="2">Porte intermedio/menores</option>
                                            <option value="3">Alto porte/sub-abustivas</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="espinas">Espinas</label>
                                    <div class="col-md-3">
                                        <select id="espinas" name="espinas" class="form-control">
                                            <option value="1">Si</option>
                                            <option value="2">No</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="hoja">Hoja</label>
                                    <div class="col-md-3">
                                        <select id="hoja" name="hoja" class="form-control">
                                            <option value="1">Entera</option>
                                            <option value="2">Hendida</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="lamina">Borde de la hoja</label>
                                    <div class="col-md-3">
                                        <select id="borde" name="borde" class="form-control">
                                            <option value="1">Aserrado</option>
                                            <option value="2">Liso</option>
                                            <option value="3">Ondulado</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="singlebutton"></label>
                                    <div class="col-md-4">
                                        <button type="button" class="btn btn-info btn-lg" onclick="cargarHierba();">Cargar Hierba</button>
                                    </div>
                                </div>
                                                        
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
            <div id="resultado">
                
            </div>
            <?php
            
            include("includes/footer.php");
        ?>


        <script src="js/controladoras/controladoraEspecies.js"></script>
        <script src="js/controladoras/controladoraAdmin.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </body>
</html>