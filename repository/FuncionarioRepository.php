<?php

class FuncionarioRepository extends Repository {

    public function insert($funcionario){

        $stmt = $this->db->prepare("INSERT INTO funcionario (nome, usuarioid) VALUES (:nome, :usuarioid)");
        $stmt->bindValue(":nome", $funcionario->getNome());
        $stmt->bindValue(":usuarioid", $funcionario->getUsuarioId());
        $stmt->execute();
    }
}