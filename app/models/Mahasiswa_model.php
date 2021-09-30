<?php

class Mahasiswa_model {
    private $dbh;   // database handler
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', 'root');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    // private $mhs = [
    //     [
    //         "nama" => "Fahri Arliansyah",
    //         "nrp" => "193040011",
    //         "email" => "193040011.fahri@unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ]
    // ];

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmmt->fetchAll(PDO::FETCH_ASSOC);
    }

} 