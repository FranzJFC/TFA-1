<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('templates/header', ['title' => 'POS Home', 'active' => 'home'])
            . view('pages/home')
            . view('templates/footer');
    }

    public function about(): string
    {
        return view('templates/header', ['title' => 'About POS', 'active' => 'about'])
            . view('pages/about')
            . view('templates/footer');
    }
}
