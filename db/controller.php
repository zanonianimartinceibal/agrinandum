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

    if(isset($_POST["cargarhierba"])){
        // Creamos la cadena aletoria 
        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; 
        $cad = ""; 
        for($i=0;$i<12;$i++) { 
        $cad .= substr($str,rand(0,62),1); 
        } 
        // Fin de la creacion de la cadena aletoria 
        $tamanoDibujo = $_FILES [ 'dibujo' ][ 'size' ]; // Leemos el tamaño del fichero
        $tamanoFoto = $_FILES [ 'dibujo' ][ 'size' ]; // Leemos el tamaño del fichero

        $tamaño_max="50000000000"; // Tamaño maximo permitido 
        if( $tamanoDibujo < $tamaño_max && $tamanoFoto < $tamaño_max){ // Comprobamos el tamaño  
            $destinoDibujo = '../img/especies/dibujo' ; // Carpeta donde se guardara  dibujo
            $destinoFoto = '../img/especies/foto' ; // Carpeta donde se guardara foto
            $sep1=explode('image/',$_FILES["dibujo"]["type"]);
            $sep2=explode('image/',$_FILES["foto"]["type"]); 
            $tipo1=$sep1[1]; // Optenemos el tipo de imagen que es 
            $tipo2=$sep2[1]; // Optenemos el tipo de imagen que es
            if($tipo1 == "png"  || $tipo1 == "jpeg" || $tipo2 == "png"  || $tipo2 == "jpeg"){ // Si el tipo de imagen a subir es el mismo de los permitidos, segimos. Puedes agregar mas tipos de imagen 
                move_uploaded_file ( $_FILES [ 'dibujo' ][ 'tmp_name' ], $destinoDibujo . '/' .$cad.'.'.$tipo1);  // Subimos el archivo 
                move_uploaded_file ( $_FILES [ 'foto' ][ 'tmp_name' ], $destinoFoto . '/' .$cad.'.'.$tipo2);  // Subimos el archivo 
                
                try {
                    $mbd = new PDO('mysql:host='.$servername.';dbname='.$dbname,  $username, $password);
                    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    // Prepara insert
                    $sentencia = $mbd->prepare ("INSERT INTO hierbas (nombre, nombre_cientifico, caracteristica1, caracteristica2, foto, dibujo, porte, espinas ,hoja, borde) VALUES (:nombre, :nombre_cientifico, :caracteristica1, :caracteristica2, :foto, :dibujo, :porte, :espinas ,:hoja, :borde)");
                    
                    $sentencia->bindParam(':nombre', $nombre);
                    $sentencia->bindParam(':nombre_cientifico', $cientifico);
                    $sentencia->bindParam(':caracteristica1', $descripcion1);
                    $sentencia->bindParam(':caracteristica2', $descripcion2);
                    $sentencia->bindParam(':foto', $foto);
                    $sentencia->bindParam(':dibujo', $dibujo);
                    $sentencia->bindParam(':porte', $porte);
                    $sentencia->bindParam(':espinas', $espinas);
                    $sentencia->bindParam(':hoja', $hoja);
                    $sentencia->bindParam(':borde', $borde);
    
                    $nombre     = $_POST["nombre"];
                    $cientifico     = $_POST["cientifico"];
                    $descripcion1     = $_POST["descripcion1"];
                    $descripcion2     = $_POST["descripcion2"];
                    $foto       = 'img/especies/foto/' .$cad.'.'.$tipo2;
                    $dibujo       ='img/especies/dibujo/' .$cad.'.'.$tipo1;
                    $porte      = $_POST["porte"];
                    $espinas   = $_POST["espinas"];
                    $hoja    = $_POST["hoja"];
                    $borde       = $_POST["borde"];

                    $sentencia->execute();

                    $sentencia = null;
                    $mbd = null;
                } catch (PDOException $e) {
                    echo 'Falló la conexión: ' . $e->getMessage();
                }

                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Se cargo la hierba de manera correcta')
                window.location.href='../alta.php'
                ;
                </SCRIPT>
                ");
            } 
            else echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('El tipo de archivo no es el permitido. Debe ser png o jpeg!')
            window.location.href='../alta.php';
            </SCRIPT>
            ");// Si no es el tipo permitido
        } 
        else echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Archivo muy pesado!')
        window.location.href='../alta.php';
        </SCRIPT>
        ");// Si supera el tamaño de permitido

    }

    if(isset($_POST["cargarpasto"])){
        // Creamos la cadena aletoria 
        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; 
        $cad = ""; 
        for($i=0;$i<12;$i++) { 
        $cad .= substr($str,rand(0,62),1); 
        } 
        // Fin de la creacion de la cadena aletoria 
        $tamanoDibujo = $_FILES [ 'dibujo' ][ 'size' ]; // Leemos el tamaño del fichero
        $tamanoFoto = $_FILES [ 'dibujo' ][ 'size' ]; // Leemos el tamaño del fichero

        $tamaño_max="50000000000"; // Tamaño maximo permitido 
        if( $tamanoDibujo < $tamaño_max && $tamanoFoto < $tamaño_max){ // Comprobamos el tamaño  
            $destinoDibujo = '../img/especies/dibujo' ; // Carpeta donde se guardara  dibujo
            $destinoFoto = '../img/especies/foto' ; // Carpeta donde se guardara foto
            $sep1=explode('image/',$_FILES["dibujo"]["type"]);
            $sep2=explode('image/',$_FILES["foto"]["type"]); 
            $tipo1=$sep1[1]; // Optenemos el tipo de imagen que es 
            $tipo2=$sep2[1]; // Optenemos el tipo de imagen que es
            if($tipo1 == "png"  || $tipo1 == "jpeg" || $tipo2 == "png"  || $tipo2 == "jpeg"){ // Si el tipo de imagen a subir es el mismo de los permitidos, segimos. Puedes agregar mas tipos de imagen 
                move_uploaded_file ( $_FILES [ 'dibujo' ][ 'tmp_name' ], $destinoDibujo . '/' .$cad.'.'.$tipo1);  // Subimos el archivo 
                move_uploaded_file ( $_FILES [ 'foto' ][ 'tmp_name' ], $destinoFoto . '/' .$cad.'.'.$tipo2);  // Subimos el archivo 
                
                try {
                    $mbd = new PDO('mysql:host='.$servername.';dbname='.$dbname,  $username, $password);
                    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    // Prepara insert
                    $sentencia = $mbd->prepare ("INSERT INTO especies (nombre, nombre_cientifico, caracteristica1, caracteristica2, foto, dibujo, macollo, tipo_lamina ,tipo_ligula, tipo_vegetativo) VALUES (:nombre, :nombre_cientifico, :caracteristica1, :caracteristica2, :foto, :dibujo, :macollo, :lamina ,:ligula, :vegetativo)");
                    
                    $sentencia->bindParam(':nombre', $nombre);
                    $sentencia->bindParam(':nombre_cientifico', $cientifico);
                    $sentencia->bindParam(':caracteristica1', $descripcion1);
                    $sentencia->bindParam(':caracteristica2', $descripcion2);
                    $sentencia->bindParam(':foto', $foto);
                    $sentencia->bindParam(':dibujo', $dibujo);
                    $sentencia->bindParam(':macollo', $macollo);
                    $sentencia->bindParam(':lamina', $lamina);
                    $sentencia->bindParam(':ligula', $ligula);
                    $sentencia->bindParam(':vegetativo', $vegetativo);
    
                    $nombre     = $_POST["nombre"];
                    $cientifico     = $_POST["cientifico"];
                    $descripcion1     = $_POST["descripcion1"];
                    $descripcion2     = $_POST["descripcion2"];
                    $foto       = 'img/especies/foto/' .$cad.'.'.$tipo2;
                    $dibujo       ='img/especies/dibujo/' .$cad.'.'.$tipo1;
                    $macollo      = $_POST["macollo"];
                    $lamina   = $_POST["lamina"];
                    $ligula    = $_POST["ligula"];
                    $vegetativo       = $_POST["tipo_vegetativo"];

                    $sentencia->execute();

                    $sentencia = null;
                    $mbd = null;
                } catch (PDOException $e) {
                    echo 'Falló la conexión: ' . $e->getMessage();
                }

                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Se cargo el pasto de manera correcta')
                window.location.href='../alta.php'
                ;
                </SCRIPT>
                ");
            } 
            else echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('El tipo de archivo no es el permitido. Debe ser png o jpeg!')
            window.location.href='../alta.php';
            </SCRIPT>
            ");// Si no es el tipo permitido
        } 
        else echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Archivo muy pesado!')
        window.location.href='../alta.php';
        </SCRIPT>
        ");// Si supera el tamaño de permitido

    }

    if(isset($_POST["sendmail"])){

        
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('gracias por contactarnos')
        window.location.href='../contacto.php';
        ;
        </SCRIPT>
        ");

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