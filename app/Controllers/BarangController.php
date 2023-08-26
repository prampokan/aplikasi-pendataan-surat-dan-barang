<?php

namespace App\Controllers;

use CodeIgniter\Controller;

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

            if (empty($nm_barang) || empty($id_penerima) || empty($status) || empty($foto1)) {
                $errorMessages[] = "Kolom harus diisi.";
            }

            if (empty($errorMessages)) {
                if ($foto1->isValid() && !$foto1->hasMoved()) {
                    $foto1->move(ROOTPATH . 'public/img', $foto1->getRandomName());
                }

                if ($foto2->isValid() && !$foto2->hasMoved()) {
                    $foto2->move(ROOTPATH . 'public/img', $foto2->getRandomName());
                }

                if ($foto3->isValid() && !$foto3->hasMoved()) {
                    $foto3->move(ROOTPATH . 'public/img', $foto3->getRandomName());
                }
                $data_barang = [
                    'no_resi' => $no_resi,
                    'nm_barang' => $nm_barang,
                    'id_penerima' => $id_penerima,
                    'status' => $status,
                    'catatan' => $catatan,
                    'foto1' => $foto1->getName(),
                    'foto2' => $foto2->getName(),
                    'foto3' => $foto3->getName(),
                ];

                $barangModel->save($data_barang);

                session()->setFlashdata('success', 'Tambah data berhasil!');

                return redirect()->to('/BarangController/barang_read');
            }
        }

        $data['title'] = "Data Barang";
        return view("barang_create", ['errorMessages' => $errorMessages, 'data' => $data]);
    }


    public function barang_read()
    {
        $barangModel = new ModelBarang();
        $data = [
            'title' => "Data Barang",
            'data_barang' => $barangModel->getBarangWithKaryawan(),
        ];
        echo view("barang_read", ['data' => $data]);
    }

    public function barang_update($id)
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

            if (empty($nm_barang) || empty($id_penerima) || empty($status) || empty($foto1)) {
                $errorMessages[] = "Kolom harus diisi.";
            }

            if (empty($errorMessages)) {
                if ($foto1->isValid() && !$foto1->hasMoved()) {
                    $foto1->move(ROOTPATH . 'public/img', $foto1->getRandomName());
                }

                if ($foto2->isValid() && !$foto2->hasMoved()) {
                    $foto2->move(ROOTPATH . 'public/img', $foto2->getRandomName());
                }

                if ($foto3->isValid() && !$foto3->hasMoved()) {
                    $foto3->move(ROOTPATH . 'public/img', $foto3->getRandomName());
                }
                $data_barang = [
                    'id' => $id,
                    'no_resi' => $no_resi,
                    'nm_barang' => $nm_barang,
                    'id_penerima' => $id_penerima,
                    'status' => $status,
                    'catatan' => $catatan,
                    'foto1' => $foto1->getName(),
                    'foto2' => $foto2->getName(),
                    'foto3' => $foto3->getName(),
                ];

                $barangModel->update($id, $data_barang);

                session()->setFlashdata('success', 'Update data berhasil!');

                return redirect()->to('/BarangController/barang_read');
            }
        }
        $data['title'] = "Data Barang";
        $data_barang = $barangModel->find($id);
        return view("barang_update", ['errorMessages' => $errorMessages, 'data_barang' => $data_barang, 'data' => $data]);
    }

    public function barang_delete($id)
    {
        $data['title'] = "Data Barang";
        $barangModel = new ModelBarang();
        $barangModel->delete($id);
        echo view("barang_create", ['data' => $data]);
        return redirect()->to('/BarangController/barang_read')->with('success', 'Data barang berhasil dihapus.');
    }

    public function barang_detail($id)
    {
        $barangModel = new ModelBarang();
        $data_barang = $barangModel->getBarangWithKaryawanById($id);

        if (!$data_barang) {
            return redirect()->to('/BarangController/barang_read')->with('error', 'Data barang tidak ditemukan.');
        }

        $data['title'] = "Detail Barang";
        return view("barang_detail", ['data_barang' => $data_barang, 'data' => $data]);
    }

    public function barang_status($id)
    {
        $barangModel = new ModelBarang();
        $errorMessages = [];

        if ($this->request->getMethod() == 'post') {
            $status = $this->request->getPost('status');

            if (empty($status)) {
                $errorMessages[] = "Kolom harus diisi.";
            }

            if (empty($errorMessages)) {
                $data_barang = [
                    'id' => $id,
                    'status' => $status,
                ];

                $barangModel->update($id, $data_barang);

                session()->setFlashdata('success', 'Update data berhasil!');

                return redirect()->to('/BarangController/barang_read');
            }
        }
        $data['title'] = "Data Barang";
        $data_barang = $barangModel->find($id);
        return view("barang_status", ['errorMessages' => $errorMessages, 'data_barang' => $data_barang, 'data' => $data]);
    }
}
