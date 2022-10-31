<?php
    $config = json_decode(file_get_contents('config/config.json',true));
   
    define("BASE_URL", $config->url);
    define("HOST", $config->host);
    define("USUARIO", $config->usuario);
    define("PASSWORD", $config->password);
    define("DBNAME", $config->dbname);
    define("CHARSET", "charset=utf8");
    
