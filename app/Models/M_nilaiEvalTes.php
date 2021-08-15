<?php

namespace App\Models;

use CodeIgniter\Model;

class M_nilaiEvalTes extends Model
{
    
    protected $table = 'nilai_evaluasi_tes_murid';
    protected $primaryKey = 'id_nilai_evaltes';

    protected $allowedFields = ['id_nilai_evaltes','id_evaluasi_tes','id_murid','nilai_pg','nilai_essay'];

    public function getNilaiMuridbyEvalID($id_evaluasi_tes){
        return $this->db->table($this->table)
        ->join('user_tbl','nilai_evaluasi_tes_murid.id_murid=user_tbl.user_id')->where('id_evaluasi_tes',$id_evaluasi_tes)->get()->getResultArray();
    }

    public function getNilaiEvalMurid_byUserID($id_murid){
        return $this->db->table($this->table)->where('id_murid',$id_murid)->get()->getRowArray();
    }

    public function updateNilaiEssayMurid($id_murid,$nilai_essay){
        return $this->db->table($this->table)->where('id_murid',$id_murid)->update(['nilai_essay'=>$nilai_essay]);
    }

    public function getDetailEvaluasiTesYgSdhDiKerjakanMurid($idMurid){
        return $this->db->table($this->table)
        ->join('evaluasi_tes_tbl','evaluasi_tes_tbl.id_evaluasi_tes = nilai_evaluasi_tes_murid.id_evaluasi_tes')
        ->join('user_tbl','evaluasi_tes_tbl.author_evaluasi = user_tbl.user_id')->where('id_murid',$idMurid)
        ->get()->getResultArray();
    }

    public function getNilaiEvaluasiTesMuridByEvalID($idMurid,$idEvaluasi){
        return $this->db->table($this->table)
        ->join('evaluasi_tes_tbl','evaluasi_tes_tbl.id_evaluasi_tes = nilai_evaluasi_tes_murid.id_evaluasi_tes')
        ->where(['id_murid'=>$idMurid,'nilai_evaluasi_tes_murid.id_evaluasi_tes'=>$idEvaluasi])->get()->getRowArray();
    }

}