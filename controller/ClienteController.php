<?php

class ClienteController extends Controller {

    public function __construct() {

        $this->isPermited();
//        if($_SESSION['usuario'] != 'cliente'){
//            $this->redirectToRoute('401');
//        }
    }

    public function index(){
        echo 'Cliente Page';
    }
}