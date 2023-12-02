<?php

namespace App\Controllers;

use App\Models\ModelPengguna;

use CodeIgniter\HTTP\IncomingRequest;

/**
 * @property IncomingRequest $request
 */

class PenggunaController extends BaseController
{
    public function pengguna_create()
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
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

                return redirect()->to('pengguna_read');
            }
        }

        echo view("pengguna_create", ['errorMessages' => $errorMessages, 'data' => $data]);
    }

    public function pengguna_read()
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
        $penggunaModel = new ModelPengguna();
        $data = [
            'title' => "Data Pengguna",
            'data_pengguna' => $penggunaModel->paginate(10),
            'pager' => $penggunaModel->pager,
        ];
        echo view("pengguna_read", ['data' => $data]);
    }

    public function pengguna_update($id)
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
        $penggunaModel = new ModelPengguna();
        $errorMessages = [];
        $data['title'] = "Data Pengguna";

        if ($this->request->getMethod() == 'post') {
            $name = $this->request->getPost('name');
            $username = $this->request->getPost('username');
            $email = $this->request->getPost('email');

            if (empty($name) || empty($username) || empty($email) || empty($password)) {
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

                return redirect()->to('pengguna_read');
            }
        }

        $data_pengguna = $penggunaModel->find($id);
        return view("pengguna_update", ['errorMessages' => $errorMessages, 'data_pengguna' => $data_pengguna, 'data' => $data]);
    }

    public function pengguna_delete($id)
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/');
        }
        $data['title'] = "Data Pengguna";
        $penggunaModel = new ModelPengguna();
        $penggunaModel->delete($id);
        echo view("pengguna_create", ['data' => $data]);
        return redirect()->to('pengguna_read')->with('success', 'Data pengguna berhasil dihapus.');
    }

    public function pengguna_password($id)
    {
        $errorMessages = [];
        $data['title'] = "Data Pengguna";

        if ($this->request->getMethod() == 'post') {
            $oldPassword = $this->request->getPost('old_password');
            $newPassword = $this->request->getPost('new_password');
            $confirmPassword = $this->request->getPost('confirm_password');

            if (empty($oldPassword) || empty($newPassword) || empty($confirmPassword)) {
                $errorMessages[] = "Semua field harus diisi.";
            } else {
                // Assuming you have a user ID to identify the user
                $userModel = new ModelPengguna();
                $user = $userModel->find($id);

                if ($user && password_verify($oldPassword, $user['password'])) {
                    // Password lama cocok, selanjutnya validasi password baru
                    if ($newPassword === $confirmPassword) {
                        // Hash password baru dan simpan ke database
                        $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                        $userModel->update($id, ['password' => $hashedNewPassword]);

                        session()->setFlashdata('success', 'Password berhasil diubah');
                        return redirect()->to('pengguna_read');
                    } else {
                        $errorMessages[] = "Password baru dan konfirmasi password tidak cocok.";
                    }
                } else {
                    // Password lama tidak cocok
                    $errorMessages[] = "Password lama tidak sesuai.";
                }
            }
        }

        echo view("pengguna_password", ['errorMessages' => $errorMessages, 'data' => $data]);
    }
}
