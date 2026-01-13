<?php

require_once __DIR__ . '/../core/Database.php';

class Data extends Database {

    public function getAll() {
        return $this->conn->query("SELECT * FROM data_items");
    }

    public function get($id) {
        return $this->conn->query(
            "SELECT * FROM data_items WHERE id=$id"
        )->fetch_assoc();
    }

    public function insert($d) {
        $this->conn->query(
            "INSERT INTO data_items VALUES(
                NULL,
                '{$d['nama']}',
                '{$d['keterangan']}'
            )"
        );
    }

    public function update($d) {
        $this->conn->query(
            "UPDATE data_items 
             SET nama='{$d['nama']}',
                 keterangan='{$d['keterangan']}'
             WHERE id={$d['id']}"
        );
    }
}
