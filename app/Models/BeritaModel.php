<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'berita';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['judul', 'slug', 'penulis', 'isi', 'sampul'];

    public function getBerita($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
    public function getCountBerita()
    {
        $builder = $this->db->table('berita');
        return $builder->countAllResults();
    }
    public function getcountUser()
    {
        $builder = $this->db->table('user');
        return $builder->countAllResults();
    }
}
