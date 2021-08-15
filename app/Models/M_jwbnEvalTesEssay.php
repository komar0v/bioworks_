<?php

namespace App\Models;

use CodeIgniter\Model;

class M_jwbnEvalTesEssay extends Model
{
    
    protected $table = 'jawaban_evaluasi_tes_essay_murid_tbl';
    protected $primaryKey = 'id_jawaban';

    protected $allowedFields = ['id_jawaban','id_evaluasi_tes','id_soal','id_murid','jawaban_murid'];

    public function getSoalEssay_sdhDikerjakankah($id_evaluasi_tes,$id_murid){
        $isSoalPernahDikerjakan = $this->db->table($this->table)->where(['id_evaluasi_tes'=>$id_evaluasi_tes,'id_murid'=>$id_murid])
        ->countAllResults();

        if($isSoalPernahDikerjakan>0){
            return 'y';
        }else{
            return 'n';
        }
    }

    public function getSoalEssay_JwbnEssayMurid($id_evaluasi_tes,$id_murid){
        return $this->db->table('soal_essay_evaluasi_tes_tbl')->join($this->table,'jawaban_evaluasi_tes_essay_murid_tbl.id_soal = soal_essay_evaluasi_tes_tbl.id_soal')
        ->where(['soal_essay_evaluasi_tes_tbl.id_evaluasi_tes'=>$id_evaluasi_tes,'id_murid'=>$id_murid])->get()->getResultArray();

    }
}