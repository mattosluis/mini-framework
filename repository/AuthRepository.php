<?php

class AuthRepository extends Repository {

    public function checkLogin($email, $senha){

        $stmt = $this->db->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha");
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":senha", md5($senha));
        $stmt->setFetchMode(PDO::FETCH_CLASS, "Usuario");
        $stmt->execute();

        if ($stmt->rowCount() > 0){
            $usuario = $stmt->fetch();

            $_SESSION['usuario'] = $usuario->getTipo();
            return $_SESSION['usuario'];
        } else {
            return $_SESSION['usuario'] = false;
        }
    }
}