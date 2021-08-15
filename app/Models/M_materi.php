<?php

namespace App\Models;

use CodeIgniter\Model;

class M_materi extends Model
{
    
    protected $table = 'materi_tbl';
    protected $primaryKey = 'id_materi';

    protected $allowedFields = ['id_materi','penulis_materi','judul_materi','konten_materi'];

    public function get_detail_materi($id_materi){
        return $this->db->table('materi_tbl')->select('id_materi,namalengkap_user,judul_materi,konten_materi')->where('id_materi',$id_materi)
        ->join('user_tbl','materi_tbl.penulis_materi=user_tbl.user_id')->get()->getRowArray();
    }

    public function getSemuaMateriBesertaPenulis(){
        return $this->db->table('materi_tbl')->select('id_materi,namalengkap_user,judul_materi')
        ->join('user_tbl','materi_tbl.penulis_materi=user_tbl.user_id')->get()->getResultArray();
    }

    public function getSemuaMateriByAnUser($penulis_materi){
        return $this->db->table($this->table)->where('penulis_materi',$penulis_materi)->get()->getResultArray();
    }

    
}