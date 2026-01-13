<?php
require_once __DIR__ . '/../core/Controller.php';

class DataController extends Controller {

    public function index() {
        $data = [
            'judul' => 'DATA HIDUP'
        ];

        $this->view('data/index', $data);
    }
}
