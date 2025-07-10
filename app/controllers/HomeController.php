<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Repositories\UserRepository;
use App\Services\MailService;

class HomeController extends Controller {
    public function index()
    {
        
        $mail = new MailService();
        $mail->sendWelcomeEmail(env('USER_MAIL', 'jeryfoto@gmail.com') . "@example.com", "John");
        
        $repo = new UserRepository();
        $users = $repo->all();
        $this->view('home', [
            'message' => 'Email sent!',
            'title' => "Home Page",
            'users' => $users
        ]);
    }
}
