<?php

require_once __DIR__ . '/../core/Database.php';

class User extends Database {

    public function login($username, $password) {
        $password = md5($password);
        $sql = "SELECT * FROM users 
                WHERE username='$username' 
                AND password='$password'";
        return $this->conn->query($sql)->fetch_assoc();
    }
}
