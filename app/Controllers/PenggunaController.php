<?php

namespace App\Controllers;

use App\Models\ModelPengguna;

class PenggunaController extends BaseController
{
    public function pengguna_create()
    {
        $penggunaModel = new ModelPengguna();
        $errorMessages = [];
        $data['title'] = "Data Pengguna";

        if ($this->request->getMethod() == 'post') {
            $name = $this->request->getPost('name');
            $username = $this->request->getPost('username');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            if (empty($name) || empty($username) || empty($email) || empty($password)) {
                $errorMessages[] = "Semua kolom harus diisi.";
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errorMessages[] = "Format email tidak valid.";
            }

            if (empty($errorMessages)) {
                $dataPengguna = [
                    'name' => $name,
                    'username' => $username,
                    'email' => $email,
                    'password' => password_hash($password, PASSWORD_DEFAULT)
                ];

                $penggunaModel->save($dataPengguna);

                session()->setFlashdata('success', 'Tambah data berhasil!');

                return redirect()->to('/PenggunaController/pengguna_read');
            }
        }

        echo view("pengguna_create", ['errorMessages' => $errorMessages, 'data' => $data]);
    }

    public function pengguna_read()
    {
        $penggunaModel = new ModelPengguna();
        $data = [
            'title' => "Data Pengguna",
            'data_pengguna' => $penggunaModel->findAll()
        ];
        // $data['title'] = "Data Pengguna";
        // $data['data_pengguna'] = $penggunaModel->findAll();
        echo view("pengguna_read", ['data' => $data]);
    }

    public function pengguna_update($id)
    {
        $penggunaModel = new ModelPengguna();
        $errorMessages = [];
        $data['title'] = "Data Pengguna";
        echo view("pengguna_create", $data);

        if ($this->request->getMethod() == 'post') {
            $name = $this->request->getPost('name');
            $username = $this->request->getPost('username');
            $email = $this->request->getPost('email');

            if (empty($name) || empty($username) || empty($email)) {
                $errorMessages[] = "Semua kolom harus diisi.";
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errorMessages[] = "Format email tidak valid.";
            }

            if (empty($errorMessages)) {
                $dataPengguna = [
                    'id' => $id,
                    'name' => $name,
                    'username' => $username,
                    'email' => $email,
                ];

                $penggunaModel->update($id, $dataPengguna);

                session()->setFlashdata('success', 'Update data berhasil!');

                return redirect()->to('/PenggunaController/pengguna_read');
            }
        }

        $data_pengguna = $penggunaModel->find($id);
        return view("pengguna_update", ['errorMessages' => $errorMessages, 'data_pengguna' => $data_pengguna]);
    }

    public function pengguna_delete($id)
    {
        $data['title'] = "Data Pengguna";
        echo view("pengguna_create", $data);
        $penggunaModel = new ModelPengguna();
        $penggunaModel->delete($id);
        return redirect()->to('/PenggunaController/pengguna_read')->with('success', 'Data pengguna berhasil dihapus.');
    }
}
