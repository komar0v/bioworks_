<?php

namespace App\Models;

use CodeIgniter\Model;

class M_evaluasiTesPG extends Model
{
    
    protected $table = 'soal_pg_evaluasi_tes_tbl';
    protected $primaryKey = 'id_soal';

    protected $allowedFields = ['id_evaluasi_tes','id_soal','pertanyaan_soal','opsi_a','opsi_b','opsi_c','opsi_d','opsi_e','jawaban_benar'];

    public function getSoalPGEvaluasiByEvaluasiID($idEvaluasiTes){
        return $this->db->table($this->table)->where('id_evaluasi_tes',$idEvaluasiTes)->get()->getResultArray();
    }

    public function getDetailSoalBySoalID_withLoggedGuru($idSoal,$author_evaluasi){
        return $this->db->table($this->table)->join('evaluasi_tes_tbl','evaluasi_tes_tbl.id_evaluasi_tes=soal_pg_evaluasi_tes_tbl.id_evaluasi_tes')
        ->where(['id_soal'=>$idSoal,'author_evaluasi'=>$author_evaluasi])->get()->getRowArray();
    }

    public function getBanyakSoalPG($idEvaluasiTes){
        return $this->db->table($this->table)->where('id_evaluasi_tes',$idEvaluasiTes)->countAllResults();
    }

    public function getDetailSoalEvaluasiTes($idEvaluasiTes){
        return $this->db->table($this->table)->select('judul_evaluasi')->join('evaluasi_tes_tbl','evaluasi_tes_tbl.id_evaluasi_tes=soal_pg_evaluasi_tes_tbl.id_evaluasi_tes')
        ->where('evaluasi_tes_tbl.id_evaluasi_tes',$idEvaluasiTes)->get()->getRowArray();
    }

    public function getSoalByEvaluasiTesID($id_evaluasi_tes){
        return $this->db->table($this->table)->where('id_evaluasi_tes',$id_evaluasi_tes)->get()->getResultArray();
    }

    public function getKunciJawabanTesID($id_evaluasi_tes){
        return $this->db->table($this->table)->select('id_soal,jawaban_benar')->where('id_evaluasi_tes',$id_evaluasi_tes)->get()->getResultArray();
    }

}