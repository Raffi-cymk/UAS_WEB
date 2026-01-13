<?php

class Database {
    protected $conn;

    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "", "db_uas");
        if (!$this->conn) {
            die("Database gagal konek");
        }
    }
}
