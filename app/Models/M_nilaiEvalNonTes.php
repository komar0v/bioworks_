<?php

namespace App\Models;

use CodeIgniter\Model;

class M_nilaiEvalNonTes extends Model
{
    
    protected $table = 'nilai_evaluasi_non_tes_murid';
    protected $primaryKey = 'id_nilai_evalnontes';

    protected $allowedFields = ['id_nilai_evalnontes','id_evaluasi_non_tes','id_murid','nilai_akhir'];

    public function getDetailSemuaEvaluasiNonTesYgSdhDiisiMurid($idMurid){
        return $this->db->table($this->table)
        ->join('evaluasi_non_tes_tbl','evaluasi_non_tes_tbl.id_evaluasi_non_tes = nilai_evaluasi_non_tes_murid.id_evaluasi_non_tes')
        ->join('user_tbl','evaluasi_non_tes_tbl.author_evaluasi = user_tbl.user_id')->where('id_murid',$idMurid)
        ->get()->getResultArray();
    }

    public function getNilaiMuridbyEvalNonTesID($id_evaluasi_non_tes){
        return $this->db->table($this->table)
        ->join('user_tbl','nilai_evaluasi_non_tes_murid.id_murid=user_tbl.user_id')
        ->where('id_evaluasi_non_tes',$id_evaluasi_non_tes)->get()->getResultArray();
    }
}