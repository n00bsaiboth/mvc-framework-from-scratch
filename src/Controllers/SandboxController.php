<?php

namespace App\Controllers;

use App\Controller;
use App\Helpers\HelperFunctions;
use App\Models\User;


class SandboxController extends Controller {

    public function sandbox(): void {

        $this->render('sandbox');
    }

    public function show($id): void {
        $user = new User();

        $single = $user->query("SELECT * FROM users WHERE id = ?", [$id]);

        $this->render('show', ['single' => $single]);
    }

    public function form(): void {

        $this->render('form');
    }

    public function post(): void {
        $data = $_POST;
        echo "parameter send and received: {$data['feedback']}";
        //var_dump($data);
    }

    public function test(): void {
        // HelperFunctions::redirect("/sandbox");

        $address = "jussi.jokinen@openinnovations.io";
        $email = HelperFunctions::validateEmail($address);

        $domain = "https://openinnovations.io";
        $url = HelperFunctions::validateUrl($domain);

        $this->render('sandbox', ['email' => $email, 'url' => $url]);
    }
}