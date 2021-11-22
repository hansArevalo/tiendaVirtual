<?php

require_once("Config/Config.php"); // llamamos al archivo config 

$url= !empty($_GET['url'])?$_GET['url']:'home/home'; // estamos creando para pasar los metodos por url y usar controladores

$arrUrl= explode("/",$url);//vamos a convertir la url en array -> explode pide dos datos 1. delimitador y 2. cadena

$controller=$arrUrl[0];
$method =$arrUrl[0];
$params="";

if (!empty($arrUrl[1])) {
    if ($arrUrl[1]!="") {
        $method=$arrUrl[1];
    }
}
if(!empty($arrUrl[2])){
    if ($arrUrl[2]!="") {
        for ($i=2; $i <count($arrUrl) ; $i++) { 
            $params .= $arrUrl[$i].',';
        }
        $params= trim($params,',');// el metodo trim elimina el ultimo caracter de un string 
        
    }
}

require_once("Libreries/Core/Autoload.php");
require_once("Libreries/Core/Load.php")


//echo "<br>";
//echo "controlador: ".$controller." - metodo: ", $method;


?>
