<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\ModelSurat;
use App\Models\ModelKaryawan;

class SuratController extends BaseController
{
    public function surat_create()
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
        $SuratModel = new ModelSurat();
        $errorMessages = [];

        if ($this->request->getMethod() == 'post') {
            $no_surat = $this->request->getPost('no_surat');
            $nm_surat = $this->request->getPost('nm_surat');
            $pengirim = $this->request->getPost('pengirim');
            $id_penerima = $this->request->getPost('id_penerima');
            $status = $this->request->getPost('status');
            $catatan = $this->request->getPost('catatan');
            $foto1 = $this->request->getFile('foto1');
            $foto2 = $this->request->getFile('foto2');
            $foto3 = $this->request->getFile('foto3');
            $foto4 = $this->request->getFile('foto4');
            $foto5 = $this->request->getFile('foto5');

            if (empty($nm_surat) || empty($id_penerima) || empty($foto1) || empty($pengirim)) {
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
                if ($foto4->isValid() && !$foto4->hasMoved()) {
                    $foto4->move(ROOTPATH . 'public/img', $foto4->getRandomName());
                }
                if ($foto5->isValid() && !$foto5->hasMoved()) {
                    $foto5->move(ROOTPATH . 'public/img', $foto5->getRandomName());
                }
                $data_surat = [
                    'no_surat' => $no_surat,
                    'nm_surat' => $nm_surat,
                    'pengirim' => $pengirim,
                    'id_penerima' => $id_penerima,
                    'status' => $status,
                    'catatan' => $catatan,
                    'foto1' => $foto1->getName(),
                    'foto2' => $foto2->getName(),
                    'foto3' => $foto3->getName(),
                    'foto4' => $foto4->getName(),
                    'foto5' => $foto5->getName(),
                ];

                $SuratModel->save($data_surat);

                session()->setFlashdata('success', 'Tambah data berhasil!');

                return redirect()->to('surat_read');
            }
        }

        $data['title'] = "Data surat";
        return view("surat_create", ['errorMessages' => $errorMessages, 'data' => $data]);
    }


    public function surat_read()
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
        $suratModel = new ModelSurat();
        $data = [
            'title' => "Data surat",
            'data_surat' => $suratModel->getSuratWithKaryawan(),
        ];
        echo view("surat_read", ['data' => $data]);
    }

    public function surat_update($id)
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
        $suratModel = new ModelSurat();
        $karyawanModel = new ModelKaryawan();
        $errorMessages = [];

        if ($this->request->getMethod() == 'post') {
            $no_surat = $this->request->getPost('no_surat');
            $nm_surat = $this->request->getPost('nm_surat');
            $id_penerima = $this->request->getPost('id_penerima');
            $status = $this->request->getPost('status');
            $catatan = $this->request->getPost('catatan');
            $foto1 = $this->request->getFile('foto1');
            $foto2 = $this->request->getFile('foto2');
            $foto3 = $this->request->getFile('foto3');

            if (empty($nm_surat) || empty($id_penerima) || empty($status) || empty($foto1)) {
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
                $data_surat = [
                    'id' => $id,
                    'no_surat' => $no_surat,
                    'nm_surat' => $nm_surat,
                    'id_penerima' => $id_penerima,
                    'status' => $status,
                    'catatan' => $catatan,
                    'foto1' => $foto1->getName(),
                    'foto2' => $foto2->getName(),
                    'foto3' => $foto3->getName(),
                ];

                $suratModel->update($id, $data_surat);

                session()->setFlashdata('success', 'Update data berhasil!');

                return redirect()->to('surat_read');
            }
        }
        $data['title'] = "Data surat";
        $data['data_karyawan'] = $karyawanModel->findAll();
        $data_surat = $suratModel->getSuratWithKaryawanById($id);
        return view("surat_update", ['errorMessages' => $errorMessages, 'data_surat' => $data_surat, 'data' => $data]);
    }

    public function surat_delete($id)
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
        $data['title'] = "Data Surat";
        $suratModel = new ModelSurat();
        $suratModel->delete($id);
        echo view("surat_create", ['data' => $data]);
        return redirect()->to('/SuratController/surat_read')->with('success', 'Data Surat berhasil dihapus.');
    }

    public function surat_detail($id)
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
        $suratModel = new ModelSurat();
        $data_surat = $suratModel->getSuratWithKaryawanById($id);

        if (!$data_surat) {
            return redirect()->to('surat_read')->with('error', 'Data surat tidak ditemukan.');
        }

        $data['title'] = "Detail Surat";
        return view("surat_detail", ['data_surat' => $data_surat, 'data' => $data]);
    }

    public function surat_status($id)
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
        $suratModel = new ModelSurat();
        $errorMessages = [];

        if ($this->request->getMethod() == 'post') {
            $status = $this->request->getPost('status');

            if (empty($status)) {
                $errorMessages[] = "Kolom harus diisi.";
            }

            if (empty($errorMessages)) {
                $data_surat = [
                    'id' => $id,
                    'status' => $status,
                ];

                $suratModel->update($id, $data_surat);

                session()->setFlashdata('success', 'Update data berhasil!');

                return redirect()->to('surat_read');
            }
        }
        $data['title'] = "Data Surat";
        $data_surat = $suratModel->find($id);
        return view("surat_read", ['errorMessages' => $errorMessages, 'data_surat' => $data_surat, 'data' => $data]);
    }

    public function selectDataKaryawan()
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
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
