<?php
/**
 * Funcion para conectar a la base de datos
 */
 class Conection {
    private $user ;
    private $host;
    private $pass ;
    private $db;

    public function __construct()
    {
        $this->user = "root";
        $this->host = "127.0.0.1";
        $this->pass = "";
        $this->db = "tienda";
    }

    public function getConnection()
    {
        $link = mysqli_connect( $this->host, $this->user, $this->pass, $this->db);
        return $link;
    }
 };

 ?>
