<?php
require_once __DIR__ . '/../core/Controller.php';

class AuthController extends Controller {

    public function index() {
        $this->view('auth/login');
    }

    public function login() {
        // sementara tanpa validasi, fokus UAS jalan dulu
        header("Location: /PROJECT-UAS-WEB/dashboard");
        exit;
    }

    public function logout() {
        header("Location: /PROJECT-UAS-WEB");
        exit;
    }
}
