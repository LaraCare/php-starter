<?php
namespace App\Controllers;

class ApiController {
    public function hello() {
        header('Content-Type: application/json');
        echo json_encode(['message' => 'Hello from your custom PHP API!']);
    }
}
