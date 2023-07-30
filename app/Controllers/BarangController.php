<?php

namespace App\Controllers;

use App\Models\ModelBarang;

class BarangController extends BaseController
{
    public function barang_create()
    {
        $barangModel = new ModelBarang();
        $errorMessages = [];

        if ($this->request->getMethod() == 'post') {
            $no_resi = $this->request->getPost('no_resi');
            $nm_barang = $this->request->getPost('nm_barang');
            $id_penerima = $this->request->getPost('id_penerima');
            $status = $this->request->getPost('status');
            $catatan = $this->request->getPost('catatan');
            $foto1 = $this->request->getFile('foto1');
            $foto2 = $this->request->getFile('foto2');
            $foto3 = $this->request->getFile('foto3');

            // if (empty($nm_barang) || empty($id_penerima) || empty($status) || empty($foto1)) {
            //     $errorMessages[] = "Kolom harus diisi.";
            // }

            if (empty($errorMessages)) {
                $dataBarang = [
                    'no_resi' => $no_resi,
                    'nm_barang' => $nm_barang,
                    'id_penerima' => $id_penerima,
                    'status' => $status,
                    'catatan' => $catatan,
                    'foto1' => $foto1,
                    'foto2' => $foto2,
                    'foto3' => $foto3,
                ];

                $barangModel->save($dataBarang);
            }
        }

        return view("barang_create", ['errorMessages' => $errorMessages]);
    }

    public function barang_read()
    {
        $barangModel = new ModelBarang();
        $data['data_barang'] = $barangModel->findAll();
        echo view("barang_read", $data);
    }
}
