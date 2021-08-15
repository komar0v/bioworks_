<?php

namespace App\Models;

use CodeIgniter\Model;

class M_evaluasi extends Model
{
    
    protected $table = 'evaluasi_tes_tbl';
    protected $primaryKey = 'id_evaluasi_tes';

    protected $allowedFields = ['id_evaluasi_tes','judul_evaluasi','author_evaluasi','batas_pengerjaan','status_evaluasi'];

    public function getSemuaEvaluasiByAnUser($author_evaluasi){
        return $this->db->table($this->table)->where('author_evaluasi',$author_evaluasi)->get()->getResultArray();
    }

    public function getSemuaEvaluasiYgSdhDitutupByAnUser($author_evaluasi){
        return $this->db->table($this->table)->where(['author_evaluasi'=>$author_evaluasi,'status_evaluasi'=>'nonaktif'])->get()->getResultArray();
    }

    public function getSemuaEvaluasiTesYgBlmDikerjakanMurid($id_murid){
        // AND (DATEDIFF(batas_pengerjaan,CURRENT_DATE() ) >=0)
        $whereQuery = '(id_evaluasi_tes NOT IN (SELECT id_evaluasi_tes FROM jawaban_evaluasi_tes_pg_murid_tbl WHERE id_murid=\''.$id_murid.'\') OR id_evaluasi_tes NOT IN (SELECT id_evaluasi_tes FROM jawaban_evaluasi_tes_essay_murid_tbl WHERE id_murid=\''.$id_murid.'\')) AND status_evaluasi=\'aktif\' AND DATEDIFF(batas_pengerjaan,NOW() )>=0';

        return $this->db->table($this->table)->select('id_evaluasi_tes,namalengkap_user,judul_evaluasi,batas_pengerjaan, DATEDIFF(batas_pengerjaan,NOW() ) AS sisa_hari_pengerjaan')
        ->where($whereQuery)
        ->join('user_tbl','evaluasi_tes_tbl.author_evaluasi=user_tbl.user_id')->orderBy('sisa_hari_pengerjaan','ASC')->get()->getResultArray();
    }

    public function getDetailEvaluasiEvalID($idEvaluasiTes){
        return $this->db->table($this->table)
        ->join('user_tbl','evaluasi_tes_tbl.author_evaluasi = user_tbl.user_id')->where('id_evaluasi_tes',$idEvaluasiTes)
        ->get()->getRowArray();
    }
    
}