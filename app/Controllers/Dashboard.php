<?php

namespace App\Controllers;

use App\Models\ModelBarang;
use App\Models\ModelPengguna;
use App\Models\ModelKaryawan;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }

        $penggunaModel = new ModelPengguna();
        $karyawanModel = new ModelKaryawan();
        $barangModel = new ModelBarang();
        $data = [
            'title' => "Dashboard",
            'total_pengguna' => $penggunaModel->countTotalPengguna(),
            'total_karyawan' => $karyawanModel->countTotalKaryawan(),
            'total_barang' => $barangModel->countTotalBarang(),
            'data_barang' => $barangModel->getBarangWithKaryawan()
        ];
        return view('dashboard_view', ['data' => $data]);
    }
}
