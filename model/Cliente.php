<?php

class Cliente {

    private $nome;
    private $telefone;
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
    public function getTelefone() {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getUsuarioId() {
        return $this->usuarioid;
    }

    /**
     * @param mixed
     */
    public function setUsuarioId($usuarioid) {
        $this->usuarioid = $usuarioid;
    }
}