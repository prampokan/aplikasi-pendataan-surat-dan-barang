<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\ModelBarang;

class BarangController extends BaseController
{
    public function barang_create()
    {
        helper(['form']);

        if ($this->request->getMethod() === 'post') {
            // Validasi data yang diinputkan
            $rules = [
                'no_resi' => 'required',
                'nm_barang' => 'required',
                'id_penerima' => 'required',
                'status' => 'required',
            ];

            if (!$this->validate($rules)) {
                // Jika validasi gagal, tampilkan pesan error
                $validation = \Config\Services::validation();
                return redirect()->back()->withInput()->with('errors', $validation->getErrors());
            }

            // Mengambil file gambar yang diunggah
            $foto1 = $this->request->getFile('foto1');
            $foto2 = $this->request->getFile('foto2');
            $foto3 = $this->request->getFile('foto3');

            // Pindahkan file gambar yang diunggah ke folder tujuan
            if ($foto1->isValid() && !$foto1->hasMoved()) {
                $foto1->move(ROOTPATH . 'public/img', $foto1->getRandomName());
            }

            if ($foto2->isValid() && !$foto2->hasMoved()) {
                $foto2->move(ROOTPATH . 'public/img', $foto2->getRandomName());
            }

            if ($foto3->isValid() && !$foto3->hasMoved()) {
                $foto3->move(ROOTPATH . 'public/img', $foto3->getRandomName());
            }

            // Simpan data barang ke database
            $model = new ModelBarang();

            $data = [
                'no_resi' => $this->request->getPost('no_resi'),
                'nm_barang' => $this->request->getPost('nm_barang'),
                'id_penerima' => $this->request->getPost('id_penerima'),
                'status' => $this->request->getPost('status'),
                'catatan' => $this->request->getPost('catatan'),
                'foto1' => $foto1->getName(),
                'foto2' => $foto2->getName(),
                'foto3' => $foto3->getName(),
            ];

            $model->insert($data);

            // Redirect ke halaman sukses atau halaman lain yang diinginkan
            return redirect()->to('/success_page')->with('success', 'Data barang berhasil ditambahkan.');
        }

        // Jika method bukan POST, tampilkan halaman form input barang
        return view('barang_create');
    }

    public function barang_read()
    {
        $barangModel = new ModelBarang();
        $data['data_barang'] = $barangModel->findAll();
        $data['foto1'] = $barangModel->findAll();
        echo view("barang_read", $data);
    }
}
