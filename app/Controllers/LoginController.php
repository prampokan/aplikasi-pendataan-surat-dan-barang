<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function index()
    {
        $ModelAdmin = new \App\Models\ModelAdmin();
        $login = $this->request->getPost('login');
        if($login){
            $admin_username = $this->request->getPost('admin_username');
            $admin_password = $this->request->getPost('admin_password');
            
            if($admin_username == '' or $admin_password == ''){
                $err ="Masukkan Username dan Password";
            }

            if($err) {
                
                session()->setFlashdata('error',$err);
                return redirect()->to("loginController");
            }
        }
        return view('login_page');
    }
}
