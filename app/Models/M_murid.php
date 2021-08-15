<?php

namespace App\Models;

use CodeIgniter\Model;

class M_murid extends Model
{
    
    protected $table = 'murid_tbl';
    protected $primaryKey = 'user_id';

    protected $allowedFields = ['user_id','nis_murid'];

    public function get_detail_murid($user_id){
        return $this->db->table('murid_tbl')
        ->join('user_tbl','murid_tbl.user_id=user_tbl.user_id')->where('murid_tbl.user_id',$user_id)->get()->getRowArray();
    }

    public function getSemuaMurid(){
        return $this->db->table('murid_tbl')
        ->join('user_tbl','murid_tbl.user_id=user_tbl.user_id')->get()->getResultArray();
    }

    
}