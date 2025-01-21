<?php

namespace App\Controllers;

use App\Controller;

class ContactController extends Controller {

    public function contact(): void {

        $this->render('contact');
    }
}