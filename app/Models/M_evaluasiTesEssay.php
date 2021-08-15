<?php

namespace App\Models;

use CodeIgniter\Model;

class M_evaluasiTesEssay extends Model
{
    
    protected $table = 'soal_essay_evaluasi_tes_tbl';
    protected $primaryKey = 'id_soal';

    protected $allowedFields = ['id_evaluasi_tes','id_soal','pertanyaan_soal','jawaban_benar'];

    public function getSoalEssayEvaluasiByEvaluasiID($idEvaluasiTes){
        return $this->db->table($this->table)->where('id_evaluasi_tes',$idEvaluasiTes)->get()->getResultArray();
    }

    public function getDetailSoalBySoalID_withLoggedGuru($idSoal,$author_evaluasi){
        return $this->db->table($this->table)->join('evaluasi_tes_tbl','evaluasi_tes_tbl.id_evaluasi_tes=soal_essay_evaluasi_tes_tbl.id_evaluasi_tes')
        ->where(['id_soal'=>$idSoal,'author_evaluasi'=>$author_evaluasi])->get()->getRowArray();
    }

    public function getBanyakSoalEssay($idEvaluasiTes){
        return $this->db->table($this->table)->where('id_evaluasi_tes',$idEvaluasiTes)->countAllResults();
    }

    public function getSoalByEvaluasiTesID($id_evaluasi_tes){
        return $this->db->table($this->table)->where('id_evaluasi_tes',$id_evaluasi_tes)->get()->getResultArray();
    }

}