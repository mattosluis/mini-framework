<?php

class Core {

    public function run(){

        $url = '/';

        if(isset($_GET['url'])){

            $url .= $_GET['url'];
        }

        $param = [];

        if(!empty($url) && $url != '/'){

            $url = explode('/', $url);
            array_shift($url);

            $currentController = ucfirst($url[0]) . "Controller";
            array_shift($url);

            if(!empty($url[0]) && isset($url[0])){

                $currentAction = $url[0];
                array_shift($url);
            } else {
                $currentAction = 'index';
            }

            if(count($url) > 0){

                $param = $url;
            }

        } else {

            $currentController = "DefaultController";
            $currentAction = "index";
        }

        if(!file_exists("controller/$currentController.php") || !method_exists($currentController, $currentAction)){

            $currentController = "NotFoundController";
            $currentAction = "index";
        }

        $c = new $currentController;

        call_user_func_array([$c, $currentAction], $param);
    }

}