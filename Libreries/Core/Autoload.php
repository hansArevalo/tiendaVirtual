<?php
// vamos a crear el archivo autoload para hacer mas dinamicas la llamada de las clases

    spl_autoload_register(function ($class)
    {
        if(file_exists("Libreries/".'Core/'.$class.".php")){
            require_once("Libreries/".'Core/'.$class.".php");
        }
    });


?>