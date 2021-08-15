<?php

namespace App\Controllers;
use App\Models\M_guru;
use App\Models\M_user;
use App\Models\M_murid;
use App\Models\M_materi;
use App\Models\M_evaluasi;
use App\Models\M_evaluasi_nontes;
use App\Models\M_nilaiEvalTes;
use App\Models\M_nilaiEvalNonTes;

class Guru extends BaseController
{
    
    public function __construct()
    {
		helper('form');
        $this->access_Level = 'guru';
        $this->Guru_ = new M_guru();
        $this->User_ = new M_user();
        $this->Murid_ = new M_murid();
        $this->Materi_ = new M_materi();
        $this->Evaluasi_ = new M_evaluasi();
        $this->EvaluasiNonTes_ = new M_evaluasi_nontes();
        $this->NilaiEval_ = new M_nilaiEvalTes();
        $this->NilaiEvalNonTes_ = new M_nilaiEvalNonTes();
    }

	public function index()
	{
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            return view('halaman_guru/guru_home');
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
		
	}

    public function tentang_app(){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            return view('halaman_guru/guru_tentangApp');
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    public function materi()
	{
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            // dd($this->Materi_->getSemuaMateriByAnUser(session()->get('id_akunPengguna')));
            $data=[
                'list_materi'=>$this->Materi_->getSemuaMateriByAnUser(session()->get('id_akunPengguna')),
            ];
            return view('halaman_guru/guru_kelolaMateri',$data);
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
		
	}

    public function edit_materi($id_materi){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            
            $data=[
                'data_materi'=>$this->Materi_->find($id_materi),
            ];
            // dd($data);
            return view('halaman_guru/guru_editMateri',$data);
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    public function tambah_materi(){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            
            return view('halaman_guru/guru_tambahMateri');
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    public function evaluasi_tes(){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            $data = ['listEvaluasi'=>$this->Evaluasi_->getSemuaEvaluasiByAnUser(session()->get('id_akunPengguna')),];
            return view('halaman_guru/guru_kelolaEvaluasiTes', $data);
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    public function evaluasi_non_tes($idEvalNonTes=null){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            if($idEvalNonTes!=null){
                $data = ['detailEvaluasiNonTes'=>$this->EvaluasiNonTes_->find($idEvalNonTes),];
                // dd($data);
                return view('halaman_guru/guru_editEvaluasiNonTes', $data);
            }else{
                $data = ['listEvaluasiNonTes'=>$this->EvaluasiNonTes_->getSemuaEvaluasiNonTesByAnUser(session()->get('id_akunPengguna')),];
                return view('halaman_guru/guru_kelolaEvaluasiNonTes', $data);
            }
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
        
    }

    public function edit_evaluasi_tes($id_evaluasi){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            $data = ['detailEvaluasi'=>$this->Evaluasi_->find($id_evaluasi)];
            return view('halaman_guru/guru_editEvaluasiTes', $data);
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    public function tambah_evaluasi_tes(){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            
            return view('halaman_guru/guru_tambahEvaluasiTes');
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    public function tambah_evaluasi_non_tes(){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            
            return view('halaman_guru/guru_tambahEvaluasiNonTes');
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    public function hasil_evaluasi_tes(){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            $data = ['listEvaluasi'=>$this->Evaluasi_->getSemuaEvaluasiYgSdhDitutupByAnUser(session()->get('id_akunPengguna')),];
            return view('halaman_guru/guru_kelolaHasilEvaluasiTes', $data);
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    
    public function hasil_evaluasi_non_tes(){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            $data = ['listEvaluasiNonTes'=>$this->EvaluasiNonTes_->getSemuaEvaluasiNonTesYgSdhDitutupByAnUser(session()->get('id_akunPengguna')),];
            return view('halaman_guru/guru_kelolaHasilEvaluasiNonTes', $data);
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    public function detail_evaluasi_non_tes($id_evaluasiNonTes){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            $detail_evalNonTes=$this->EvaluasiNonTes_->getDetailEvaluasiNonTesEvalID($id_evaluasiNonTes);
            $data = [
                'detailEvaluasiNonTes' => $detail_evalNonTes,
                'list_NilaiEvalNonTes' => $this->NilaiEvalNonTes_->getNilaiMuridbyEvalNonTesID($id_evaluasiNonTes),
            ];

            // dd($data);
            session()->setFlashdata('exportFileName',$detail_evalNonTes['judul_evaluasi'].'-'.$detail_evalNonTes['jenis_evaluasi']);
            return view('halaman_guru/guru_detailHasilEvaluasiNonTes',$data);
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    public function detail_hasil_evaluasi_tes($id_evaluasi){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            $data = ['detailEvaluasi' => $this->Evaluasi_->find($id_evaluasi),];

            // dd($data);
            return view('halaman_guru/guru_detailHasilEvaluasiTes',$data);
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    public function hasil_eval_pilgan($id_evaluasi){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            $detailEvaluasi = $this->Evaluasi_->find($id_evaluasi);
            $data = [
                'detailEvaluasi' => $detailEvaluasi,
                'listNilaiMurid'=> $this->NilaiEval_->getNilaiMuridbyEvalID($id_evaluasi),
            ];

            // dd($data);
            session()->setFlashdata('exportFileName',$detailEvaluasi['judul_evaluasi'].'-PILGAN');
            return view('halaman_guru/guru_hasilEvalTesPG',$data);
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    public function hasil_eval_essay($id_evaluasi){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            $detailEvaluasi = $this->Evaluasi_->find($id_evaluasi);
            $data = [
                'detailEvaluasi' => $detailEvaluasi,
                'listNilaiMurid'=> $this->NilaiEval_->getNilaiMuridbyEvalID($id_evaluasi),
            ];

            // dd($data);
            session()->setFlashdata('exportFileName',$detailEvaluasi['judul_evaluasi'].'-ESSAY');
            return view('halaman_guru/guru_hasilEvalTesEssay',$data);
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    //--------------------------------------BACK END HANDLING--------------

    function api_imageUpload(){
        helper('text');
		$randStr = random_string('alnum', 15);
		
		if((session()->get('level_akunPengguna') == $this->access_Level)){
			$validator = $this->validate([
				'image' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/gif,image/png]|max_size[image,1196]'
			]);
			
			if(isset($_FILES['image'])&&($validator==TRUE)&&(session()->get('username_akunPengguna'))){
				$gambar = $this->request->getFile('image');
				$namafile = $randStr.'_'.preg_replace("/\s+/", '-', $gambar->getName());
				$gambar->move(ROOTPATH . 'public/uploads',$namafile);
				
				echo base_url().'/uploads/'.$namafile;
			}
		}
		else{
			return redirect()->to(base_url('Credentials'));
		}
    }

    public function delete_materi(){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            $id_materi = $this->request->getPost('m_id');
            $this->Materi_->delete($id_materi);
            session()->setFlashdata('notif', 'toastr.success("Materi dihapus", "Berhasil!");');
            return redirect()->to(base_url('Guru/materi'));
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    public function update_materi(){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            $validator = $this->validate([
                'konten_materi' => [
                    'rules'  => 'required'
                ],
                'judulMateri' => [
                    'rules'  => 'required'
                ],
                'idMateri' => [
                    'rules'  => 'required'
                ]
            ]);
            $id_materi = $this->request->getPost('idMateri');

            if ($validator == TRUE) {
                $data_materi=[
                    'konten_materi'=>$this->request->getPost('konten_materi'),
                    'judul_materi'=>$this->request->getPost('judulMateri'),
                ];
                
                $this->Materi_->update($id_materi, $data_materi);
                session()->setFlashdata('notif', 'toastr.success("Perubahan berhasil disimpan", "Berhasil!");');
                return redirect()->to(base_url('Guru/materi'));
            }else{
                session()->setFlashdata('notif', 'toastr.error("Gagal menyimpan data");');
                return redirect()->to(base_url('Guru/edit_materi/' . $id_materi));
            }
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    public function simpanNewMateri(){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            $validator = $this->validate([
                'konten_materi' => [
                    'rules'  => 'required'
                ],
                'judulMateri' => [
                    'rules'  => 'required'
                ]
            ]);
            

                $alpha_num = '01236789qwertyuiop';
                $charactersLength = strlen($alpha_num);
                $randomString = '';
                for ($i = 0; $i < 10; $i++) {
                    $randomString .= $alpha_num[rand(0, $charactersLength - 1)];
                }

                $id_materi = $randomString;

            if ($validator == TRUE) {
                $data_materi=[
                    'id_materi'=>$id_materi,
                    'penulis_materi'=>session()->get('id_akunPengguna'),
                    'konten_materi'=>$this->request->getPost('konten_materi'),
                    'judul_materi'=>$this->request->getPost('judulMateri'),
                ];
                
                $this->Materi_->insert($data_materi);
                session()->setFlashdata('notif', 'toastr.success("Perubahan berhasil disimpan", "Berhasil!");');
                return redirect()->to(base_url('Guru/materi'));
            }else{
                session()->setFlashdata('notif', 'toastr.error("Gagal menyimpan data");');
                return redirect()->to(base_url('Guru/tambah_materi/'));
            }
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    public function simpanNewEvaluasiTes(){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            $validator = $this->validate([
                'status_evaluasi' => [
                    'rules'  => 'required'
                ],
                'judulEvaluasi' => [
                    'rules'  => 'required'
                ],
                'batas_pengerjaan' => [
                    'rules'  => 'required'
                ]
            ]);
            if ($validator == TRUE) {
                $alpha_num = '01357tyuiopcxz';
                $charactersLength = strlen($alpha_num);
                $randomString = '';
                for ($i = 0; $i < 10; $i++) {
                    $randomString .= $alpha_num[rand(0, $charactersLength - 1)];
                }
    
                $id_evaluasi = $randomString;
    
                $data_evaluasi=[
                    'id_evaluasi_tes'=>$id_evaluasi,
                    'author_evaluasi'=>session()->get('id_akunPengguna'),
                    'status_evaluasi'=>$this->request->getPost('status_evaluasi'),
                    'judul_evaluasi'=>$this->request->getPost('judulEvaluasi'),
                    'batas_pengerjaan'=>$this->request->getPost('batas_pengerjaan'),
                ];
                // dd($data_evaluasi);
    
                $this->Evaluasi_->insert($data_evaluasi);
                session()->setFlashdata('notif', 'toastr.success("Evaluasi berhasil dibuat", "Berhasil!");');
                return redirect()->to(base_url('Guru/evaluasi_tes'));
            }else{
                session()->setFlashdata('notif', 'toastr.error("Gagal menyimpan data");');
                return redirect()->to(base_url('Guru/tambah_evaluasi_tes/'));
            }
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    public function simpanNewEvaluasiNonTes(){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            $validator = $this->validate([
                'status_evaluasi' => [
                    'rules'  => 'required'
                ],
                'judulEvaluasiNonTes' => [
                    'rules'  => 'required'
                ],
                'jenis_evalNontes' => [
                    'rules'  => 'required'
                ]
            ]);
            if ($validator == TRUE) {
                helper('text');
		        $randStr = random_string('alnum', 13);
    
                $id_evaluasi_non_tes = 'nt'.$randStr;
    
                $data_evaluasi_nontes=[
                    'id_evaluasi_non_tes'=>$id_evaluasi_non_tes,
                    'author_evaluasi'=>session()->get('id_akunPengguna'),
                    'status_evaluasi'=>$this->request->getPost('status_evaluasi'),
                    'judul_evaluasi'=>$this->request->getPost('judulEvaluasiNonTes'),
                    'jenis_evaluasi'=>$this->request->getPost('jenis_evalNontes'),
                ];
                // dd($data_evaluasi_nontes);
    
                $this->EvaluasiNonTes_->insert($data_evaluasi_nontes);
                session()->setFlashdata('notif', 'toastr.success("Evaluasi berhasil dibuat", "Berhasil!");');
                return redirect()->to(base_url('Guru/evaluasi_non_tes'));
            }else{
                session()->setFlashdata('notif', 'toastr.error("Gagal menyimpan data");');
                return redirect()->to(base_url('Guru/tambah_evaluasi_non_tes/'));
            }
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    public function update_EvaluasiTes(){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            $id_evaluasi = $this->request->getPost('idEval');
            $validator = $this->validate([
                'status_evaluasi' => [
                    'rules'  => 'required'
                ],
                'judulEvaluasi' => [
                    'rules'  => 'required'
                ],
                'batas_pengerjaan' => [
                    'rules'  => 'required'
                ]
            ]);
            if ($validator == TRUE) {
    
                $data_evaluasi=[
                    'status_evaluasi'=>$this->request->getPost('status_evaluasi'),
                    'judul_evaluasi'=>$this->request->getPost('judulEvaluasi'),
                    'batas_pengerjaan'=>$this->request->getPost('batas_pengerjaan'),
                ];
                // dd($data_evaluasi);
    
                $this->Evaluasi_->update($id_evaluasi,$data_evaluasi);
                session()->setFlashdata('notif', 'toastr.success("Perubaan disimpan", "Berhasil!");');
                return redirect()->to(base_url('Guru/evaluasi_tes'));
            }else{
                session()->setFlashdata('notif', 'toastr.error("Gagal menyimpan data");');
                return redirect()->to(base_url('Guru/edit_evaluasi_tes/'.$id_evaluasi));
            }
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }

    public function updateEvaluasiNonTes(){
        if((session()->get('level_akunPengguna') == $this->access_Level)){
            $id_evaluasiNonTes = $this->request->getPost('idEvalNonTes');
            $validator = $this->validate([
                'status_evaluasi' => [
                    'rules'  => 'required'
                ],
                'judulEvaluasiNonTes' => [
                    'rules'  => 'required'
                ],
                'jenis_evalNontes' => [
                    'rules'  => 'required'
                ]
            ]);
            if ($validator == TRUE) {
                
                $data_evaluasi_nontes=[
                    'status_evaluasi'=>$this->request->getPost('status_evaluasi'),
                    'judul_evaluasi'=>$this->request->getPost('judulEvaluasiNonTes'),
                    'jenis_evaluasi'=>$this->request->getPost('jenis_evalNontes'),
                ];
                // dd($data_evaluasi_nontes);
    
                $this->EvaluasiNonTes_->update($id_evaluasiNonTes,$data_evaluasi_nontes);
                session()->setFlashdata('notif', 'toastr.success("Perubaan disimpan", "Berhasil!");');
                return redirect()->to(base_url('Guru/evaluasi_non_tes'));
            }else{
                session()->setFlashdata('notif', 'toastr.error("Gagal menyimpan data");');
                return redirect()->to(base_url('Guru/evaluasi_non_tes/'.$id_evaluasiNonTes));
            }
        }else{
            session()->setFlashdata('notif','toastr.error("AKSES DITOLAK", "ERROR!");');
			return redirect()->to(base_url('Credentials'));
        }
    }
}
