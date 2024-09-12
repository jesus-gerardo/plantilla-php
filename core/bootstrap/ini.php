<?php
    function env(string $key, $default=''){
        if ( isset($_ENV[$key]) ){
            return $_ENV[$key];
        }
        return $default;
    }
?>