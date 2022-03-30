<?php

namespace App\Controllers;

use App\Models\UserModel;
// use App\Models\AuthModel;

class User extends BaseController
{
    public function index()
    {
        return view('user/login');
    }
    public function register()
    {
        $data = [
            'validate' => \Config\Services::validation(),
        ];

        return view('user/register', $data);
    }
    public function user_registrasi()
    {
        $val = $this->validate(
            [
                'username' =>
                [
                    'rules' => 'required|is_unique[user.username]',
                    'errors' => [
                        'is_unique' => '{field} sudah terdaftar, silahkan cari yang lain!',
                        'required' => '{field} harap di isi!'
                    ]
                ],
                'name' =>
                [
                    'rules' => 'required[user.name]',
                    'errors' =>
                    [
                        'required' => '{field} harap di isi!'
                    ]
                ],
                'password' =>
                [
                    'rules' => 'required[user.password]',
                    'errors' =>
                    [
                        'required' => '{field} harap di isi!'
                    ]
                ],
            ],
        );

        if (!$val) {
            $pesanvalidasi = \Config\Services::validation();
            return redirect()->to('/register')->withInput()->with('validate', $pesanvalidasi);
        }

        $data = array(
            'username' => $this->request->getVar('username'),
            'name' => $this->request->getVar('name'),
            'password' => $this->request->getVar('password')
        );
        $model = new UserModel;
        $model->insert($data);
        session()->setFlashdata('pesan', 'Selamat akun anda telah terdaftar');
        return redirect()->to('/login');
    }
    public function auth()
    {
        $usersModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $user = $usersModel->where('username', $username)->first();

        if (empty($user)) {
            session()->setFlashdata('pesan', 'Login gagal!');
            return redirect()->to('/login');
        }
        if ($user['password'] != $password) {
            session()->setFlashdata('pesan', 'Login gagal!');
            return redirect()->to('/login');
        }
        session()->set([
            'username' => $user['username'],
            'name' => $user['name'],
            'logged_in' => true
        ]);
        return redirect()->to('/');
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
