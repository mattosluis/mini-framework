<?php

class Usuario {

    private $usuarioid;
    private $email;
    private $senha;
    private $tipo;

    /**
     * @return mixed
     */
    public function getUsuarioId() {
        return $this->usuarioid;
    }

    /**
     * @param mixed $usuarioId
     */
    public function setUsuarioId($usuarioid) {
        $this->usuarioid = $usuarioid;
    }

    /**
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha() {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha) {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getTipo() {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
}