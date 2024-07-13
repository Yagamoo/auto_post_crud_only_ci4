<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class AmbilModel
{
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function admin()
    {
        $builder = $this->db->table('admin');
        $builder->select('id_admin, kode_admin, nama_admin');
        $data = $builder->get()->getResultArray();
        return $data;
    }

    public function produk()
    {
        $builder = $this->db->table('produk');
        $builder->select('id_produk, kode_produk, nama_produk');
        $data = $builder->get()->getResultArray();
        return $data;
    }

    public function detail()
    {
        $sql = "SELECT * FROM post WHERE 1";
        $query = $this->db->query($sql);
        $data = $query->getResultArray();

        return $data;
    }

    public function update()
    {
        $builder = $this->db->table('post');
        $builder->select('id_produk, nama_produk');
        $data = $builder->get()->getResultArray();
        return $data;


        // $sql = "UPDATE * FROM post WHERE 1";

        // $query = $this->db->query($sql);

        // $data = $query->getResultArray();

        // return $data;

    }

    public function cari()
    {
        $builder = $this->db->table('post');
        $builder->like('status', 'waiting');
        $data = $builder->get()->getResultArray();
        return $data;
    }

    public function ubah($post, $id)
    {
        $query = $this->db->table('post')->update($post, array('id_posting' => $id));
        return $query;


        // $builder = $this->db->table('post');
        // $builder->update('id_posting', $id);
        // return $builder->update($post);
    }

    public function data_baru()
    {
        $sql = "SELECT * FROM `post` ORDER BY id_posting DESC LIMIT 1";
        $query = $this->db->query($sql);
        $data = $query->getResultArray();
        return $data;
    }
}
