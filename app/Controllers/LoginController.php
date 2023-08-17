<?php

namespace App\Controllers;

use App\Models\ModelPengguna;

class LoginController extends BaseController
{
    public function login()
    {
        $errorMessages = [];
        $data['title'] = "Login";

        if ($this->request->getMethod() == 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            if (empty($username) || empty($password)) {
                $errorMessages[] = "Username dan password harus diisi.";
            } else {
                $penggunaModel = new ModelPengguna();
                $pengguna = $penggunaModel->where('username', $username)->first();

                if ($pengguna && password_verify($password, $pengguna['password'])) {
                    // Login berhasil, set session atau lakukan tindakan lainnya
                    session()->set('user_id', $pengguna['id']);
                    session()->set('user_name', $pengguna['name']);
                    session()->setFlashdata('success', 'Login berhasil!');

                    // Ganti "DashboardController" dengan controller yang sesuai untuk redirect setelah login berhasil
                    return redirect()->to('/Dashboard/index');
                } else {
                    $errorMessages[] = "Username atau password salah.";
                }
            }
        }

        echo view("login_page", ['errorMessages' => $errorMessages, 'data' => $data]);
    }

    public function logout()
    {
        // Lakukan tindakan sesuai kebutuhan saat logout
        session()->remove('user_id');
        return redirect()->to('/LoginController/login');
    }
}
