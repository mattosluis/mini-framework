<?php
/**
 * Created by PhpStorm.
 * User: Eliane
 * Date: 29/09/2018
 * Time: 12:18
 */

class DefaultController extends Controller {

    public function index(){

        $this->loadView('home');
    }
}