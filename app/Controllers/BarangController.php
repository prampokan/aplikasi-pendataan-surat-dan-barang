<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\ModelBarang;
use App\Models\ModelKaryawan;

class BarangController extends BaseController
{
    public function barang_create()
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
        $barangModel = new ModelBarang();
        $karyawanModel = new ModelKaryawan();
        $errorMessages = [];

        if ($this->request->getMethod() == 'post') {
            $no_resi = $this->request->getPost('no_resi');
            $nm_barang = $this->request->getPost('nm_barang');
            $id_penerima = $this->request->getPost('id_penerima');
            $status = $this->request->getPost('status');
            $catatan = $this->request->getPost('catatan');
            $waktu = date('Y-m-d H:i:s');
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
                    'waktu' => $waktu,
                    'foto1' => $foto1->getName(),
                    'foto2' => $foto2->getName(),
                    'foto3' => $foto3->getName(),
                ];

                $barangModel->save($data_barang);

                session()->setFlashdata('success', 'Tambah data berhasil!');

                return redirect()->to('barang_read');
            }
        }
        $data['data_karyawan'] = $karyawanModel->findAll();
        $data['title'] = "Data Barang";
        return view("barang_create", ['errorMessages' => $errorMessages, 'data' => $data]);
    }


    public function barang_read()
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
        $barangModel = new ModelBarang();

        $data = [
            'title' => "Data Barang",
            'data_barang' => $barangModel->getBarangWithKaryawan(),
        ];

        echo view("barang_read", ['data' => $data]);
    }

    public function barang_update($id)
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
        $barangModel = new ModelBarang();
        $karyawanModel = new ModelKaryawan();
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

                return redirect()->to('barang_read');
            }
        }
        $data['title'] = "Data Barang";
        $data['data_karyawan'] = $karyawanModel->findAll();
        $data_barang = $barangModel->getBarangWithKaryawanById($id);
        return view("barang_update", ['errorMessages' => $errorMessages, 'data_barang' => $data_barang, 'data' => $data]);
    }

    public function barang_delete($id)
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
        $karyawanModel = new ModelKaryawan();
        $data['title'] = "Data Barang";
        $data['data_karyawan'] = $karyawanModel->findAll();
        $barangModel = new ModelBarang();
        $barangModel->delete($id);
        echo view("barang_create", ['data' => $data]);
        return redirect()->to('barang_read')->with('success', 'Data barang berhasil dihapus.');
    }

    public function barang_detail($id)
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
        $barangModel = new ModelBarang();
        $data_barang = $barangModel->getBarangWithKaryawanById($id);

        if (!$data_barang) {
            return redirect()->to('barang_read')->with('error', 'Data barang tidak ditemukan.');
        }

        $data['title'] = "Detail Barang";
        return view("barang_detail", ['data_barang' => $data_barang, 'data' => $data]);
    }

    public function barang_status($id)
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
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

                return redirect()->to('barang_read');
            }
        }
        $data['title'] = "Data Barang";
        $data_barang = $barangModel->find($id);
        return view("barang_read", ['errorMessages' => $errorMessages, 'data_barang' => $data_barang, 'data' => $data]);
    }

    public function selectDataKaryawan()
    {
        $karyawanModel = new ModelKaryawan();
        if ($this->request->isAJAX()) {

            $caridata = $this->request->getGet('search');
            $dataKaryawan = $karyawanModel->LIKE('username', $caridata)->get();

            if ($dataKaryawan->getNumRows() > 0) {

                $list = [];
                $key = 0;
                foreach ($dataKaryawan->getResultArray() as $row) :

                    $list[$key]['id'] = $row['id'];
                    $list[$key]['text'] = $row['username'];
                    $key++;

                endforeach;

                echo json_encode($list);
            }
        }
    }
}
