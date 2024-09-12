<?php

    function rootPath():string{
        return $_SERVER['DOCUMENT_ROOT'].SEPARATOR;
    }
    
    function env(string $key, $default=''){
        $key = strtoupper(trim($key));
        // buscamos si existe en las variables globales
        if (isset($_ENV[$key]) ){
            return $_ENV[$key];
        }

        // buscamos en caso de que exista como variable del sistema
        if(isset($_SERVER[$key])){
            return $_SERVER[$key];
        }

        // en caso de que no exista, retornamos el por defecto del usuario establecido
        return $default;
    }

    function existEnvFile(string $path = ".env"): bool {
        return file_exists($path);
    }

    function loadEnv($path){
        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach($lines as $line){
            $line = trim($line);
            if(empty($line)){
                continue;
            }

            list($key, $value) = explode('=', $line, 2);
            $key = strtoupper(trim($key));
            $value = trim($value);


            putenv("$key=$value");
            $_ENV[$key] = $value;
            $_SERVER[$key] = $value;
        }
    }

    function init(){
        $root = rootPath();
        if(existEnvFile("{$root}.env")){
            loadEnv("{$root}.env");
        }
    }
?>