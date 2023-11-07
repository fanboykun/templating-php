<?php

namespace App\Controller;

use App\Pages\Home;

class HomeController
{
    public function index()
    {
        $home_page = new Home();
        $home_page->render();
    }
}

