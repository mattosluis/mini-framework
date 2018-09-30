<?php

class FuncionarioController extends Controller {

    public function __construct() {

        $this->isPermited();
        if($_SESSION['usuario'] != 'funcionario'){
            $this->redirectToRoute('401');
        }
    }

    public function index(){

        echo 'Funcionario Page';
    }

    public function create(){
        $this->loadView('funcionario/create');
    }

    public function insert(){

        $req = $_POST;
        if($req['insert_funcionario']){
            $usuario = new Usuario();
            $usuario->setEmail($req['email']);
            $usuario->setSenha($req['senha']);
            $usuario->setTipo("funcionario");

            $usuarioRepo = new UsuarioRepository();
            $usuarioRepo->insert($usuario);
            $usuario = $usuarioRepo->findLastInserted();

            $funcionario = new Funcionario();
            $funcionario->setNome($req['nome']);
            $funcionario->setUsuarioId($usuario->getUsuarioid());

            $funcionarioRepo = new FuncionarioRepository();
            $funcionarioRepo->insert($funcionario);

            $this->redirectToRoute();
        }
    }

}