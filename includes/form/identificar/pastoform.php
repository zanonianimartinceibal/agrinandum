<div id="pastoform" style="display:none">
    <form class="form-horizontal" onsubmit="return false;">
        <fieldset>
            <div class="form-group">
                <label class="col-md-4 control-label" for="vegetativo">Tipo Vegetativo</label>
                <div class="col-md-3">
                    <select id="vegetativo" name="tipo_vegetativo" class="form-control">
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
                    <button onclick="getEspecie();" class="btn btn-info btn-lg">Buscar Pasto</button>
                </div>
            </div>
        </fieldset>
    </form>
    
                            
</div>