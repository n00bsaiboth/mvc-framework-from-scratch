<?php

namespace App\Controllers;

use App\Controller;
use App\Helpers\HelperFunctions;
use App\Models\Feedback;

class HomeController extends Controller {

    public function index(): void {
        $feedback = new Feedback();

        $feedbacks = $feedback->query("SELECT * FROM feedback");

        $this->render('home', ['feedbacks' => $feedbacks]);
    }

    public function feedback(): void {
        $feedback = new Feedback();
    
        $data = $_POST;

        $data['name'] = HelperFunctions::validateString($data['name']);
        $data['email'] = HelperFunctions::validateString($data['email']);
        $data['feedback'] = HelperFunctions::validateString($data['feedback']);
        $data['date'] = date('Y-m-d H:i:s');

        if($feedback->query("INSERT INTO feedback (date, name, email, feedback) VALUES (:date, :name, :email, :feedback)", $data)) {
            HelperFunctions::redirect("/");
        }
    }
}