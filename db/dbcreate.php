<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agrinandum";

$user='root';
$pass='';
$db="agrinandum"; 

    try {
        $dbh = new PDO("mysql:host=$servername", $username, $password);

        $dbh->exec("CREATE DATABASE `$db`;
                CREATE USER '$user'@'localhost' IDENTIFIED BY '$pass';
                GRANT ALL ON `$db`.* TO '$user'@'localhost';
                FLUSH PRIVILEGES;
                ")
                
        or die(print_r($dbh->errorInfo(), true));
        echo "Espere..";
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Se creo la bd, click en aceptar para que se carguen los datos de prueba a las tablas')
        window.location.href='dbpopulate.php'
        ;
        </SCRIPT>
        
        ");
        

    } catch (PDOException $e) {
        die("DB ERROR: ". $e->getMessage());
    }

?>