<?php

namespace App\Controllers\Evaluasi_;
use App\Controllers\BaseController;

use App\Models\M_guru;
use App\Models\M_user;
use App\Models\M_murid;
use App\Models\M_materi;
use App\Models\M_evaluasi_nontes;
use App\Models\M_nilaiEvalNonTes;
use App\Models\M_jwbanEvalNonTes;
use App\Models\M_pertanyaanEvaluasiNonTes;

class EvaluasiNonTes extends BaseController
{
    public function __construct()
    {
		helper('form');
        $this->GURU_access_Level = 'guru';
        $this->MURID_access_Level = 'murid';
        $this->Guru_ = new M_guru();
        $this->User_ = new M_user();
        $this->Murid_ = new M_murid();
        $this->Materi_ = new M_materi();
        $this->EvaluasiNonTes_ = new M_evaluasi_nontes();
        $this->NilaiEvalNonTes_ = new M_nilaiEvalNonTes();
        $this->JwbnEvaluasiNonTes_ = new M_jwbanEvalNonTes();
        $this->PertanyaanEvalNonTes_ = new M_pertanyaanEvaluasiNonTes();
    }

	public function index()
	{
		return redirect()->to(base_url('Credentials'));
	}

    public function e($idPertanyaan){
        $detailPertanyaan = $this->PertanyaanEvalNonTes_->getDetailPertanyaanByID_withLoggedGuru($idPertanyaan,session()->get('id_akunPengguna'));
        if(($detailPertanyaan!=null) && ($idPertanyaan!=null) && (session()->get('level_akunPengguna') == $this->GURU_access_Level) && ($detailPertanyaan['author_evaluasi']==session()->get('id_akunPengguna')) ){
            $data=[
                'detail_pertanyaan'=>$detailPertanyaan,
            ];
            // dd($data);
            return view('halaman_guru/guru_editEvalPertanyaanNonTes',$data);
        }else{
            return redirect()->to(base_url('Guru/evaluasi_tes'));
        }
    }

    public function i($idEvaluasiNonTesNonTes)
	{   helper('text');
        $detailEvaluasiNonTes = $this->EvaluasiNonTes_->find($idEvaluasiNonTesNonTes);
        
        if(($idEvaluasiNonTesNonTes!=null) && (session()->get('level_akunPengguna') == $this->GURU_access_Level) && ($detailEvaluasiNonTes['author_evaluasi']==session()->get('id_akunPengguna')) ){
            $data=[
                'detail_evaluasiNonTes'=>$detailEvaluasiNonTes,
                'list_pertanyaanEvaluasiNonTes'=>$this->PertanyaanEvalNonTes_->getPertanyaanByEvaluasiNonTesID($idEvaluasiNonTesNonTes),
            ];
            // dd($data);
            return view('halaman_guru/guru_kelolaPertanyaanEvaluasiNonTes',$data);
        }else{
            return redirect()->to(base_url('Guru/evaluasi_non_tes'));
        }
		
	}

    public function pertanyaan_baru($idEvaluasiNonTesNonTes){
        if(($idEvaluasiNonTesNonTes!=null) && (session()->get('level_akunPengguna') == $this->GURU_access_Level) ){

            $data=[
                'detail_evaluasiNonTes'=>$this->EvaluasiNonTes_->find($idEvaluasiNonTesNonTes),
            ];

            // dd($data);

            return view('halaman_guru/guru_buatEvalPertanyaanNonTes',$data);
        }else{
            return redirect()->to(base_url('Guru/evaluasi_non_tes'));
        }
    }

    
    public function pengisian($idEvaluasiNonTesNonTes){
        if(($idEvaluasiNonTesNonTes!=null) && (session()->get('level_akunPengguna') == $this->MURID_access_Level) ){

            $data=[
                'detail_evaluasiNonTes'=>$this->EvaluasiNonTes_->getDetailEvaluasiNonTesEvalID($idEvaluasiNonTesNonTes),
                'listPertanyaan_evalNonTes'=>$this->PertanyaanEvalNonTes_->getPertanyaanByEvaluasiNonTesID($idEvaluasiNonTesNonTes),
            ];

            // dd($data);

            return view('halaman_murid/murid_pertanyaanEvalNonTes',$data);
        }else{
            return redirect()->to(base_url('Credentials'));
        }
    }

    //------------------------------------- BACKEND HANDLING

