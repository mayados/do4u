<?php

namespace Controllers;

abstract class Controller{
        /**
         * permet au contrôleur de renvoyer une vue et ses données
         * 
         * @param string $view - le chemin de la vue à afficher
         * @param array $data - le tableau contenant les données nécessaires à la vue
         * 
         * @return array tableau formaté contenant la vue et ses données
         */
        protected function render($view, $data = []){
            
            return [
                "view"  => "view/".$view,
                "data"  => $data
            ];
        }
}