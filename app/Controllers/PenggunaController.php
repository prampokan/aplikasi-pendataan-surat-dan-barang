<?php

namespace App\Controllers;

use App\Models\ModelPengguna;

class PenggunaController extends BaseController
{
    public function pengguna_create()
    {
        $penggunaModel = new ModelPengguna();
        if ($this->request->getMethod() == 'post') {
            $dataPengguna = [
                'name' => $_POST['name'],
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ];
            $penggunaModel->save($dataPengguna);
        }
        echo view("pengguna");
    }
}
