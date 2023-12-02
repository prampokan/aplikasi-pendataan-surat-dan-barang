<?php

namespace App\Controllers;

use App\Models\ModelBarang;
use App\Models\ModelPengguna;
use App\Models\ModelKaryawan;
use App\Models\ModelSurat;

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
        $suratModel = new ModelSurat();

        $data = [
            'title' => "Dashboard",
            'total_pengguna' => $penggunaModel->countTotalPengguna(),
            'total_karyawan' => $karyawanModel->countTotalKaryawan(),
            'total_barang' => $barangModel->countTotalBarang(),
            'total_surat' => $suratModel->countTotalSurat(),
            'data_barang' => array_slice($barangModel->getBarangWithKaryawan(), 0, 10),
            'data_surat' => array_slice($suratModel->getSuratWithKaryawan(), 0, 10)
        ];
        return view('dashboard_view', ['data' => $data]);
    }
}
