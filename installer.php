<?php
$servername = "localhost";
$username = "root";
$password = "";
$datos ="CREATE TABLE `especies` (`id` int(11) NOT NULL,`nombre` varchar(100) NOT NULL,`nombre_cientifico` varchar(100) NOT NULL,`caracteristica1` varchar(300) NOT NULL,`caracteristica2` varchar(300) NOT NULL,`foto` varchar(200) NOT NULL,`dibujo` varchar(200) NOT NULL,`macollo` int(3) NOT NULL,`tipo_lamina` int(3) NOT NULL,`tipo_ligula` int(3) NOT NULL,`tipo_vegetativo` int(3) NOT NULL);



INSERT INTO `especies` (`id`, `nombre`, `nombre_cientifico`, `caracteristica1`, `caracteristica2`, `foto`, `dibujo`, `macollo`, `tipo_lamina`, `tipo_ligula`, `tipo_vegetativo`) VALUES
(1, 'planta1', 'nombre cientifico 1', 'caracteristica', '1', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo1.png', 0, 0, 0, 0),
(2, 'planta2', 'nombre cientifico 2', 'caracteristica2', '2', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 0, 0, 0, 0),
(3, 'planta3', 'nombre cientifico 3', 'caracteristica3', '3', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 0, 0, 0, 0),
(4, 'planta4', 'nombre cientifico 4', 'caracteristica4', '4', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 0, 0, 0, 0),
(5, 'planta5', 'nombre cientifico 5', 'caracteristica5', '5', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo1.png', 0, 0, 0, 0);



CREATE TABLE `macollo` (
  `id` int(11) NOT NULL,
  `tipo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `macollo` (`id`, `tipo`) VALUES
(1, 'Rollizo'),
(2, 'Semi rollizo/semi comprimido'),
(3, 'Comprimido');


CREATE TABLE `tipo_de_lamina` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `tipo_de_lamina` (`id`, `tipo`) VALUES
(1, 'Lineal'),
(2, 'Lanceolada'),
(3, 'Navicular');


CREATE TABLE `tipo_de_ligula` (
  `id` int(11) NOT NULL,
  `tipo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `tipo_de_ligula` (`id`, `tipo`) VALUES
(1, 'Membranácea'),
(2, 'Poco visible'),
(3, 'Disuelta en pelos'),
(4, 'Membranácea /disuelta en pelos');


CREATE TABLE `tipo_vegetativo` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `tipo_vegetativo` (`id`, `tipo`) VALUES
(1, 'Cespitoso'),
(2, 'Estolonífero'),
(3, 'Rizomatosa');

ALTER TABLE `especies`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `macollo`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tipo_de_ligula`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tipo_vegetativo`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `especies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `macollo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `tipo_de_ligula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `tipo_vegetativo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;
";
// Create connection

$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE agrinandum1".$datos;
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>