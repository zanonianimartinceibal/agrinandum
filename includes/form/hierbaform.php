<div id="hierbaform" style="display:none">
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
                <label class="col-md-4 control-label" for="porte">Porte de la hierba</label>
                <div class="col-md-3">
                    <select id="porte" name="porte" class="form-control">
                        <option value="1">Bajo porte/enanas</option>
                        <option value="2">Porte intermedio/menores</option>
                        <option value="3">Alto porte/sub-abustivas</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button  data-toggle='modal' data-target='#infoPorte' type="button" class="btn btn-default btn">
                        <span  class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                    </button>
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
                <div class="col-md-2">
                    <button data-toggle='modal' data-target='#infoEspinas' type="button" class="btn btn-default btn">
                        <span  class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                    </button>
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
                <div class="col-md-2">
                    <button data-toggle='modal' data-target='#infoHoja' type="button" class="btn btn-default btn">
                        <span  class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                    </button>
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
                <div class="col-md-2">
                    <button data-toggle='modal' data-target='#infoBorde' type="button" class="btn btn-default btn">
                        <span  class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                    </button>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button type="submit" name ="cargarhierba" value ="cargarhierba" class="btn btn-info btn-lg">Cargar Hierba</button>
                </div>
            </div>
        </fieldset>
    </form>
    
                            
</div>