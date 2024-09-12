<?php
    namespace Core\Controller;
    
    class BaseController {
        public $routeView;

        public function __construct()
        {
            $this->routeView = rootPath().SEPARATOR.'resource'.SEPARATOR.'view';
        }

        public function view(string $view, $params= []){
            $directory =  explode(".",$view);
            
            $path = '';
            foreach($directory as $dir){
                $path .= SEPARATOR.$dir;
            }

            $path .= ".php";
            include_once $this->routeView.$path;
        }
    }
?>