<?php

namespace App\Controllers;

use App\Models\M_materi;
use App\Models\M_evaluasi;
use App\Models\M_nilaiEvalTes;
use App\Models\M_evaluasi_nontes;
use App\Models\M_nilaiEvalNonTes;

class Murid extends BaseController
{
    
    public function __construct()
    {
		helper('form');
        $this->access_Level = 'murid';
        $this->Materi_ = new M_materi();
        $this->EvaluasiTes_ = new M_evaluasi();
        $this->EvaluasiNonTes_ = new M_evaluasi_nontes();
        $this->NilaiEvaluasiTes_ = new M_nilaiEvalTes();
        $this->NilaiEvaluasiNonTes_ = new M_nilaiEvalNonTes();
    }

	public function index()
	{
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            return view('halaman_murid/murid_home');
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
		
	}

    public function materi($idMateri)
	{
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            $dataMateri = ['detailMateri'=>$this->Materi_->get_detail_materi($idMateri)];
            return view('halaman_murid/murid_bacaMateri', $dataMateri);
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
		
	}

    public function semua_materi()
	{
        if((session()->get('level_akunPengguna') == $this->access_Level)){

            // dd($this->Materi_->getSemuaMateriBesertaPenulis());
            $dataMateri = ['list_materi'=>$this->Materi_->getSemuaMateriBesertaPenulis()];
            return view('halaman_murid/murid_lihatMateri', $dataMateri);
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
		
	}

    public function semua_evaluasi_tes(){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            $idMurid = session()->get('id_akunPengguna');
            $dataEvaluasiTes = ['list_evaluasiTes'=>$this->EvaluasiTes_->getSemuaEvaluasiTesYgBlmDikerjakanMurid($idMurid)];
            // dd($dataEvaluasiTes);
            return view('halaman_murid/murid_lihatEvaluasiTes', $dataEvaluasiTes);
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    public function semua_evaluasi_non_tes(){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            $idMurid = session()->get('id_akunPengguna');
            $dataEvaluasiNonTes = ['list_evaluasiNonTes'=>$this->EvaluasiNonTes_->getSemuaEvaluasiNonTesYgBlmDiisiMurid($idMurid)];
            // dd($dataEvaluasiNonTes);
            return view('halaman_murid/murid_lihatEvaluasiNonTes', $dataEvaluasiNonTes);
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    public function hasil_evaluasi_tes($idEvaluasi=null){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            $idMurid = session()->get('id_akunPengguna');

            if($idEvaluasi!=null){
                $detailHasilEvaluasiTes = [
                    'detailEvaluasi'=>$this->EvaluasiTes_->getDetailEvaluasiEvalID($idEvaluasi),
                    'detailHasilEvalTes'=>$this->NilaiEvaluasiTes_->getNilaiEvaluasiTesMuridByEvalID($idMurid,$idEvaluasi),
                ];

                // dd($detailHasilEvaluasiTes);
                return view('halaman_murid/murid_detailHasilEvaluasiTes', $detailHasilEvaluasiTes);

            }else{
                $dataEvaluasiTes = [
                    'list_evaluasiTes'=>$this->NilaiEvaluasiTes_->getDetailEvaluasiTesYgSdhDiKerjakanMurid($idMurid),
                ];
                // dd($dataEvaluasiTes);
                return view('halaman_murid/murid_lihatHasilEvaluasiTes', $dataEvaluasiTes);
            }
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    public function hasil_evaluasi_non_tes(){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            $idMurid = session()->get('id_akunPengguna');

            $dataEvaluasiNonTes = [
                'list_evaluasiNonTes'=>$this->NilaiEvaluasiNonTes_->getDetailSemuaEvaluasiNonTesYgSdhDiisiMurid($idMurid),
            ];
            // dd($dataEvaluasiNonTes);
            return view('halaman_murid/murid_lihatHasilEvaluasiNonTes',$dataEvaluasiNonTes);
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    
}
