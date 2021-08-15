<?php

namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model
{
    
    protected $table = 'user_tbl';
    protected $primaryKey = 'user_id';

    protected $allowedFields = ['user_id','user_name','user_pass','user_level','namalengkap_user'];

    public function cek_akun($user_name,$user_pass){
        return $this->db->table($this->table)
        ->where(array('user_name'=>$user_name, 'user_pass'=>$user_pass))->get()->getRowArray();
    }

    public function get_detail_akun($user_id){
        return $this->db->table($this->table)
        ->where(array('user_id'=>$user_id))->get()->getRowArray();
    }

    
}