    public function api_simpan_pertanyaan(){
        helper('text');
		$idPertanyaan = random_string('alnum', 11);

        $id_evaluasi_nontes=$this->request->getPost('evalnt_id');

        if(($id_evaluasi_nontes!=null) && (session()->get('level_akunPengguna') == $this->GURU_access_Level) ){

            $dataPertanyaan=[
                'id_evaluasi_non_tes'=>$id_evaluasi_nontes,
                'id_pertanyaan'=>$idPertanyaan,
                'pertanyaan'=>$this->request->getPost('pertanyaan_evalnontes'),
            ];
            $this->PertanyaanEvalNonTes_->insert($dataPertanyaan);
            session()->setFlashdata('notif', 'toastr.success("Pertanyaan berhasil disimpan", "Berhasil!");');
            return redirect()->to(base_url('Evaluasi_/EvaluasiNonTes/i/'.$id_evaluasi_nontes));
        }else{
            return redirect()->to(base_url('Guru/evaluasi_non_tes'));
        }
    }

    public function api_update_pertanyaan(){
        $id_evaluasi_nontes=$this->request->getPost('evalnt_id');
        $idPertanyaan=$this->request->getPost('pertanyaan_id');

        if(($id_evaluasi_nontes!=null) && (session()->get('level_akunPengguna') == $this->GURU_access_Level) ){

            $dataPertanyaan=[
                'pertanyaan'=>$this->request->getPost('pertanyaan_evalnontes'),
            ];
            $this->PertanyaanEvalNonTes_->update($idPertanyaan,$dataPertanyaan);
            session()->setFlashdata('notif', 'toastr.success("Pertanyaan berhasil disimpan", "Berhasil!");');
            return redirect()->to(base_url('Evaluasi_/EvaluasiNonTes/i/'.$id_evaluasi_nontes));
        }else{
            return redirect()->to(base_url('Guru/evaluasi_non_tes'));
        }
    }

    public function proses_jawaban_evalnontes(){
        $idEvaluasiNonTes = $this->request->getPost('idEvalNonTes');
        if(($idEvaluasiNonTes!=null) && (session()->get('level_akunPengguna') == $this->MURID_access_Level)){

            $jawabanMurid = $this->request->getPost('jawaban');

            $idMurid = session()->get('id_akunPengguna');
            
            $dataJawaban=[
                'id_evaluasi_tes'=>$idEvaluasiNonTes,
                'id_murid'=>$idMurid,
                'jawaban_murid'=>$jawabanMurid,
            ];

            $listpertanyaan = $this->PertanyaanEvalNonTes_->getPertanyaanByEvaluasiNonTesID($idEvaluasiNonTes);
            
            $nilaiSkala=0;
            $jumlahSoal=0;
            foreach($listpertanyaan as $pertanyaan){

                helper('text');
		        $idJawaban = random_string('alnum', 12);
                // echo $idJawaban.'-';
                $dataJawabanMurid_toDB = [
                    'id_evaluasi_non_tes'=>$idEvaluasiNonTes,
                    'id_murid'=>$idMurid,
                    'id_jawaban'=>$idJawaban,
                    'id_pertanyaan' => $pertanyaan['id_pertanyaan'],
                    'jawaban_skala'=>$jawabanMurid[$pertanyaan['id_pertanyaan']]
                ];

                $this->JwbnEvaluasiNonTes_->insert($dataJawabanMurid_toDB);
                
                $nilaiSkala=$nilaiSkala+$jawabanMurid[$pertanyaan['id_pertanyaan']];
                $jumlahSoal++;
            }


            $nilaiAkhir = $nilaiSkala/$jumlahSoal;
            // dd($nilaiAkhir);
            $idNilaiEvalNonTes= random_string('alnum', 9);
            $hasilEvaluasiPG=[
                'id_nilai_evalnontes'=>'hnt'.$idNilaiEvalNonTes,
                'id_evaluasi_non_tes'=>$idEvaluasiNonTes,
                'id_murid'=>$idMurid,
                'nilai_akhir'=>$nilaiAkhir
            ];
            
            $this->NilaiEvalNonTes_->insert($hasilEvaluasiPG);

            // echo '200';
			session()->setFlashdata('notif','toastr.success("Evaluasi Non Tes sudah diisi", "Sudah diisi!");');
            return redirect()->to(base_url('Murid/semua_evaluasi_non_tes'));
        }else{
            return redirect()->to(base_url('Credentials'));
        }
    }
}