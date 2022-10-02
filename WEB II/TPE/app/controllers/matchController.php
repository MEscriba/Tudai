<?php
require_once './app/models/admin.php';
require_once './app/models/teams.php';
require_once './app/models/umpires.php';
require_once './app/views/matchview.php';

class MatchController {
    private $model_umpire;
    private $model_team;
    private $model_admin;
    private $view;

    public function __construct() {
        $this->model_umpire = new UmpireModel();
        $this->model_team = new TeamModel();
        $this->model_admin = new AdminModel();
        $this->view = new MatchView();
    }

    public function showUmpires() {
        $umpires = $this->model_umpire->getAllUmpires();
        $this->view->showUmpires($umpires);
    }

    
    function addUmpire() {
        // TODO: validar entrada de datos

        $nombre = $_POST['nombre'];
        $asociacion = $_POST['asociacion'];
        $region = $_POST['region'];

        $id = $this->model_umpire->insertUmpire($nombre, $asociacion, $region);

        header("Location: " . BASE_URL); 
    }
   
    function deleteUmpire($id) {
        $this->model_umpire->deleteUmpireById($id);
        header("Location: " . BASE_URL);
    }

    
}

