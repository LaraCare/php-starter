<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Repositories\UserRepository;

class HomeController extends Controller {
    public function index()
    {
        $repo = new UserRepository();
        $users = $repo->all();
        $this->view('home', ['users' => $users]);
    }
}
