<?php

namespace App\Controllers;

use App\Controller;

class AboutController extends Controller {

    public function about(): void {

        $this->render('about');
    }
}