<?php
$controlador = ucwords($controlador);
$controladorArchivo = "Controllers/" . $controlador . ".php";
if (file_exists($controladorArchivo)) {
  
    
    require_once($controladorArchivo);
    
    $controlador = new $controlador();
    
    if(method_exists($controlador, $metodo)){
        $controlador -> {$metodo}($params);
    
    }else {
        require_once('Controllers/Errores.php');
    }

}else {
    require_once('Controllers/Errores.php');

}