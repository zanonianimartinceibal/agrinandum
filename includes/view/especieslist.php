<?php
    include("../../db/conexion.php");
    
    $resultado = "<div class='row'>";
    $consulta = $mysqli->query("SELECT  nombre, nombre_cientifico, foto, id, 'pasto' as tipo FROM especies UNION SELECT nombre, nombre_cientifico, foto, id, 'hierba' as tipo FROM hierbas ORDER BY nombre " ) or die(mysql_error());
    if (mysqli_num_rows($consulta)>0) {
        while ($f = $consulta->fetch_object()) {
            $resultado = $resultado. "
            <div class='col-sm-4 col-md-4'>
              <div class='thumbnail'>
                <img  style='height:200px;' src='".$f->foto."' alt='...'>
                <div class='caption'>
                  <h3>".$f->nombre."</h3>
                  <p>".$f->nombre_cientifico."</p>
                  <p>
                  <a href='especie.php#".$f->id."/".$f->tipo."' class='btn btn-primary' role='button'>Ver especie</a></p>
                </div>
              </div>
            </div>";
            
            
        }
        echo $resultado."</div>";
    }
    else{
        echo json_encode("No hay nada genio");
    }
?>