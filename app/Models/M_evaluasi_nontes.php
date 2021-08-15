<?php

namespace App\Models;

use CodeIgniter\Model;

class M_evaluasi_nontes extends Model
{
    
    protected $table = 'evaluasi_non_tes_tbl';
    protected $primaryKey = 'id_evaluasi_non_tes';

    protected $allowedFields = ['id_evaluasi_non_tes','judul_evaluasi','author_evaluasi','status_evaluasi','jenis_evaluasi'];

    public function getSemuaEvaluasiNonTesByAnUser($author_evaluasi){
        return $this->db->table($this->table)->where('author_evaluasi',$author_evaluasi)->get()->getResultArray();
    }

    public function getSemuaEvaluasiNonTesYgBlmDiisiMurid($idMurid){
        $whereQuery = 'id_evaluasi_non_tes NOT IN (SELECT id_evaluasi_non_tes FROM jawaban_evaluasi_non_tes_tbl WHERE id_murid=\''.$idMurid.'\') AND status_evaluasi=\'aktif\'';

        return $this->db->table($this->table)
        ->where($whereQuery)
        ->join('user_tbl','evaluasi_non_tes_tbl.author_evaluasi=user_tbl.user_id')->get()->getResultArray();
    }

    public function getDetailEvaluasiNonTesEvalID($idEvaluasiTes){
        return $this->db->table($this->table)
        ->join('user_tbl','evaluasi_non_tes_tbl.author_evaluasi = user_tbl.user_id')->where('id_evaluasi_non_tes',$idEvaluasiTes)
        ->get()->getRowArray();
    }

    public function getSemuaEvaluasiNonTesYgSdhDitutupByAnUser($author_evaluasi){
        return $this->db->table($this->table)->where(['author_evaluasi'=>$author_evaluasi,'status_evaluasi'=>'nonaktif'])->get()->getResultArray();
    }
}