<?php

require_once __DIR__ . '/Controller.php';

class Router {

    public function run() {

        $url = isset($_GET['url']) ? explode('/', $_GET['url']) : [];

        $controllerName = !empty($url[0])
            ? ucfirst($url[0]) . 'Controller'
            : 'AuthController';

        $method = $url[1] ?? 'index';

        $controllerFile = __DIR__ . '/../controllers/' . $controllerName . '.php';

        if (!file_exists($controllerFile)) {
            die("Controller tidak ditemukan");
        }

        require_once $controllerFile;

        $controller = new $controllerName;

        if (!method_exists($controller, $method)) {
            die("Method tidak ditemukan");
        }

        $controller->$method();
    }
}
