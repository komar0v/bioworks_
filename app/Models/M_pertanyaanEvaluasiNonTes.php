<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pertanyaanEvaluasiNonTes extends Model
{
    
    protected $table = 'pertanyaan_evaluasi_non_tes_tbl';
    protected $primaryKey = 'id_pertanyaan';

    protected $allowedFields = ['id_evaluasi_non_tes','id_pertanyaan','pertanyaan'];
    
    public function getPertanyaanByEvaluasiNonTesID($idEvalNonTes){
        return $this->db->table($this->table)->where('id_evaluasi_non_tes',$idEvalNonTes)->get()->getResultArray();
    }

    public function getDetailPertanyaanByID_withLoggedGuru($id_pertanyaan,$author_evaluasi){
        return $this->db->table($this->table)->join('evaluasi_non_tes_tbl','evaluasi_non_tes_tbl.id_evaluasi_non_tes=pertanyaan_evaluasi_non_tes_tbl.id_evaluasi_non_tes')
        ->where(['id_pertanyaan'=>$id_pertanyaan,'author_evaluasi'=>$author_evaluasi])->get()->getRowArray();
    }
}