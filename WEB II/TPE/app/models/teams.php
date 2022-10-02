<?php

class TeamModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_torneos;charset=utf8', 'root', '');
    }

    /**
     * Devuelve la lista de tareas completa.
     */
    public function getAllTeams() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM equipos");
        $query->execute();

        // 3. obtengo los resultados
        $teams = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $teams;
    }

    /**
     * Inserta una equipo en la base de datos.
     */
    public function insertTeam($nombre, $asociacion, $region) {
        $query = $this->db->prepare("INSERT INTO equipos (nombre, asociacion, region) VALUES (?, ?, ?)");
        $query->execute([$nombre, $asociacion, $region]);

        return $this->db->lastInsertId();
    }


    /**
     * Elimina una tarea dado su id.
     */
    function deleteTeamById($id) {
        $query = $this->db->prepare('DELETE FROM equipos WHERE id = ?');
        $query->execute([$id]);
    }

}

