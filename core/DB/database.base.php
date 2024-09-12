<?php

namespace Core\DB;

use Exception;
use PDO;

abstract class Database
{
    private $config;

    public function __construct() {
        $this->config = (include_once "../../settings/database.config.php");
    }

    public function init(){
        $use = $this->config['use'];
        $params = [
            'host' => $this->config['instances'][$use]['hostnane'],
            'dbname' => $this->config['instances'][$use]['database'],
            'username' => $this->config['instances'][$use]['username'],
            'password' => $this->config['instances'][$use]['hostnane'],
            'charset' => $this->config['instances'][$use]['hostnane']
        ];

        // $a = new PDO();
        try{


        }catch(Exception){

        }
    }

}
