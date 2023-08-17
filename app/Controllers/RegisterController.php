<?php

namespace App\Controllers;

class RegisterController extends BaseController
{
    public function index()
    {
        $ModelRegister = new \App\Models\ModelRegister();
        
        return view('register_page');
    }
}