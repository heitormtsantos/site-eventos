<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'Mlkp98!@#1982');
define('DBNAME', 'manhattan');
define('PORT', 3306);

$conn = new PDO('mysql:host=' . HOST . ';port='.PORT.';dbname=' . DBNAME . ';', USER, PASS);
