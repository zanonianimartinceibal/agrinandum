<?php
    include("../../db/conexion.php");
        $especie= $_GET['especie'];
        $tipo = $_GET['tipo'];
        $resultado = '';
        $procedimiento = '';
        $modales ='';
        if($tipo=="pasto"){
                $consulta = $mysqli->query("SELECT * FROM especies WHERE id =".$especie."" ) or die(mysql_error());
                $favorecer  = $mysqli->query("SELECT * FROM favorecer as F, entorno as E WHERE F.id_especie = ".$especie." AND F.id_entorno = E.id" ) or die(mysql_error());
        }
        else if ($tipo=="hierba"){
                $consulta = $mysqli->query("SELECT * FROM hierbas WHERE id =".$especie."" ) or die(mysql_error());
                $favorecer  = $mysqli->query("SELECT * FROM controlar as C, entorno as E WHERE C.id_hierba = ".$especie." AND C.id_entorno = E.id" ) or die(mysql_error());
        }
        
        if (mysqli_num_rows($consulta)>0) {
            while ($f = $consulta->fetch_object()) {
                if($tipo=="pasto"){
                        $procedimiento = "<h3>Favorecer</h3>
                        <div class='list-group'>";
                        while ($fav = $favorecer->fetch_object()){
                                $procedimiento = $procedimiento."<button  data-toggle='modal' data-target='#myModal".$fav->id_entorno."' class='list-group-item'>" .$fav->entorno."</button>";
                        
                                $modales = $modales."
                                <div id='myModal".$fav->id_entorno."' class='modal fade' role='dialog'>
                                <div class='modal-dialog'>
                        
                                <!-- Modal content-->
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                    <h4 class='modal-title'>Cnontrol de ESPECIE en ".$fav->entorno."</h4>
                                    </div>
                                    <div class='modal-body'>
                                        <h3>Metodo</h3>
                                        <p>".$fav->metodo."</p>
                                    </div>
                                </div>
                        
                                </div>
                                </div>
                                ";
                        } 
                }
                
                else if ($tipo=="hierba"){
                        $procedimiento = "<h3>Controlar</h3>
                        <div class='list-group'>";
                        while ($fav = $favorecer->fetch_object()){
                                $procedimiento = $procedimiento."<button  data-toggle='modal' data-target='#myModal".$fav->id_entorno."' class='list-group-item'>" .$fav->entorno."</button>";
                        
                                $modales = $modales."
                                <div id='myModal".$fav->id_entorno."' class='modal fade' role='dialog'>
                                <div class='modal-dialog'>
                        
                                <!-- Modal content-->
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                    <h4 class='modal-title'>Cnontrol de ESPECIE en ".$fav->entorno."</h4>
                                    </div>
                                    <div class='modal-body'>
                                        <h3>Metodo</h3>
                                        <p>".$fav->metodo."</p>
                                    </div>
                                </div>
                        
                                </div>
                                </div>
                                ";
                        }
                }
                $procedimiento = $procedimiento."</div>";
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
            </div>
            
            
            
            ".$modales;
                
            }
            echo $resultado;
        }
        else{
            $resultado = array("No hay resultados genio");
            echo json_encode($resultado);
        }
        
    
?>