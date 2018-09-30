<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 30/09/2018
 * Time: 17:03
 */

class CadastroController extends Controller {

    public function index(){
        $this->loadView('cliente/create');
    }

    public function insert(){

        $req = $_POST;
        if($req['insert_cliente']){
            $usuario = new Usuario();
            $usuario->setEmail($req['email']);
            $usuario->setSenha($req['senha']);
            $usuario->setTipo("cliente");

            $usuarioRepo = new UsuarioRepository();
            $usuarioRepo->insert($usuario);
            $usuario = $usuarioRepo->findLastInserted();

            $cliente = new Cliente();
            $cliente->setNome($req['nome']);
            $cliente->setTelefone($req['telefone']);
            $cliente->setUsuarioId($usuario->getUsuarioid());

            $clienteRepo = new ClienteRepository();
            $clienteRepo->insert($cliente);

            $this->redirectToRoute();
        }
    }
}