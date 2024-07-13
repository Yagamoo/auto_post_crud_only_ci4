<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'id_posting';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';

    protected $allowedFields = ['id_posting', 'kode_posting', 'id_admin', 'id_produk', 'cover_latter', 'desk_produk', 'tanggal', 'jam'];

    // protected $validationRules = [
    //     // 'id_posting' => 'string',
    //     'kode_posting' => 'required|is_unique[post.kode_posting]'
    // ];

    // protected $validationMessages = [
    //     'kode_posting' => [
    //         'is_unique' => 'Maaf, Kode Posting {value} sudah ada'
    //     ],
    // ];
}
