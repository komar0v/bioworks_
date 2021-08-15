<?php

namespace App\Controllers;
use App\Models\M_user;

class Credentials extends BaseController
{
	public function __construct()
    {
		helper('form');
		helper('date');
		$this->User_ = new M_user();
    }

	public function index()
	{
		if ((session()->get('level_akunPengguna') == 'ADMIN')){
			return redirect()->to(base_url('Admin'));
		}
		else if ((session()->get('level_akunPengguna') == 'guru')){
			return redirect()->to(base_url('Guru'));
		}
		else if ((session()->get('level_akunPengguna') == 'murid')){
			return redirect()->to(base_url('Murid'));
		}
		else{
			return view('halaman_login/v_login');
		}
		
	}

    public function login()
	{
		$validator = $this->validate([
            'user-name' => [
            	'rules'  => 'required'
			],
			'user-password' => [
            	'rules'  => 'required'
            ]
        ]);

		$uname = $this->request->getPost('user-name');
        $upass = $this->request->getPost('user-password');
		$cek_akun = $this->User_->cek_akun($uname,$upass);

		if($validator==TRUE){
			if($cek_akun!=null){
				if(($cek_akun['user_name']==$uname) && ($cek_akun['user_pass']==$upass) && ($cek_akun['user_level']=='guru')){
					session()->set('username_akunPengguna',$uname);
					session()->set('namalengkap_akunPengguna',$cek_akun['namalengkap_user']);
					session()->set('id_akunPengguna',$cek_akun['user_id']);
					session()->set('level_akunPengguna',$cek_akun['user_level']);
					session()->setFlashdata('notif','toastr.success("Halo pak/bu, '.$cek_akun['namalengkap_user'].' ", "Selamat Datang!");');
					return redirect()->to(base_url('Guru'));
				}
				else if(($cek_akun['user_name']==$uname) && ($cek_akun['user_pass']==$upass) && ($cek_akun['user_level']=='murid')){
					session()->set('username_akunPengguna',$uname);
					session()->set('namalengkap_akunPengguna',$cek_akun['namalengkap_user']);
					session()->set('id_akunPengguna',$cek_akun['user_id']);
					session()->set('level_akunPengguna',$cek_akun['user_level']);
					session()->setFlashdata('notif','toastr.success("Halo,'.$cek_akun['namalengkap_user'].' ", "Selamat Datang!");');
					return redirect()->to(base_url('Murid'));
				}
				else if(($cek_akun['user_name']==$uname) && ($cek_akun['user_pass']==$upass) && ($cek_akun['user_level']=='ADMIN')){
					session()->set('username_akunPengguna',$uname);
					session()->set('namalengkap_akunPengguna',$cek_akun['namalengkap_user']);
					session()->set('id_akunPengguna',$cek_akun['user_id']);
					session()->set('level_akunPengguna',$cek_akun['user_level']);
					session()->setFlashdata('notif','toastr.success("Halo Admin,'.$cek_akun['namalengkap_user'].' ", "Selamat Datang!");');
					return redirect()->to(base_url('Admin'));
				}
				else{
					session()->setFlashdata('notif','toastr.error("Email atau password salah", "Gagal!");');
					return redirect()->to(base_url('Credentials'));
				}
			}else{
				session()->setFlashdata('notif','toastr.error("Email atau password salah", "Gagal!");');
				return redirect()->to(base_url('Credentials'));
			}
		}else{
			return redirect()->to(base_url('pengguna'));
		}
	}

	public function keluar(){
        session()->destroy();
        return redirect()->to(base_url('Credentials'));
    }
}
