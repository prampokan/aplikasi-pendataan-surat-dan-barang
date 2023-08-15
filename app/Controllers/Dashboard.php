<?php

namespace App\Controllers;

use App\Models\ModelBarang;
use App\Models\ModelPengguna;

class Dashboard extends BaseController
{
    public function index()
    {
        $penggunaModel = new ModelPengguna();
        $barangModel = new ModelBarang();
        $data = [
            'title' => "Dashboard",
            'total_pengguna' => $penggunaModel->countTotalPengguna(),
            'total_barang' => $barangModel->countTotalBarang(),
            'data_barang' => $barangModel->findAll()
        ];
        return view('dashboard_view', ['data' => $data]);
    }
}
