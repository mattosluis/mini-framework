<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 30/09/2018
 * Time: 13:43
 */

class Funcionario {

    private $nome;
    private $usuarioid;

    /**
     * @return mixed
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome) {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getUsuarioId() {
        return $this->usuarioid;
    }

    /**
     * @param mixed $usuarioid
     */
    public function setUsuarioId($usuarioid) {
        $this->usuarioid = $usuarioid;
    }
}