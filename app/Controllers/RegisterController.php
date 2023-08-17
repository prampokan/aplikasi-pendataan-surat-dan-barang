<?php

namespace App\Controllers;

use App\Models\ModelPengguna;

class RegisterController extends BaseController
{
    public function register()
    {
        $penggunaModel = new ModelPengguna();
        $errorMessages = [];
        $data['title'] = "Register";

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

                session()->setFlashdata('success', 'Register berhasil!');

                return redirect()->to('/LoginController/login');
            }
        }

        echo view("register_page", ['errorMessages' => $errorMessages, 'data' => $data]);
    }
}
