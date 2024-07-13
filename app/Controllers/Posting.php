<?php

namespace App\Controllers;

use App\Models\AmbilModel;
use CodeIgniter\Exceptions\AlertError;

class Posting extends BaseController
{
    protected $postModel;
    protected $ambilModel;


    function __construct()
    {
        $this->postModel = new \App\Models\PostModel();
        $this->ambilModel = new \App\Models\AmbilModel();
    }

    public function index()
    {
        // $detail  = $this->ambilModel->detail();

        $arr_post = $this->postModel
            ->like('id_posting')
            ->get();

        $data_terbaru = $this->ambilModel->data_baru();


        $data_view = [
            // 'detail' => $detail
            'data' => $arr_post->getResult(),
            'data_terbaru' => $data_terbaru,

        ];

        return view('admin/dashboard', $data_view);
    }


    public function postingan()
    {
        // $detail  = $this->ambilModel->detail();

        $arr_post = $this->postModel
            ->like('id_posting')
            ->get();

        $cari = $this->ambilModel->cari();

        $data_view = [
            // 'detail' => $detail
            'data' => $arr_post->getResultArray(),
            'cari' => $cari
        ];


        return view('admin/postingan', $data_view);
    }

    public function form()
    {
        $admin = $this->ambilModel->admin();
        $produk = $this->ambilModel->produk();
        $data_terbaru = $this->ambilModel->data_baru();

        // print_r($admin);

        $data = [
            'admin' => $admin,
            'produk' => $produk,
            'data_terbaru' => $data_terbaru
        ];

        return view('admin/form', $data);
    }

    public function form_proses()
    {
        $kode_posting = $this->request->getPost('kode_posting');
        $id_admin = $this->request->getPost('id_admin');
        $id_produk = $this->request->getPost('id_produk');
        $visual_produk = $this->request->getPost('visual_produk');
        $cover_latter = $this->request->getPost('cover_latter');
        $desk_produk = $this->request->getPost('desk_produk');
        $tanggal = $this->request->getPost('tanggal');
        $jam = $this->request->getPost('jam');

        // $id_posting_pk = $this->request->getPost('id_posting_pk');         
        $data = [
            'kode_posting' => $kode_posting,
            'id_admin' => $id_admin,
            'id_produk' => $id_produk,
            'visual_produk' => $visual_produk,
            'cover_latter' => $cover_latter,
            'desk_produk' => $desk_produk,
            'tanggal' => $tanggal,
            'jam' => $jam
        ];

        // dd($data);
        $this->postModel->insert($data);

        // return view('/posting');

        return redirect()->to(base_url('/posting'));
        // try {
        //     $simpan = $this->ambilModel->simpanData($data);
        //     if ($simpan) {
        //         echo "<script>alert('Data berhasil disimpan'); window.location='".base_url('/dasboard')."'; </script>";
        //     } else {
        //         echo "<script>alert('Data gagal disimpan'); window.location='".base_url('/dasboard')."'; </script>";
        //     }
        // } catch (\Exception $e) {
        //     exit($e->getMessage());
        // }

    }

    public function update(){
        $admin = $this->ambilModel->admin();
        $produk = $this->ambilModel->produk();
        // $modelPost = ;
        

        $default_posting = $this->request->getGet('kode_posting');
        $default_admin = $this->request->getGet('id_admin');
        $default_produk = $this->request->getGet('id_produk');
        $default_latter = $this->request->getGet('cover_latter');
        $default_deskripsi = $this->request->getGet('desk_produk');
        $default_visual = $this->request->getGet('visual_produk');
        $default_tanggal = $this->request->getGet('tanggal');
        $id = $this->request->getGet('id_posting');
        $default_jam = $this->request->getGet('jam');

        $dataSelect = $this->postModel->where('kode_posting', $default_posting)->first();

        $data_edit = [
            // 'id_posting' => $id,
            'kode_posting' => $default_posting,
            'id_admin' => $default_admin,
            'id_produk' => $default_produk,
            'cover_latter' => $default_latter,
            'desk_produk' => $default_deskripsi,
            'visual_produk' => $default_visual,
            'tanggal' => $default_tanggal,
            'jam' => $default_jam,
        ];

        $this->postModel->update($dataSelect['id_posting'],$data_edit);
        $data_terbaru = $this->ambilModel->data_baru();

        $post = [
            'data' => $this->postModel->query('SELECT * FROM `post`')->getResult(),
            'admin' => $admin,
            'data_terbaru' => $data_terbaru,
            'produk' => $produk,
        ];
        return view('admin/dashboard', $post);
    }

    public function prosesEdit(){
        $admin = $this->ambilModel->admin();
        $produk = $this->ambilModel->produk();
        $modelPost = $this->postModel->query('SELECT * FROM `post`')->getResult();
         $id = $this->request->getGet('id_posting');
        

        $data_post_edit = $this->postModel
            ->where('id_posting', $id)
            ->first();

        $default_posting = $data_post_edit['kode_posting'];
        $default_admin = $data_post_edit['id_admin'];
        $default_produk = $data_post_edit['id_produk'];
        $default_latter = $data_post_edit['cover_latter'];
        $default_deskripsi = $data_post_edit['desk_produk'];
        $default_visual = $data_post_edit['visual_produk'];
        $default_tanggal = $data_post_edit['tanggal'];
        $default_jam = $data_post_edit['jam'];
        $data_terbaru = $this->ambilModel->data_baru();
        $post = [
            'admin' => $admin,
            'produk' => $produk,
            'kode_posting' => $default_posting,
            'id_admin' => $default_admin,
            'id_produk' => $default_produk,
            'cover_latter' => $default_latter,
            'desk_produk' => $default_deskripsi,
            'visual_produk' => $default_visual,
            'tanggal' => $default_tanggal,
            'jam' => $default_jam,
            'id' => $id,
            'data_terbaru' => $data_terbaru,

        ];

        // return view('admin/dashboard', $data);

        return view('admin/edit', $post);
    }

    public function del()
    {
        $id = $this->request->getGet('id_posting');

        $this->postModel->delete($id);
        return redirect()->to(base_url('posting'));
    }
}
