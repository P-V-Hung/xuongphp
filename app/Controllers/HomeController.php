<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(){
        parent::render('homepage.index');
    }
}