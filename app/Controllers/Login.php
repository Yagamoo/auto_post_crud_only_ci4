<?php

namespace App\Controllers;

use App\Models\AmbilModel;
use CodeIgniter\Exceptions\AlertError;
use Config\App;

class Login extends BaseController
{
    protected $session;
    protected $adminModel;

    function __construct()
    {
        $this->adminModel = new \App\Models\AdminModel();
        $this->session = \Config\Services::session();
    }


    public function index()
    {
        if ($this->session->get('LoggedUserData')) {
            return redirect()->to(base_url('posting'));
        } else {
            $data_temp = $this->session->getFlashdata('msg');

            if ($data_temp != null && $data_temp != '') {
                $error_msg = $data_temp;
            } else {
                $error_msg = "";
            }

            $data_view = [
                'error_msg' => $error_msg
            ];
        }

        return view('admin/login', $data_view);
    }

    public function proses_login()
    {
        $username = $this->request->getPost('username');
        $pass = $this->request->getPost('password');
        $validasi = $this->adminModel
            ->where('username', $username)
            ->where('password', $pass)
            ->first();
        if ($validasi == null) {
            $pesan = 'Kesalahan : Data pengguna tidak ada';
            $this->session->setFlashdata('msg', $pesan);
            return redirect()->to(base_url('login'));
        } else {
            $userdata = [
                'nama' => $validasi['nama'],
                'username' => $validasi['username'],
                'id_login' => $validasi['id_login'],
            ];
            $this->session->set("LoggedUserData", $userdata);
            $data_update = ['last_login' => date("Y-m-d H:i:s")];
            $update_login = $this->adminModel->update(
                $validasi['id_login'],
                $data_update
            );
            return redirect()->to(base_url('posting'));
        }
    }
}
