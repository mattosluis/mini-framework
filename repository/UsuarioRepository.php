<?php

class UsuarioRepository extends Repository {

    public function insert($usuario){

        $stmt = $this->db->prepare("INSERT INTO usuario (email, senha, tipo) VALUES (:email, :senha, :tipo)");
        $stmt->bindValue(":email", $usuario->getEmail());
        $stmt->bindValue(":senha", md5($usuario->getSenha()));
        $stmt->bindValue(":tipo", $usuario->getTipo());
        $stmt->execute();
    }

    public function findLastInserted(){
        $stmt = $this->db->prepare("SELECT usuarioid FROM usuario ORDER BY usuarioid DESC LIMIT 1");
        $stmt->setFetchMode(PDO::FETCH_CLASS, "Usuario");
        $stmt->execute();
        return $stmt->fetch();
    }
}