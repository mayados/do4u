<?php

namespace Controllers;

abstract class Controller{
        public function __construct()
        {
            
        }
        protected function render($view, $data = []){
            
            return [
                "view"  => "view/".$view,
                "data"  => $data
            ];
        }
}