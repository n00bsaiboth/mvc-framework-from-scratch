<?php

namespace App\Controllers;

use App\Controller;
use App\Models\User;

class HomeController extends Controller {

    public function index() {
        $user = new User();

        $users = $user->query("SELECT * FROM users");

        $this->render('index', ['users' => $users]);
    }
}