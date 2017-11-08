<?php
    include("../../db/conexion.php");
        $especie= $_GET['especie'];
        $tipo = $_GET['tipo'];
        $resultado = '';
        if($tipo=="pasto"){
                $consulta = $mysqli->query("SELECT * FROM especies WHERE id =".$especie."" ) or die(mysql_error());
        }
        else if ($tipo=="hierba"){
                $consulta = $mysqli->query("SELECT * FROM hierbas WHERE id =".$especie."" ) or die(mysql_error());
        }
        
        if (mysqli_num_rows($consulta)>0) {
            while ($f = $consulta->fetch_object()) {
                if($tipo=="pasto"){
                        $procedimiento = "<h3>Favorecer</h3>
                        <div class='list-group'>
                                <button  data-toggle='modal' data-target='#myModal' class='list-group-item'>Campo natural</button>
                                <button  data-toggle='modal' data-target='#myModal' class='list-group-item'>Pastura sembrada</button>
                                <button  data-toggle='modal' data-target='#myModal' class='list-group-item'>Chacra</button>
                        </div>";
                }
                else if ($tipo=="hierba"){
                        $procedimiento = "<h3>Elegir entorno</h3>
                        <div class='list-group'>
                                <button  data-toggle='modal' data-target='#myModal' class='list-group-item'>Campo natural</button>
                                <button  data-toggle='modal' data-target='#myModal' class='list-group-item'>Pastura sembrada</button>
                                <button  data-toggle='modal' data-target='#myModal' class='list-group-item'>Chacra</button>
                        </div>";
                }
                $resultado = "<div class='jumbotron center-block' style ='max-width: 80%'>
                <div class='row'>
                        <div class='col-md-6 text-center'>
                                <img src='".$f->foto."' alt='foto' class='img-thumbnail' style='max-width: 300px;'>
                        </div>
                        <div class='col-md-6 text-center'>
                                <img src='".$f->dibujo. "' alt='dibujo' class='img-thumbnail' style='max-width: 300px;'>
                        </div>
                </div>
                <br>
                <div class='well'>
                <h2>" .$f->nombre. "</h2>
                        <div class='row'>
                                <div  class='col-md-6'>
                                <h3>Caracteristicas</h3>
                                <p>" .$f->caracteristica1."</p>
                                <p>" .$f->caracteristica2."</p>
                                </div>
                                <div  class='col-md-6 text-center'>
                                        <div class='well'>
                                                ".$procedimiento."
                                        </div>
                                </div>
                        </div>
                </div>
            </div>";
                
            }
            echo $resultado;
        }
        else{
            $resultado = array("No hay resultados genio");
            echo json_encode($resultado);
        }
        
    
?>