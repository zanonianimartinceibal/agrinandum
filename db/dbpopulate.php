<?php

include("conexion.php");
$db="prueba";

    try {
        $dbh = new PDO('mysql:host='.$servername.';dbname='.$dbname,  $username, $password);

        $dbh->exec("
        CREATE TABLE `controlar` (
          `id` int(11) NOT NULL,
          `id_hierba` int(11) NOT NULL,
          `id_entorno` int(11) NOT NULL,
          `metodo` varchar(500) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
        
        --
        -- Volcado de datos para la tabla `controlar`
        --
        
        INSERT INTO `controlar` (`id`, `id_hierba`, `id_entorno`, `metodo`) VALUES
        (1, 1, 1, 'Metodo de control en campo natural para la especie 1'),
        (2, 1, 2, 'Metodo de control en pastura sembrada para la especie 1'),
        (3, 1, 3, 'Metodo de control en chacra para la especie 1 '),
        (4, 2, 1, 'Metodo de control en campo natural para la especie 2'),
        (5, 2, 2, 'Metodo de control en pastura sembrada para la especie 2'),
        (6, 2, 3, 'Metodo de control en chacra para la especie 2'),
        (7, 3, 1, 'Metodo de control en campo natural para la especie 3'),
        (8, 3, 2, 'Metodo de control en pastura sembrada para la especie 3'),
        (9, 3, 3, 'Metodo de control en chacra para la especie 3'),
        (10, 4, 1, 'Metodo de control en campo natural para la especie 4'),
        (11, 4, 2, 'Metodo de control en pastura sembrada para la especie 4'),
        (12, 4, 3, 'Metodo de control en chacra para la especie 4'),
        (13, 5, 1, 'Metodo de control en campo natural para la especie 5'),
        (14, 5, 2, 'Metodo de control en pastura sembrada para la especie 5'),
        (15, 5, 3, 'Metodo de control en chacra para la especie 5'),
        (16, 6, 1, 'Metodo de control en campo natural para la especie 6'),
        (17, 6, 2, 'Metodo de control en pastura sembrada para la especie 6'),
        (18, 6, 3, 'Metodo de control en chacra para la especie 6'),
        (19, 7, 1, 'Metodo de control en campo natural para la especie 7'),
        (20, 7, 2, 'Metodo de control en pastura sembrada para la especie 7'),
        (21, 7, 3, 'Metodo de control en chacra para la especie 7'),
        (22, 8, 1, 'Metodo de control en campo natural para la especie 8'),
        (23, 8, 2, 'Metodo de control en pastura sembrada para la especie 8'),
        (24, 8, 3, 'Metodo de control en chacra para la especie 8 '),
        (25, 9, 1, 'Metodo de control en campo natural para la especie 9'),
        (26, 9, 2, 'Metodo de control en pastura sembrada para la especie 9'),
        (27, 9, 3, 'Metodo de control en chacra para la especie 9'),
        (28, 10, 1, 'Metodo de control en campo natural para la especie 10'),
        (29, 10, 2, 'Metodo de control en pastura sembrada para la especie 10'),
        (30, 10, 3, 'Metodo de control en chacra para la especie 10'),
        (31, 11, 1, 'Metodo de control en campo natural para la especie 11'),
        (32, 11, 2, 'Metodo de control en pastura sembrada para la especie 11'),
        (33, 11, 3, 'Metodo de control en chacra para la especie 11'),
        (34, 12, 1, 'Metodo de control en campo natural para la especie 12'),
        (35, 12, 2, 'Metodo de control en pastura sembrada para la especie 12'),
        (36, 12, 3, 'Metodo de control en chacra para la especie 12'),
        (37, 13, 1, 'Metodo de control en campo natural para la especie 13'),
        (38, 13, 2, 'Metodo de control en pastura sembrada para la especie 13'),
        (39, 13, 3, 'Metodo de control en chacra para la especie 13'),
        (40, 14, 1, 'Metodo de control en campo natural para la especie 14'),
        (41, 14, 2, 'Metodo de control en pastura sembrada para la especie 14'),
        (42, 14, 3, 'Metodo de control en chacra para la especie 14 '),
        (43, 15, 1, 'Metodo de control en campo natural para la especie 15'),
        (44, 15, 2, 'Metodo de control en pastura sembrada para la especie 15'),
        (45, 15, 3, 'Metodo de control en chacra para la especie 15'),
        (46, 16, 1, 'Metodo de control en campo natural para la especie 16'),
        (47, 16, 2, 'Metodo de control en pastura sembrada para la especie 16'),
        (48, 16, 3, 'Metodo de control en chacra para la especie 16 '),
        (49, 17, 1, 'Metodo de control en campo natural para la especie 17'),
        (50, 17, 2, 'Metodo de control en pastura sembrada para la especie 17'),
        (51, 17, 3, 'Metodo de control en chacra para la especie 17'),
        (52, 18, 1, 'Metodo de control en campo natural para la especie 18'),
        (53, 18, 2, 'Metodo de control en pastura sembrada para la especie 18'),
        (54, 18, 3, 'Metodo de control en chacra para la especie 18'),
        (55, 19, 1, 'Metodo de control en campo natural para la especie 19'),
        (56, 19, 2, 'Metodo de control en pastura sembrada para la especie 19'),
        (57, 19, 3, 'Metodo de control en chacra para la especie 19'),
        (58, 20, 1, 'Metodo de control en campo natural para la especie 20'),
        (59, 20, 2, 'Metodo de control en pastura sembrada para la especie 20'),
        (60, 20, 3, 'Metodo de control en chacra para la especie 20');
        
        -- --------------------------------------------------------
        
        --
        -- Estructura de tabla para la tabla `entorno`
        --
        
        CREATE TABLE `entorno` (
          `id` int(11) NOT NULL,
          `entorno` varchar(100) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
        
        --
        -- Volcado de datos para la tabla `entorno`
        --
        
        INSERT INTO `entorno` (`id`, `entorno`) VALUES
        (1, 'Campo Natural'),
        (2, 'Pastura Sembrada'),
        (3, 'Chacra');
        
        -- --------------------------------------------------------
        
        --
        -- Estructura de tabla para la tabla `especies`
        --
        
        CREATE TABLE `especies` (
          `id` int(11) NOT NULL,
          `nombre` varchar(100) NOT NULL,
          `nombre_cientifico` varchar(100) NOT NULL,
          `caracteristica1` varchar(300) NOT NULL,
          `caracteristica2` varchar(300) NOT NULL,
          `foto` varchar(200) NOT NULL,
          `dibujo` varchar(200) NOT NULL,
          `macollo` int(3) NOT NULL,
          `tipo_lamina` int(3) NOT NULL,
          `tipo_ligula` int(3) NOT NULL,
          `tipo_vegetativo` int(3) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
        
        --
        -- Volcado de datos para la tabla `especies`
        --
        
        INSERT INTO `especies` (`id`, `nombre`, `nombre_cientifico`, `caracteristica1`, `caracteristica2`, `foto`, `dibujo`, `macollo`, `tipo_lamina`, `tipo_ligula`, `tipo_vegetativo`) VALUES
        (1, 'pasto 1', 'nombre cientifico pasto 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 1, 1, 1, 1),
        (2, 'pasto 2', 'nombre cientifico pasto 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 1, 1, 1, 2),
        (3, 'pasto 3', 'nombre cientifico pasto 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 1, 1, 1, 3),
        (4, 'pasto 4', 'nombre cientifico pasto 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 1, 2, 1, 1),
        (5, 'pasto 5', 'nombre cientifico pasto 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 1, 2, 1, 2),
        (6, 'pasto 6', 'nombre cientifico pasto 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 1, 2, 1, 3),
        (7, 'pasto 7', 'nombre cientifico pasto 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 1, 3, 1, 1),
        (8, 'pasto 8', 'nombre cientifico pasto 8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 1, 3, 1, 2),
        (9, 'pasto 9', 'nombre cientifico pasto 9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 1, 3, 1, 3),
        (10, 'pasto 10', 'nombre cientifico pasto 10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 2, 1, 1, 1),
        (11, 'pasto 11', 'nombre cientifico pasto 11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 2, 1, 1, 2),
        (12, 'pasto 12', 'nombre cientifico pasto 12', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 2, 1, 1, 3),
        (13, 'pasto 13', 'nombre cientifico pasto 13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 2, 2, 1, 1),
        (14, 'pasto 14', 'nombre cientifico pasto 14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 2, 2, 1, 2),
        (15, 'pasto 15', 'nombre cientifico pasto 15', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 2, 2, 1, 3),
        (16, 'pasto 16', 'nombre cientifico pasto 16', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 2, 3, 1, 1),
        (17, 'pasto 17', 'nombre cientifico pasto 17', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 2, 3, 1, 2),
        (18, 'pasto 18', 'nombre cientifico pasto 18', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 2, 3, 1, 3),
        (19, 'pasto 19', 'nombre cientifico pasto 19', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 2, 1, 2, 1),
        (20, 'pasto 20', 'nombre cientifico pasto 20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto1.jpg', 'img/especies/dibujo/dibujo1.png', 2, 1, 2, 2);
        
        -- --------------------------------------------------------
        
        --
        -- Estructura de tabla para la tabla `favorecer`
        --
        
        CREATE TABLE `favorecer` (
          `id` int(11) NOT NULL,
          `id_especie` int(11) NOT NULL,
          `id_entorno` int(11) NOT NULL,
          `metodo` varchar(500) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
        
        --
        -- Volcado de datos para la tabla `favorecer`
        --
        
        INSERT INTO `favorecer` (`id`, `id_especie`, `id_entorno`, `metodo`) VALUES
        (1, 1, 1, 'Metodo para favorecer en campo natural el pasto 1'),
        (2, 1, 2, 'Metodo para favorecer en pastura sembrada el pasto 1'),
        (3, 1, 3, 'Metodo para favorecer en chacra el pasto 1'),
        (4, 2, 1, 'Metodo para favorecer en campo natural el pasto 2'),
        (5, 2, 2, 'Metodo para favorecer en pastura sembrada el pasto 2'),
        (6, 2, 3, 'Metodo para favorecer en chacra el pasto 2'),
        (7, 3, 1, 'Metodo para favorecer en campo natural el pasto 3'),
        (8, 3, 2, 'Metodo para favorecer en pastura sembrada el pasto 3'),
        (9, 3, 3, 'Metodo para favorecer en chacra el pasto 3'),
        (10, 4, 1, 'Metodo para favorecer en campo natural el pasto 4'),
        (11, 4, 2, 'Metodo para favorecer en pastura sembrada el pasto 4'),
        (12, 4, 3, 'Metodo para favorecer en chacra el pasto 4'),
        (13, 5, 1, 'Metodo para favorecer en campo natural el pasto 5'),
        (14, 5, 2, 'Metodo para favorecer en pastura sembrada el pasto 5'),
        (15, 5, 3, 'Metodo para favorecer en chacra el pasto 5'),
        (16, 6, 1, 'Metodo para favorecer en campo natural el pasto 6'),
        (17, 6, 2, 'Metodo para favorecer en pastura sembrada el pasto 6'),
        (18, 6, 3, 'Metodo para favorecer en chacra el pasto 6'),
        (19, 7, 1, 'Metodo para favorecer en campo natural el pasto 7'),
        (20, 7, 2, 'Metodo para favorecer en pastura sembrada el pasto 7'),
        (21, 7, 3, 'Metodo para favorecer en chacra el pasto 7'),
        (22, 8, 1, 'Metodo para favorecer en campo natural el pasto 8'),
        (23, 8, 2, 'Metodo para favorecer en pastura sembrada el pasto 8'),
        (24, 8, 3, 'Metodo para favorecer en chacra el pasto 8'),
        (25, 9, 1, 'Metodo para favorecer en campo natural el pasto 9'),
        (26, 9, 2, 'Metodo para favorecer en pastura sembrada el pasto 9'),
        (27, 9, 3, 'Metodo para favorecer en chacra el pasto 9'),
        (28, 10, 1, 'Metodo para favorecer en campo natural el pasto 10'),
        (29, 10, 2, 'Metodo para favorecer en pastura sembrada el pasto 10'),
        (30, 10, 3, 'Metodo para favorecer en chacra el pasto 10'),
        (31, 11, 1, 'Metodo para favorecer en campo natural el pasto 11'),
        (32, 11, 2, 'Metodo para favorecer en pastura sembrada el pasto 11'),
        (33, 11, 3, 'Metodo para favorecer en chacra el pasto 11'),
        (34, 12, 1, 'Metodo para favorecer en campo natural el pasto 12'),
        (35, 12, 2, 'Metodo para favorecer en pastura sembrada el pasto 12'),
        (36, 12, 3, 'Metodo para favorecer en chacra el pasto 12'),
        (37, 13, 1, 'Metodo para favorecer en campo natural el pasto 13'),
        (38, 13, 2, 'Metodo para favorecer en pastura sembrada el pasto 13'),
        (39, 13, 3, 'Metodo para favorecer en chacra el pasto 13'),
        (40, 14, 1, 'Metodo para favorecer en campo natural el pasto 14'),
        (41, 14, 2, 'Metodo para favorecer en pastura sembrada el pasto 14'),
        (42, 14, 3, 'Metodo para favorecer en chacra el pasto 14'),
        (43, 15, 1, 'Metodo para favorecer en campo natural el pasto 15'),
        (44, 15, 2, 'Metodo para favorecer en pastura sembrada el pasto 15'),
        (45, 15, 3, 'Metodo para favorecer en chacra el pasto 15'),
        (46, 16, 1, 'Metodo para favorecer en campo natural el pasto 16'),
        (47, 16, 2, 'Metodo para favorecer en pastura sembrada el pasto 16'),
        (48, 16, 3, 'Metodo para favorecer en chacra el pasto 16'),
        (49, 17, 1, 'Metodo para favorecer en campo natural el pasto 17'),
        (50, 17, 2, 'Metodo para favorecer en pastura sembrada el pasto 17'),
        (51, 17, 3, 'Metodo para favorecer en chacra el pasto 17'),
        (52, 18, 1, 'Metodo para favorecer en campo natural el pasto 18'),
        (53, 18, 2, 'Metodo para favorecer en pastura sembrada el pasto 18'),
        (54, 18, 3, 'Metodo para favorecer en chacra el pasto 18'),
        (55, 19, 1, 'Metodo para favorecer en campo natural el pasto 19'),
        (56, 19, 2, 'Metodo para favorecer en pastura sembrada el pasto 19'),
        (57, 19, 3, 'Metodo para favorecer en chacra el pasto 19'),
        (58, 20, 1, 'Metodo para favorecer en campo natural el pasto 20'),
        (59, 20, 2, 'Metodo para favorecer en pastura sembrada el pasto 20'),
        (60, 20, 3, 'Metodo para favorecer en chacra el pasto 20');
        
        -- --------------------------------------------------------
        
        --
        -- Estructura de tabla para la tabla `hierbas`
        --
        
        CREATE TABLE `hierbas` (
          `id` int(11) NOT NULL,
          `nombre` varchar(100) NOT NULL,
          `nombre_cientifico` varchar(100) NOT NULL,
          `caracteristica1` varchar(300) NOT NULL,
          `caracteristica2` varchar(300) NOT NULL,
          `foto` varchar(200) NOT NULL,
          `dibujo` varchar(200) NOT NULL,
          `porte` int(3) NOT NULL,
          `espinas` int(3) NOT NULL,
          `hoja` int(3) NOT NULL,
          `borde` int(3) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
        
        --
        -- Volcado de datos para la tabla `hierbas`
        --
        
        INSERT INTO `hierbas` (`id`, `nombre`, `nombre_cientifico`, `caracteristica1`, `caracteristica2`, `foto`, `dibujo`, `porte`, `espinas`, `hoja`, `borde`) VALUES
        (1, 'Hierba 1', 'Nombre cientifico hierba 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo2.png', 1, 1, 1, 1),
        (2, 'Hierba 2', 'Nombre cientifico hierba 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo2.png', 1, 1, 1, 2),
        (3, 'Hierba 3', 'Nombre cientifico hierba 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo2.png', 1, 1, 1, 3),
        (4, 'Hierba 4', 'Nombre cientifico hierba 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo2.png', 1, 1, 2, 1),
        (5, 'Hierba 5', 'Nombre cientifico hierba 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo2.png', 1, 1, 2, 2),
        (6, 'Hierba 6', 'Nombre cientifico hierba 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo2.png', 1, 1, 2, 3),
        (7, 'Hierba 7', 'Nombre cientifico hierba 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo2.png', 1, 1, 1, 1),
        (8, 'Hierba 8', 'Nombre cientifico hierba 8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo2.png', 1, 1, 2, 2),
        (9, 'Hierba 9', 'Nombre cientifico hierba 9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo2.png', 1, 1, 2, 3),
        (10, 'Hierba 10', 'Nombre cientifico hierba 10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo2.png', 1, 2, 1, 1),
        (11, 'Hierba 11', 'Nombre cientifico hierba 11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo2.png', 1, 2, 1, 2),
        (12, 'Hierba 12', 'Nombre cientifico hierba 12', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo2.png', 1, 2, 1, 3),
        (13, 'Hierba 13', 'Nombre cientifico hierba 13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo2.png', 1, 2, 2, 1),
        (14, 'Hierba 14', 'Nombre cientifico hierba 14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo2.png', 1, 2, 2, 2),
        (15, 'Hierba 15', 'Nombre cientifico hierba 15', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo2.png', 1, 2, 2, 3),
        (16, 'Hierba 16', 'Nombre cientifico hierba 16', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo2.png', 1, 2, 1, 3),
        (17, 'Hierba 17', 'Nombre cientifico hierba 17', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo2.png', 1, 2, 1, 2),
        (18, 'Hierba 18', 'Nombre cientifico hierba 18', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo2.png', 2, 1, 1, 1),
        (19, 'Hierba 19', 'Nombre cientifico hierba 19', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo2.png', 2, 1, 1, 2),
        (20, 'Hierba 20', 'Nombre cientifico hierba 20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'img/especies/foto/foto2.jpg', 'img/especies/dibujo/dibujo2.png', 2, 1, 1, 3);
        
        -- --------------------------------------------------------
        
        --
        -- Estructura de tabla para la tabla `macollo`
        --
        
        CREATE TABLE `macollo` (
          `id` int(11) NOT NULL,
          `tipo` varchar(200) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
        
        --
        -- Volcado de datos para la tabla `macollo`
        --
        
        INSERT INTO `macollo` (`id`, `tipo`) VALUES
        (1, 'Rollizo'),
        (2, 'Semi rollizo/semi comprimido'),
        (3, 'Comprimido');
        
        -- --------------------------------------------------------
        
        --
        -- Estructura de tabla para la tabla `tipo_de_lamina`
        --
        
        CREATE TABLE `tipo_de_lamina` (
          `id` int(11) NOT NULL,
          `tipo` varchar(100) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
        
        --
        -- Volcado de datos para la tabla `tipo_de_lamina`
        --
        
        INSERT INTO `tipo_de_lamina` (`id`, `tipo`) VALUES
        (1, 'Lineal'),
        (2, 'Lanceolada'),
        (3, 'Navicular');
        
        -- --------------------------------------------------------
        
        --
        -- Estructura de tabla para la tabla `tipo_de_ligula`
        --
        
        CREATE TABLE `tipo_de_ligula` (
          `id` int(11) NOT NULL,
          `tipo` varchar(200) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
        
        --
        -- Volcado de datos para la tabla `tipo_de_ligula`
        --
        
        INSERT INTO `tipo_de_ligula` (`id`, `tipo`) VALUES
        (1, 'MembranÃ¡cea'),
        (2, 'Poco visible'),
        (3, 'Disuelta en pelos'),
        (4, 'MembranÃ¡cea /disuelta en pelos');
        
        -- --------------------------------------------------------
        
        --
        -- Estructura de tabla para la tabla `tipo_vegetativo`
        --
        
        CREATE TABLE `tipo_vegetativo` (
          `id` int(11) NOT NULL,
          `tipo` varchar(100) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
        
        --
        -- Volcado de datos para la tabla `tipo_vegetativo`
        --
        
        INSERT INTO `tipo_vegetativo` (`id`, `tipo`) VALUES
        (1, 'Cespitoso'),
        (2, 'EstolonÃ­fero'),
        (3, 'Rizomatosa');
        
        --
        -- Índices para tablas volcadas
        --
        
        --
        -- Indices de la tabla `controlar`
        --
        ALTER TABLE `controlar`
          ADD PRIMARY KEY (`id`);
        
        --
        -- Indices de la tabla `entorno`
        --
        ALTER TABLE `entorno`
          ADD PRIMARY KEY (`id`);
        
        --
        -- Indices de la tabla `especies`
        --
        ALTER TABLE `especies`
          ADD PRIMARY KEY (`id`);
        
        --
        -- Indices de la tabla `favorecer`
        --
        ALTER TABLE `favorecer`
          ADD PRIMARY KEY (`id`);
        
        --
        -- Indices de la tabla `hierbas`
        --
        ALTER TABLE `hierbas`
          ADD PRIMARY KEY (`id`);
        
        --
        -- Indices de la tabla `macollo`
        --
        ALTER TABLE `macollo`
          ADD PRIMARY KEY (`id`);
        
        --
        -- Indices de la tabla `tipo_de_ligula`
        --
        ALTER TABLE `tipo_de_ligula`
          ADD PRIMARY KEY (`id`);
        
        --
        -- Indices de la tabla `tipo_vegetativo`
        --
        ALTER TABLE `tipo_vegetativo`
          ADD PRIMARY KEY (`id`);
        
        --
        -- AUTO_INCREMENT de las tablas volcadas
        --
        
        --
        -- AUTO_INCREMENT de la tabla `controlar`
        --
        ALTER TABLE `controlar`
          MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
        
        --
        -- AUTO_INCREMENT de la tabla `entorno`
        --
        ALTER TABLE `entorno`
          MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
        
        --
        -- AUTO_INCREMENT de la tabla `especies`
        --
        ALTER TABLE `especies`
          MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
        
        --
        -- AUTO_INCREMENT de la tabla `favorecer`
        --
        ALTER TABLE `favorecer`
          MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
        
        --
        -- AUTO_INCREMENT de la tabla `hierbas`
        --
        ALTER TABLE `hierbas`
          MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
        
        --
        -- AUTO_INCREMENT de la tabla `macollo`
        --
        ALTER TABLE `macollo`
          MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
        
        --
        -- AUTO_INCREMENT de la tabla `tipo_de_ligula`
        --
        ALTER TABLE `tipo_de_ligula`
          MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
        
        --
        -- AUTO_INCREMENT de la tabla `tipo_vegetativo`
        --
        ALTER TABLE `tipo_vegetativo`
          MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
        COMMIT;
        
        /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
        /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
        /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
        ")
                
        or die(print_r($dbh->errorInfo(), true));
        
        echo "Se cargaron los datos </br> <a href='../index.php'>Ir al inicio</a>";

    } catch (PDOException $e) {
        die("DB ERROR: ". $e->getMessage());
    }

?>



