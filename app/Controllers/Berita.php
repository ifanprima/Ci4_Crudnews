<?php

namespace App\Controllers;

use App\Models\BeritaModel;

new \App\Models\BeritaModel;


class Berita extends BaseController
{
    protected $beritaModel;

    public function __construct()
    {

        $this->beritaModel = new BeritaModel();
    }

    public function index()
    {
        //$berita = $this->beritaModel->findAll();

        $data = [
            'title' => 'Daftar Berita',
            'berita' => $this->beritaModel->getBerita()
        ];


        return view('konten/dashboard', $data);
    }
    public function detail($slug)
    {

        $data = [
            'title' => 'Detail Berita',
            'berita' => $this->beritaModel->getBerita($slug)
        ];

        //berita gk ada
        if (empty($data['berita'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul Berita' . $slug . 'Tidak ditemukan');
        }

        return view('konten/detail', $data);
    }
    public function create()
    {
        $data = [
            'tittle' => 'Form Tambah Berita',
            'validation' => \Config\Services::validation()
        ];

        return view('konten/create', $data);
    }
    public function save()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[berita.judul]',
                'errors' => [
                    'required' => 'Tidak boleh kosong!!',
                    'is_unique' => '{field} ini telah terdaftar, silahkan cari judul yang lain!'
                ]
            ],
            'sampul' => 'uploaded[sampul]'
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/bikin')->withInput()->with('validation', $validation);
        }
        //upload file
        $fileSampul = $this->request->getFile('sampul');
        $fileSampul->move('images');
        $namaSampul = $fileSampul->getName();

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->beritaModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'sampul' => $namaSampul,
            'penulis' => $this->request->getVar('penulis'),
            'isi' => $this->request->getVar('isi')
        ]);

        session()->setFlashdata('pesan', 'Berita berhasil ditambahkan');

        return redirect()->to('/');
    }

    public function delete($id)
    {
        $this->beritaModel->delete($id);
        session()->setFlashdata('pesan', 'Berita berhasil di hapus');
        return redirect()->to('/');
    }

    public function edit($slug)
    {
        $data = [
            'tittle' => 'Form Tambah Berita',
            'validation' => \Config\Services::validation(),
            'berita' => $this->beritaModel->getBerita($slug)
        ];

        return view('konten/edit', $data);
    }

    public function update($id)
    {
        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->beritaModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'sampul' => $this->request->getVar('sampul'),
            'penulis' => $this->request->getVar('penulis'),
            'isi' => $this->request->getVar('isi')
        ]);

        session()->setFlashdata('pesan', 'Berita berhasil diubah');

        return redirect()->to('/');
    }
    public function dboard()
    {
        $data = [
            'berita' => $this->beritaModel->getCountBerita(),
            'user' => $this->beritaModel->getcountUser(),
        ];
        return view('konten/dboard', $data);
    }
}
