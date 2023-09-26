<?php 

define("_VALID_PHP", true);


$url = str_replace('/', '-', $_SERVER['REQUEST_URI']);
$end = explode('/', $_SERVER['PHP_SELF']);
$arq = end($end);

$url_current="https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$uri = $url_current;

$config['email'] = "gerencia@gore.med.br";
$config['telefone'] = "";
$config['endereco'] = "";
//$config['whatsapp'] = "https://wa.me/5581998650809?text=Ol%C3%A1!";  
$config['whatsapp'] = "https://api.whatsapp.com/send?phone=5581998650809";
//$config['whatsapp'] = "https://api.whatsapp.com/send?phone=558181013050";

$config['facebook'] = "https://www.facebook.com/";
$config['instagram'] = "https://instagram.com/";
$config['twitter'] = "";
$config['youtube'] = "https://www.youtube.com/";


$config['description'] = "#";
$config['keywords'] = "#";

?>