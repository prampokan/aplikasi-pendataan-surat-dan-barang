<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['title'] = "Dashboard";
        return view('dashboard_view', ['data' => $data]);
    }
}
