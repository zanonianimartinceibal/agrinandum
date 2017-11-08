<?php
    include("conexion.php");

    /*
    Get especie
    */
    if(isset($_POST["getEspecie"])){
        $vegetativo      = $_POST["vegetativo"];
        $macollo   = $_POST["macollo"];
        $ligula    = $_POST["ligula"];
        $lamina       = $_POST["lamina"];

        $resultado = [];
        $consulta = $mysqli->query("SELECT * FROM especies WHERE macollo = ".$macollo." AND tipo_lamina = ".$lamina." AND tipo_ligula = ".$ligula." AND tipo_vegetativo = ".$vegetativo."" ) or die(mysql_error());
            
        if (mysqli_num_rows($consulta)>0) {
            while ($f = $consulta->fetch_object()) {
                $res = "
                <div class='col-sm-4 col-md-4'>
                  <div class='thumbnail'>
                    <img  style='height:200px;' src='".$f->foto."' alt='...'>
                    <div class='caption'>
                      <h3>".$f->nombre."</h3>
                      <p>".$f->nombre_cientifico."</p>
                      <p><a href='especie.php#".$f->id."/pasto' class='btn btn-primary' role='button'>Ver especie</a></p>
                    </div>
                  </div>
                </div>";
                array_push($resultado, $res);
                
            }
            echo json_encode($resultado);
        }

        else{
            $resultado = array("<div class='alert alert-danger' role='alert'>No hay resultados que cumplan con las especificaciónes</br></div>");
            echo json_encode($resultado);
        }


    }

    /*
    Get hierba
    */
    if(isset($_POST["getHierba"])){
        $porte      = $_POST["porte"];
        $espinas   = $_POST["espinas"];
        $hoja    = $_POST["hoja"];
        $borde       = $_POST["borde"];

        $resultado = [];
        $consulta = $mysqli->query("SELECT * FROM hierbas WHERE porte = ".$porte." AND espinas = ".$espinas." AND hoja = ".$hoja." AND borde = ".$borde."" ) or die(mysql_error());
            
        if (mysqli_num_rows($consulta)>0) {
            while ($f = $consulta->fetch_object()) {
                $res = "
                <div class='col-sm-4 col-md-4'>
                  <div class='thumbnail'>
                    <img  style='height:200px;' src='".$f->foto."' alt='...'>
                    <div class='caption'>
                      <h3>".$f->nombre."</h3>
                      <p>".$f->nombre_cientifico."</p>
                      <p><a href='especie.php#".$f->id."/hierba' class='btn btn-primary' role='button'>Ver especie</a></p>
                    </div>
                  </div>
                </div>";
                array_push($resultado, $res);
                
            }
            echo json_encode($resultado);
        }

        else{
            $resultado = array("<div class='alert alert-danger' role='alert'>No hay resultados que cumplan con las especificaciónes</br></div>");
            echo json_encode($resultado);
        }


    }

    if(isset($_POST["cargarEspecie"])){
        $resultado = [];
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
        // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // prepara sql y bind parameters
            $stmt = $conn->prepare("INSERT INTO especies (nombre,nombre_cientifico, caracteristica1,caracteristica2, macollo, tipo_lamina, tipo_ligula, tipo_vegetativo) 
        VALUES (:nombre,:cientifico, :caracteristica1, :caracteristica2, :macollo,:lamina, :ligula,:vegetativo)");
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':cientifico', $cientifico);
            $stmt->bindParam(':caracteristica1', $caracteristica1);
            $stmt->bindParam(':caracteristica2', $caracteristica2);
            $stmt->bindParam(':macollo', $macollo);
            $stmt->bindParam(':lamina', $lamina);
            $stmt->bindParam(':ligula', $ligula);
            $stmt->bindParam(':vegetativo', $macollo);
        
        // ejecuta la consulta
            $uploaddirfoto = 'img/especies/foto/';
            $uploaddirdibujo = 'img/especies/dibujo/';
            $nombre = $_POST["nombre"];
            $cientifico = $_POST["cientifico"];
            $caracteristica1 = $_POST["descripcion1"];
            $caracteristica2 = $_POST["descripcion2"];
            $macollo = $_POST["macollo"];
            $lamina = $_POST["lamina"];
            $ligula = $_POST["ligula"];
            $vegetativo = $_POST["vegetativo"];
            $stmt->execute();
        
            $resultado = array("<div class='alert alert-success' role='alert'>Se cargo el pasto ".$nombre."</br></div>");
            echo json_encode ($resultado);
        }
        catch(PDOException $e)
        {
            $resultado = array ("Error: " . $e->getMessage());
            echo json_encode ($resultado);
        }
        $conn = null;

    }


    if(isset($_REQUEST['term'])){
        $link = mysqli_connect($servername, $username, $password, $dbname);
        // Prepara select
        $sql = "SELECT id, nombre, 'pasto' AS tipo FROM especies WHERE nombre LIKE ? UNION SELECT id, nombre, 'hierba' AS tipo FROM hierbas WHERE nombre LIKE ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables para la consulta 
            mysqli_stmt_bind_param($stmt, "ss", $param_term, $param_term);
            
            // Setea los parametros
            $param_term = $_REQUEST['term'] . '%';
            
            // Ejecuta la consulta
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
                
                // verifica resultao de consulta
                if(mysqli_num_rows($result) > 0){
                    // Fetch result
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                       echo "<a href='especie.php#".$row["id"]."/".$row["tipo"]."'><p>". $row["nombre"] . "</p></a>";
                    }
                } else{
                    echo "<p>No hay resultados</p>";
                }
            } else{
                echo "ERROR: No se puedo ejecutar $sql. " . mysqli_error($link);
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }

    

?>