<?php


namespace App\Controller;
use App\Core\Controller;
class AuthController extends Controller
{
    public function login()
    {
        $this->view('login');
    }

    public function register()
    {
        $this->view('signUp');
    }
}
