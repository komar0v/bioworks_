<?php

namespace App\Models;

use CodeIgniter\Model;

class M_guru extends Model
{
    
    protected $table = 'guru_tbl';
    protected $primaryKey = 'user_id';

    protected $allowedFields = ['user_id','nip_guru'];

    public function get_detail_guru($user_id){
        return $this->db->table('guru_tbl')
        ->join('user_tbl','guru_tbl.user_id=user_tbl.user_id')->where('guru_tbl.user_id',$user_id)->get()->getRowArray();
    }

    public function getSemuaGuru(){
        return $this->db->table('guru_tbl')
        ->join('user_tbl','guru_tbl.user_id=user_tbl.user_id')->get()->getResultArray();
    }

    
}