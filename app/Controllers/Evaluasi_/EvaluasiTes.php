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

class EvaluasiTes extends BaseController
{
    public function __construct()
    {
		helper('form');
        helper('text');
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

    public function essay($idEvaluasi){
        if(($idEvaluasi!=null) && (session()->get('level_akunPengguna') == $this->MURID_access_Level)){
            
            $detailEvalEssay=[
                'detailEvalTesEssay'=>$this->Evaluasi_->find($idEvaluasi),
                'listSoalEssay_evalTes'=>$this->EvaluasiTesEssay_->getSoalByEvaluasiTesID($idEvaluasi),
            ];

            // dd($detailEvalEssay);

            return view('halaman_murid/murid_soalEvaluasiTesEssay',$detailEvalEssay);
        }else{
            return redirect()->to(base_url('Credentials'));
        }
    }

    public function pilgan($idEvaluasi){
        if(($idEvaluasi!=null) && (session()->get('level_akunPengguna') == $this->MURID_access_Level)){
            
            $detailEvalPG=[
                'detailEvalTesPG'=>$this->Evaluasi_->find($idEvaluasi),
                'listSoalPG_evalTes'=>$this->EvaluasiTesPG_->getSoalByEvaluasiTesID($idEvaluasi),
            ];

            // dd($detailEvalPG);

            return view('halaman_murid/murid_soalEvaluasiTesPG',$detailEvalPG);
        }else{
            return redirect()->to(base_url('Credentials'));
        }
    }

    public function detail($idEvaluasi){
        if(($idEvaluasi!=null) && (session()->get('level_akunPengguna') == $this->MURID_access_Level)){
            $detailEvaluasi = $this->Evaluasi_->find($idEvaluasi);

            $soalEvalTesPGPernahDikerjakankah = $this->JwbnEvaluasiTesPG_->getSoalPG_sdhDikerjakankah($idEvaluasi,session()->get('id_akunPengguna'));
            $soalEvalTesEssayPernahDikerjakankah = $this->JwbnEvaluasiTesEssay_->getSoalEssay_sdhDikerjakankah($idEvaluasi,session()->get('id_akunPengguna'));

            $detailEval=[   
                'soalEvalTesPGPernahDikerjakankah'=>$soalEvalTesPGPernahDikerjakankah,
                'soalEvalTesEssayPernahDikerjakankah'=>$soalEvalTesEssayPernahDikerjakankah,
                'detail_evaluasi'=>$detailEvaluasi,
                'banyakSoalPG'=>$this->EvaluasiTesPG_->getBanyakSoalPG($idEvaluasi),
                'banyakSoalEssay'=>$this->EvaluasiTesEssay_->getBanyakSoalEssay($idEvaluasi),
            ];

            // dd($detailEval);

            return view('halaman_murid/murid_detailEvaluasiTes',$detailEval);
        }else{
            return redirect()->to(base_url('Credentials'));
        }
    }

    public function i($idEvaluasi)
	{   
        $detailEvaluasi = $this->Evaluasi_->find($idEvaluasi);
        if(($idEvaluasi!=null) && (session()->get('level_akunPengguna') == $this->GURU_access_Level) && ($detailEvaluasi['author_evaluasi']==session()->get('id_akunPengguna')) ){
            $data=[
                'detail_evaluasi'=>$detailEvaluasi,
                'list_soalEvaluasiTesPG'=>$this->EvaluasiTesPG_->getSoalPGEvaluasiByEvaluasiID($idEvaluasi),
                'list_soalEvaluasiTesEssay'=>$this->EvaluasiTesEssay_->getSoalEssayEvaluasiByEvaluasiID($idEvaluasi),
            ];

            return view('halaman_guru/guru_kelolaSoalEvaluasiTes',$data);
        }else{
            return redirect()->to(base_url('Guru/evaluasi_tes'));
        }
		
	}

    public function e($idSoal)
	{   
        $detailSoal = $this->EvaluasiTesPG_->getDetailSoalBySoalID_withLoggedGuru($idSoal,session()->get('id_akunPengguna'));
        if(($detailSoal!=null) && ($idSoal!=null) && (session()->get('level_akunPengguna') == $this->GURU_access_Level) && ($detailSoal['author_evaluasi']==session()->get('id_akunPengguna')) ){
            $data=[
                'detail_soal'=>$this->EvaluasiTesPG_->getDetailSoalBySoalID_withLoggedGuru($idSoal,session()->get('id_akunPengguna')),
            ];
            // dd($data);
            return view('halaman_guru/guru_editSoalPG',$data);
        }else{
            return redirect()->to(base_url('Guru/evaluasi_tes'));
        }
		
	}

    public function ee($idSoal){
        $detailSoal = $this->EvaluasiTesEssay_->getDetailSoalBySoalID_withLoggedGuru($idSoal,session()->get('id_akunPengguna'));
        if(($detailSoal!=null) && ($idSoal!=null) && (session()->get('level_akunPengguna') == $this->GURU_access_Level) && ($detailSoal['author_evaluasi']==session()->get('id_akunPengguna')) ){
            $data=[
                'detail_soal'=>$detailSoal,
            ];
            // dd($data);
            return view('halaman_guru/guru_editSoalEssay',$data);
        }else{
            return redirect()->to(base_url('Guru/evaluasi_tes'));
        }
    }

    public function soal_PG_baru($idEvaluasi)
	{   
        if(($idEvaluasi!=null) && (session()->get('level_akunPengguna') == $this->GURU_access_Level) ){

            $data=[
                'detail_evaluasi'=>$this->Evaluasi_->find($idEvaluasi),
            ];

            return view('halaman_guru/guru_buatSoalPGBaru',$data);
        }else{
            return redirect()->to(base_url('Guru/evaluasi_tes'));
        }
		
	}

    public function soal_Essay_baru($idEvaluasi){
        if(($idEvaluasi!=null) && (session()->get('level_akunPengguna') == $this->GURU_access_Level) ){

            $data=[
                'detail_evaluasi'=>$this->Evaluasi_->find($idEvaluasi),
            ];

            // dd($data);

            return view('halaman_guru/guru_buatSoalEssayBaru',$data);
        }else{
            return redirect()->to(base_url('Guru/evaluasi_tes'));
        }
    }

    //-------------------------------------BACKEND HANDLING

    function api_simpan_soalpg(){
        helper('text');
		$idSoal_PG = random_string('alnum', 15);

        $id_evaluasi_tes=$this->request->getPost('eval_id');

        if(($id_evaluasi_tes!=null) && (session()->get('level_akunPengguna') == $this->GURU_access_Level) ){

            $dataSoalEvaluasiTesPG=[
                'id_evaluasi_tes'=>$id_evaluasi_tes,
                'id_soal'=>$idSoal_PG,
                'pertanyaan_soal'=>$this->request->getPost('pertanyaan_pg'),
                'opsi_a'=>$this->request->getPost('opsiA'),
                'opsi_b'=>$this->request->getPost('opsiB'),
                'opsi_c'=>$this->request->getPost('opsiC'),
                'opsi_d'=>$this->request->getPost('opsiD'),
                'opsi_e'=>$this->request->getPost('opsiE'),
                'jawaban_benar'=>$this->request->getPost('kunciJawaban'),
            ];
            $this->EvaluasiTesPG_->insert($dataSoalEvaluasiTesPG);
            session()->setFlashdata('notif', 'toastr.success("Soal berhasil disimpan", "Berhasil!");');
            return redirect()->to(base_url('Evaluasi_/EvaluasiTes/i/'.$id_evaluasi_tes));
        }else{
            return redirect()->to(base_url('Guru/evaluasi_tes'));
        }
    }

    function api_update_soalpg(){
		$idSoal_PG = $this->request->getPost('soal_id');
        
        $id_evaluasi_tes=$this->request->getPost('eval_id');

        if(($id_evaluasi_tes!=null) && (session()->get('level_akunPengguna') == $this->GURU_access_Level) ){

            $dataSoalEvaluasiTesPG=[
                'pertanyaan_soal'=>$this->request->getPost('pertanyaan_pg'),
                'opsi_a'=>$this->request->getPost('opsiA'),
                'opsi_b'=>$this->request->getPost('opsiB'),
                'opsi_c'=>$this->request->getPost('opsiC'),
                'opsi_d'=>$this->request->getPost('opsiD'),
                'opsi_e'=>$this->request->getPost('opsiE'),
                'jawaban_benar'=>$this->request->getPost('kunciJawaban'),
            ];
            $this->EvaluasiTesPG_->update($idSoal_PG,$dataSoalEvaluasiTesPG);
            session()->setFlashdata('notif', 'toastr.success("Perubahan berhasil disimpan", "Berhasil!");');
            return redirect()->to(base_url('Evaluasi_/EvaluasiTes/i/'.$id_evaluasi_tes));
        }else{
            return redirect()->to(base_url('Guru/evaluasi_tes'));
        }
    }

    function api_simpan_soalessay(){
        helper('text');
		$idSoal_PG = random_string('alnum', 14);

        $id_evaluasi_tes=$this->request->getPost('eval_id');

        if(($id_evaluasi_tes!=null) && (session()->get('level_akunPengguna') == $this->GURU_access_Level) ){

            $dataSoalEvaluasiTesEssay=[
                'id_evaluasi_tes'=>$id_evaluasi_tes,
                'id_soal'=>$idSoal_PG,
                'pertanyaan_soal'=>$this->request->getPost('pertanyaan_essay'),
                'jawaban_benar'=>$this->request->getPost('jawaban_essay'),
            ];
            $this->EvaluasiTesEssay_->insert($dataSoalEvaluasiTesEssay);
            session()->setFlashdata('notif', 'toastr.success("Soal berhasil disimpan", "Berhasil!");');
            return redirect()->to(base_url('Evaluasi_/EvaluasiTes/i/'.$id_evaluasi_tes.'#soalESSAY'));
        }else{
            return redirect()->to(base_url('Guru/evaluasi_tes'));
        }
    }

    function api_update_soalessay(){
		$idSoal_PG = $this->request->getPost('idSoal');

        $id_evaluasi_tes=$this->request->getPost('eval_id');

        if(($id_evaluasi_tes!=null) && (session()->get('level_akunPengguna') == $this->GURU_access_Level) ){

            $dataSoalEvaluasiTesEssay=[
                'pertanyaan_soal'=>$this->request->getPost('pertanyaan_essay'),
                'jawaban_benar'=>$this->request->getPost('jawaban_essay'),
            ];
            $this->EvaluasiTesEssay_->update($idSoal_PG,$dataSoalEvaluasiTesEssay);
            session()->setFlashdata('notif', 'toastr.success("Perubahan berhasil disimpan", "Berhasil!");');
            return redirect()->to(base_url('Evaluasi_/EvaluasiTes/i/'.$id_evaluasi_tes.'#soalESSAY'));
        }else{
            return redirect()->to(base_url('Guru/evaluasi_tes'));
        }
    }

    function api_update_nilaiessay_murid(){
        if ($this->request->getMethod() == "post") {
            $nilaiEvalTes = new M_nilaiEvalTes();

                $idMurid = $this->request->getVar("idMurid");
                $nilaiEssayMurid = $this->request->getVar("nilaiEvalTesEssay");

            if ($nilaiEvalTes->updateNilaiEssayMurid($idMurid,$nilaiEssayMurid)) {

                $response = [
                    'success' => true,
                    'msg' => "200",
                ];
            } else {
                $response = [
                    'success' => true,
                    'msg' => "500",
                ];
            }

            return $this->response->setJSON($response);
        } else {
            echo ('500');
        }
    }

    public function proses_jawaban_pg(){
        $idEvaluasi = $this->request->getPost('idEval');
        if(($idEvaluasi!=null) && (session()->get('level_akunPengguna') == $this->MURID_access_Level)){

            $jawabanMurid = $this->request->getPost('jawaban');

            $idMurid = session()->get('id_akunPengguna');
            
            $dataJawaban=[
                'id_evaluasi_tes'=>$idEvaluasi,
                'id_murid'=>$idMurid,
                'jawaban_murid'=>$jawabanMurid,
            ];

            $kunciJawaban = $this->EvaluasiTesPG_->getKunciJawabanTesID($idEvaluasi);
            
            $jwbnBenar = 0;
            $jwbnSalah = 0;
            foreach($kunciJawaban as $knciJwbn){

                helper('text');
		        $idJawaban = random_string('alnum', 12);
                // echo $idJawaban.'-';
                $dataJawabanMurid_toDB = [
                    'id_evaluasi_tes'=>$idEvaluasi,
                    'id_murid'=>$idMurid,
                    'id_jawaban'=>$idJawaban,
                    'id_soal' => $knciJwbn['id_soal'],
                    'jawaban_murid'=>$jawabanMurid[$knciJwbn['id_soal']]
                ];

                $this->JwbnEvaluasiTesPG_->insert($dataJawabanMurid_toDB);
                
                if($jawabanMurid[$knciJwbn['id_soal']]==$knciJwbn['jawaban_benar']){
                    $jwbnBenar = $jwbnBenar+1;
                }else{
                    $jwbnSalah = $jwbnSalah+1;
                }
            }

            $nilaiPG = ($jwbnBenar/($jwbnBenar+$jwbnSalah))*100;
            $idNilaiEvalTes_= random_string('alnum', 16);
            $hasilEvaluasiPG=[
                'id_nilai_evaltes'=>$idNilaiEvalTes_,
                'id_evaluasi_tes'=>$idEvaluasi,
                'id_murid'=>$idMurid,
                'nilai_pg'=>$nilaiPG
            ];
            
            $this->NilaiEvalTes_->insert($hasilEvaluasiPG);

            // echo '200';
			session()->setFlashdata('notif','toastr.success("Soal Pilihan Ganda dikerjakan", "Sudah dikerjakan!");');
            return redirect()->to(base_url('Evaluasi_/EvaluasiTes/detail/'.$idEvaluasi));
        }else{
            return redirect()->to(base_url('Credentials'));
        }
    }

    public function proses_jawaban_essay(){
        $idEvaluasi = $this->request->getPost('idEval');
        if(($idEvaluasi!=null) && (session()->get('level_akunPengguna') == $this->MURID_access_Level)){

            $jawabanMurid = $this->request->getPost('jawabanMurid');

            $idMurid = session()->get('id_akunPengguna');
            
            $listSoalEssay_evalTes=$this->EvaluasiTesEssay_->getSoalByEvaluasiTesID($idEvaluasi);

            
            foreach($listSoalEssay_evalTes as $soalEssayEvalTes){

                helper('text');
		        $idJawaban = random_string('alnum', 12);

                $dataJawabanEssay=[
                    'id_jawaban'=>$idJawaban,
                    'id_evaluasi_tes'=>$idEvaluasi,
                    'id_murid'=>$idMurid,
                    'id_soal'=>$soalEssayEvalTes['id_soal'],
                    'jawaban_murid'=>$jawabanMurid[$soalEssayEvalTes['id_soal']],
                ];

                
                $this->JwbnEvaluasiTesEssay_->insert($dataJawabanEssay);
            }

            // dd($dataJawaban);
            session()->setFlashdata('notif','toastr.success("Soal Essay dikerjakan", "Sudah dikerjakan!");');
            return redirect()->to(base_url('Evaluasi_/EvaluasiTes/detail/'.$idEvaluasi));
        } else {
            return redirect()->to(base_url('Credentials'));
        }
    }
    
}
