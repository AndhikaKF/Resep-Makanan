<?php
require_once "models/ResepModel.php";

class ResepController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function index() {
        $model = new ResepModel($this->db);
        $reseps = $model->getAllNama();
        include "views/resep_list.php";
    }
}
