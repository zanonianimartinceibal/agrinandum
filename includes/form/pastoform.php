<div id="pastoform" style="display:none">
    <form action ="db/controller.php" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
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

            <div class="form-group">
                <label class="col-md-4 control-label" for="vegetativo">Tipo Vegetativo</label>
                <div class="col-md-3">
                    <select id="tipo_vegetativo" name="tipo_vegetativo" class="form-control">
                        <option value="1">Cespitoso</option>
                        <option value="2">Estolonífero</option>
                        <option value="3">Rizomatosa</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button  data-toggle='modal' data-target='#infoVegetativo' type="button" class="btn btn-default btn">
                        <span  class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                    </button>
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
                <div class="col-md-2">
                    <button data-toggle='modal' data-target='#infoMacollo' type="button" class="btn btn-default btn">
                        <span  class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                    </button>
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
                <div class="col-md-2">
                    <button data-toggle='modal' data-target='#infoLigula' type="button" class="btn btn-default btn">
                        <span  class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                    </button>
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
                <div class="col-md-2">
                    <button data-toggle='modal' data-target='#infoLamina' type="button" class="btn btn-default btn">
                        <span  class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                    </button>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button type="submit" name="cargarpasto" value ="cargarpasto" class="btn btn-info btn-lg">Cargar Pasto</button>
                </div>
            </div>
        </fieldset>
    </form>
    
                            
</div>