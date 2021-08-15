<?php

namespace App\Controllers\Evaluasi_;
use App\Controllers\BaseController;

use App\Models\M_guru;
use App\Models\M_user;
use App\Models\M_murid;
use App\Models\M_materi;
use App\Models\M_evaluasi;
use App\Models\M_evaluasiTesPG;
use App\Models\M_evaluasiTesEssay;
use App\Models\M_jwbnEvalTesPG;
use App\Models\M_jwbnEvalTesEssay;
use App\Models\M_nilaiEvalTes;

class DetailEvaluasiTes extends BaseController{
    
    public function __construct()
    {
		helper('form');
        $this->GURU_access_Level = 'guru';
        $this->MURID_access_Level = 'murid';
        $this->Guru_ = new M_guru();
        $this->User_ = new M_user();
        $this->Murid_ = new M_murid();
        $this->Materi_ = new M_materi();
        $this->Evaluasi_ = new M_evaluasi();
        $this->NilaiEvalTes_ = new M_nilaiEvalTes();
        $this->EvaluasiTesPG_ = new M_evaluasiTesPG();
        $this->EvaluasiTesEssay_ = new M_evaluasiTesEssay();
        $this->JwbnEvaluasiTesPG_ = new M_jwbnEvalTesPG();
        $this->JwbnEvaluasiTesEssay_ = new M_jwbnEvalTesEssay();
    }

	public function index()
	{
		return redirect()->to(base_url('Credentials'));
	}

    public function pilgan($idEvaluasi, $idMurid){
        if(($idEvaluasi!=null) && (session()->get('level_akunPengguna') == $this->GURU_access_Level)){
            $data = [
                'detailEvaluasi' => $this->Evaluasi_->find($idEvaluasi),
                'detailMurid'=>$this->Murid_->get_detail_murid($idMurid),
                'nilaiEvalMurid'=>$this->NilaiEvalTes_->getNilaiEvaluasiTesMuridByEvalID($idMurid,$idEvaluasi),
                'listSoal_jwbn_murid'=>$this->JwbnEvaluasiTesPG_->getSoalPG_JwbnPGMurid($idEvaluasi,$idMurid)
            ];
            // dd($data);
            return view('halaman_guru/lembar_jawaban_murid/guru_periksaJawabanPG',$data);
        }else{
            return redirect()->to(base_url('Credentials'));
        }
    }

    public function essay($idEvaluasi, $idMurid){
        if(($idEvaluasi!=null) && (session()->get('level_akunPengguna') == $this->GURU_access_Level)){
            $data = [
                'detailEvaluasi' => $this->Evaluasi_->find($idEvaluasi),
                'detailMurid'=>$this->Murid_->get_detail_murid($idMurid),
                'nilaiEvalMurid'=>$this->NilaiEvalTes_->getNilaiEvaluasiTesMuridByEvalID($idMurid,$idEvaluasi),
                'listSoal_jwbn_murid'=>$this->JwbnEvaluasiTesEssay_->getSoalEssay_JwbnEssayMurid($idEvaluasi,$idMurid)
            ];
            // dd($data);
            session()->setFlashdata('halaman_periksa_essay','TRUE');
            return view('halaman_guru/lembar_jawaban_murid/guru_periksaJawabanEssay',$data);
        }else{
            return redirect()->to(base_url('Credentials'));
        }
    }
}