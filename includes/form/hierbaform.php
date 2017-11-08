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
            <button type="button" class="btn btn-info btn-lg" onclick="getHierba();">Buscar Hierba</button>
        </div>
    </div>
                            
</div>