<?php

namespace App\Controllers;

use App\Controller;

class SandboxController extends Controller {

    public function sandbox(): void {

        $this->render('sandbox');
    }
}