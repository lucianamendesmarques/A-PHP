<?php
session_start();
ob_start();  //limpa o buf de redcionamento



define('URL', 'http://localhost/A-PHP/');
define('URLADM', 'http://localhost/A-PHP/adm/');

define('CONTROLER', 'Home');
define('METODO', 'index');

//Credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'tcc_pdo');
