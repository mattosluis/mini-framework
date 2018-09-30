<?php
/**
 * Created by PhpStorm.
 * User: Eliane
 * Date: 29/09/2018
 * Time: 12:19
 */

class Controller {

    public function loadView($view, $viewData = []){
        require 'view/base.php';
    }


    public function loadViewInTemplate($view, $viewData = []){
        extract($viewData);
        require "view/$view.php";
    }

    public function redirectToRoute($uri = null){
        header("Location:" . BASE_ULR . $uri);
    }

}