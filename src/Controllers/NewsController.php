<?php

namespace App\Controllers;

use App\Controller;
use App\Models\News;

class NewsController extends Controller {

    public function news(): void {
        $allNews = new News();

        $news = $allNews->query("SELECT news.*, users.username FROM news JOIN users ON news.user_id = users.id");

        $this->render('news', ['news' => $news]);
    }

    public function single($id): void {
        $allNews = new News();

        $single = $allNews->query("SELECT news.*, users.username FROM news JOIN users ON news.user_id = users.id WHERE news.id = ?", [$id]);

        $this->render('single', ['single' => $single]);
    }
}

