<?php

class ClienteRepository extends Repository {

    public function insert($cliente){

        $stmt = $this->db->prepare("INSERT INTO cliente (nome, telefone, usuarioid) VALUES (:nome, :telefone, :usuarioid)");
        $stmt->bindValue(":nome", $cliente->getNome());
        $stmt->bindValue(":telefone", $cliente->getTelefone());
        $stmt->bindValue(":usuarioid", $cliente->getUsuarioId());
        $stmt->execute();
    }
}