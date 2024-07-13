<?php
namespace App\Models;
use CodeIgniter\Model;
class AdminModel extends Model
{
 protected $table = 'login';
 protected $primaryKey = 'id_login';
 protected $useAutoIncrement = true;
 protected $returnType = 'array';
 protected $allowedFields = ['username', 'password', 'nama', 'last_login'];
 
 protected $validationRules = [
//  'id_login' => 'string',
 'username' => 'required|is_unique[login.username,id_admin,{id_user}]',
 ];
 protected $validationMessages = [
 'username' => [
 'is_unique' => 'Maaf, Username {value} Sudah Ada',
 ],
 ];
}