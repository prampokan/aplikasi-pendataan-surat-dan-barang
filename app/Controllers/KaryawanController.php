<?php

namespace App\Controllers;

use App\Models\ModelKaryawan;

class KaryawanController extends BaseController
{
    public function karyawan_create()
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
        $karyawanModel = new ModelKaryawan();
        $errorMessages = [];
        $data['title'] = "Data Karyawan";

        if ($this->request->getMethod() == 'post') {
            $username = $this->request->getPost('username');
            $email = $this->request->getPost('email');

            if (empty($username) || empty($email)) {
                $errorMessages[] = "Semua kolom harus diisi.";
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errorMessages[] = "Format email tidak valid.";
            }

            if (empty($errorMessages)) {
                $dataKaryawan = [
                    'username' => $username,
                    'email' => $email,
                ];

                $karyawanModel->save($dataKaryawan);

                session()->setFlashdata('success', 'Tambah data berhasil!');

                return redirect()->to('karyawan_read');
            }
        }

        echo view("karyawan_create", ['errorMessages' => $errorMessages, 'data' => $data]);
    }

    public function karyawan_read()
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
        $karyawanModel = new ModelKaryawan();
        $data = [
            'title' => "Data Karyawan",
            'data_karyawan' => $karyawanModel->findAll(),
        ];

        echo view("karyawan_read", ['data' => $data]);
    }

    public function karyawan_update($id)
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
        $karyawanModel = new ModelKaryawan();
        $errorMessages = [];
        $data['title'] = "Data Karyawan";

        if ($this->request->getMethod() == 'post') {
            $username = $this->request->getPost('username');
            $email = $this->request->getPost('email');

            if (empty($username) || empty($email)) {
                $errorMessages[] = "Semua kolom harus diisi.";
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errorMessages[] = "Format email tidak valid.";
            }

            if (empty($errorMessages)) {
                $dataKaryawan = [
                    'id' => $id,
                    'username' => $username,
                    'email' => $email,
                ];

                $karyawanModel->update($id, $dataKaryawan);

                session()->setFlashdata('success', 'Update data berhasil!');

                return redirect()->to('karyawan_read');
            }
        }

        $data_karyawan = $karyawanModel->find($id);
        return view("karyawan_update", ['errorMessages' => $errorMessages, 'data_karyawan' => $data_karyawan, 'data' => $data]);
    }

    public function karyawan_delete($id)
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
        $data['title'] = "Data Karyawan";
        $karyawanModel = new ModelKaryawan();
        $karyawanModel->delete($id);
        echo view("karyawan_create", ['data' => $data]);
        return redirect()->to('karyawan_read')->with('success', 'Data karyawan berhasil dihapus.');
    }
}
