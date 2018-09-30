<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 30/09/2018
 * Time: 14:38
 */

class LoginController extends Controller {

    public function index(){
        $this->loadView('login/login');
    }

    public function login(){

        $req = $_POST;
        if ($req['login']){

            $auth = new AuthRepository();
            $usuario = $auth->checkLogin($req['email'], $req['senha']);

            if($usuario == 'funcionario'){
                $this->redirectToRoute('funcionario');
            } elseif($usuario == 'cliente'){
                $this->redirectToRoute('cliente');
            } else {
                echo 'Desculpe email ou senha incorretos';
            }

        }
    }

    public function logout(){

        $_SESSION['usuario'] = false;
        $this->redirectToRoute();
    }

}