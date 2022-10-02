<?php

class UmpireModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_torneos;charset=utf8', 'root', '');
    }
    /**
     * Devuelve la lista de arbitros completa.
     */
    public function getAllUmpires() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM arbitros");
        $query->execute();

        // 3. obtengo los resultados
        $umpires = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $umpires;
    }
    /**
     * Inserta el arbitro en la base de datos.
     */
    public function insertUmpire($nombre, $asociacion, $region) {
        $query = $this->db->prepare("INSERT INTO arbitros (nombre, asociacion, region) VALUES (?, ?, ?)");
        $query->execute([$nombre, $asociacion, $region]);

        return $this->db->lastInsertId();
    }

    /**
     * Elimina el arbitro dado su id.
     */
    function deleteUmpireById($id) {
        $query = $this->db->prepare('DELETE FROM arbitros WHERE id = ?');
        $query->execute([$id]);
    }
}

