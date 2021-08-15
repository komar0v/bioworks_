<?php

namespace App\Controllers;

use App\Models\M_guru;
use App\Models\M_user;
use App\Models\M_murid;

class Admin extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->access_Level = 'ADMIN';
        $this->Guru_ = new M_guru();
        $this->User_ = new M_user();
        $this->Murid_ = new M_murid();
    }

    public function index()
    {
        if ((session()->get('level_akunPengguna') == $this->access_Level)) {
            return view('halaman_admin/admin_home');
        } else {
            session()->setFlashdata('notif', 'toastr.error("AKSES DITOLAK", "ERROR!");');
            return redirect()->to(base_url('Credentials'));
        }
    }

    public function kelola_guru()
    {
        if ((session()->get('level_akunPengguna') == $this->access_Level)) {
            $data = ['data_guru' => $this->Guru_->getSemuaGuru()];

            return view('halaman_admin/admin_kelolaGuru', $data);
        } else {
            session()->setFlashdata('notif', 'toastr.error("AKSES DITOLAK", "ERROR!");');
            return redirect()->to(base_url('Credentials'));
        }
    }

    public function tambah_guru()
    {
        if ((session()->get('level_akunPengguna') == $this->access_Level)) {
            // dd($this->Guru_->get_detail_guru($user_id));
            return view('halaman_admin/admin_tambahGuru');
        } else {
            session()->setFlashdata('notif', 'toastr.error("AKSES DITOLAK", "ERROR!");');
            return redirect()->to(base_url('Credentials'));
        }
    }

    public function edit_guru($user_id)
    {
        if ((session()->get('level_akunPengguna') == $this->access_Level)) {
            // dd($this->Guru_->get_detail_guru($user_id));
            $data = ['detail_guru' => $this->Guru_->get_detail_guru($user_id)];
            return view('halaman_admin/admin_editGuru', $data);
        } else {
            session()->setFlashdata('notif', 'toastr.error("AKSES DITOLAK", "ERROR!");');
            return redirect()->to(base_url('Credentials'));
        }
    }

    public function kelola_murid()
    {
        if ((session()->get('level_akunPengguna') == $this->access_Level)) {
            $data = ['data_murid' => $this->Murid_->getSemuaMurid()];

            return view('halaman_admin/admin_kelolaMurid', $data);
        } else {
            session()->setFlashdata('notif', 'toastr.error("AKSES DITOLAK", "ERROR!");');
            return redirect()->to(base_url('Credentials'));
        }
    }

    public function tambah_murid()
    {
        if ((session()->get('level_akunPengguna') == $this->access_Level)) {
            return view('halaman_admin/admin_tambahMurid');
        } else {
            session()->setFlashdata('notif', 'toastr.error("AKSES DITOLAK", "ERROR!");');
            return redirect()->to(base_url('Credentials'));
        }
    }

    public function edit_murid($user_id)
    {
        if ((session()->get('level_akunPengguna') == $this->access_Level)) {
            $data = ['detail_murid' => $this->Murid_->get_detail_murid($user_id)];
            return view('halaman_admin/admin_editMurid', $data);
        } else {
            session()->setFlashdata('notif', 'toastr.error("AKSES DITOLAK", "ERROR!");');
            return redirect()->to(base_url('Credentials'));
        }
    }

    public function tentang_app()
    {
        if ((session()->get('level_akunPengguna') == $this->access_Level)) {

            return view('halaman_admin/admin_tentang');
        } else {
            session()->setFlashdata('notif', 'toastr.error("AKSES DITOLAK", "ERROR!");');
            return redirect()->to(base_url('Credentials'));
        }
    }

    //----------------------------------BACK END HANDLING---------------------------------------------------------------
    public function simpanEditedDataGuru()
    {
        if ((session()->get('level_akunPengguna') == $this->access_Level)) {
            $validator = $this->validate([
                'userName' => [
                    'rules'  => 'required'
                ],
                'nipGuru' => [
                    'rules'  => 'required'
                ],
                'namaLengkap' => [
                    'rules'  => 'required'
                ]
            ]);

            $user_id = $this->request->getPost('userid');

            $detailGuru_user = [
                'user_name' => $this->request->getPost('userName'),
                'namalengkap_user' => $this->request->getPost('namaLengkap'),
            ];

            $detailGuru_guru = [
                'nip_guru' => $this->request->getPost('nipGuru'),
            ];

            if ($validator == TRUE) {

                $this->User_->update($user_id, $detailGuru_user);
                $this->Guru_->update($user_id, $detailGuru_guru);
                session()->setFlashdata('notif', 'toastr.success("Data guru berhasil disimpan", "Berhasil!");');
                return redirect()->to(base_url('Admin/kelola_guru'));
            } else {
                session()->setFlashdata('notif', 'toastr.error("Gagal menyimpan data");');
                return redirect()->to(base_url('Admin/edit_guru/' . $user_id));
            }
        } else {
            session()->setFlashdata('notif', 'toastr.error("AKSES DITOLAK", "ERROR!");');
            return redirect()->to(base_url('Credentials'));
        }
    }

    public function simpanNewDataGuru()
    {
        if ((session()->get('level_akunPengguna') == $this->access_Level)) {
            $validator = $this->validate([
                'userName' => [
                    'rules'  => 'required|is_unique[user_tbl.user_name]'
                ],
                'nipGuru' => [
                    'rules'  => 'required'
                ],
                'namaLengkap' => [
                    'rules'  => 'required'
                ]
            ]);

            if ($validator == TRUE) {

                $alpha_num = '6789abcdexyz';
                $charactersLength = strlen($alpha_num);
                $randomString = '';
                for ($i = 0; $i < 10; $i++) {
                    $randomString .= $alpha_num[rand(0, $charactersLength - 1)];
                }

                $detailGuru_user = [
                    'user_id' => $randomString,
                    'user_pass' => 'guru321',
                    'user_level' => 'guru',
                    'user_name' => $this->request->getPost('userName'),
                    'namalengkap_user' => $this->request->getPost('namaLengkap'),
                ];

                $detailGuru_guru = [
                    'user_id' => $randomString,
                    'nip_guru' => $this->request->getPost('nipGuru'),
                ];

                $this->User_->insert($detailGuru_user);
                $this->Guru_->insert($detailGuru_guru);
                session()->setFlashdata('notif', 'toastr.success("Data guru berhasil disimpan", "Berhasil!");');
                return redirect()->to(base_url('Admin/kelola_guru'));
            } else {
                session()->setFlashdata('notif', 'toastr.error("Gagal menyimpan data");');
                return redirect()->to(base_url('Admin/tambah_guru/'));
            }
        } else {
            session()->setFlashdata('notif', 'toastr.error("AKSES DITOLAK", "ERROR!");');
            return redirect()->to(base_url('Credentials'));
        }
    }


    public function hapusDataGuru()
    {
        if ((session()->get('level_akunPengguna') == $this->access_Level)) {
            $user_id = $this->request->getPost('u_id');
            $this->User_->delete($user_id);
            $this->Guru_->delete($user_id);
            session()->setFlashdata('notif', 'toastr.success("Data guru berhasil dihapus", "Berhasil!");');
            return redirect()->to(base_url('Admin/kelola_guru'));
        } else {
            session()->setFlashdata('notif', 'toastr.error("AKSES DITOLAK", "ERROR!");');
            return redirect()->to(base_url('Credentials'));
        }
    }

    public function simpanEditedDataMurid()
    {
        if ((session()->get('level_akunPengguna') == $this->access_Level)) {
            $validator = $this->validate([
                'userName' => [
                    'rules'  => 'required'
                ],
                'userPass' => [
                    'rules'  => 'required'
                ],
                'nisMurid' => [
                    'rules'  => 'required'
                ],
                'namaLengkap' => [
                    'rules'  => 'required'
                ]
            ]);

            $user_id = $this->request->getPost('userid');

            $detailMurid_user = [
                'user_name' => $this->request->getPost('userName'),
                'namalengkap_user' => $this->request->getPost('namaLengkap'),
                'user_pass' => $this->request->getPost('userPass'),
            ];

            $detailMurid_murid = [
                'nis_murid' => $this->request->getPost('nisMurid'),
            ];

            if ($validator == TRUE) {
                $this->User_->update($user_id, $detailMurid_user);
                $this->Murid_->update($user_id, $detailMurid_murid);
                session()->setFlashdata('notif', 'toastr.success("Data murid berhasil disimpan", "Berhasil!");');
                return redirect()->to(base_url('Admin/kelola_murid'));
            } else {
                session()->setFlashdata('notif', 'toastr.error("Gagal menyimpan data");');
                return redirect()->to(base_url('Admin/edit_murid/' . $user_id));
            }
        } else {
            session()->setFlashdata('notif', 'toastr.error("AKSES DITOLAK", "ERROR!");');
            return redirect()->to(base_url('Credentials'));
        }
    }

    public function simpanNewDataMurid()
    {
        if ((session()->get('level_akunPengguna') == $this->access_Level)) {
            $validator = $this->validate([
                'userName' => [
                    'rules'  => 'required|is_unique[user_tbl.user_name]'
                ],
                'nisMurid' => [
                    'rules'  => 'required'
                ],
                'namaLengkap' => [
                    'rules'  => 'required'
                ]
            ]);

            if ($validator == TRUE) {
                $alpha_num = '12345fdghijxyz';
                $charactersLength = strlen($alpha_num);
                $randomString = '';
                for ($i = 0; $i < 10; $i++) {
                    $randomString .= $alpha_num[rand(0, $charactersLength - 1)];
                }

                $user_id = $randomString;

                $detailMurid_user = [
                    'user_id' => $user_id,
                    'user_level' => 'murid',
                    'user_name' => $this->request->getPost('userName'),
                    'namalengkap_user' => $this->request->getPost('namaLengkap'),
                    'user_pass' => 'murid321',
                ];

                $detailMurid_murid = [
                    'user_id' => $user_id,
                    'nis_murid' => $this->request->getPost('nisMurid'),
                ];

                $this->User_->insert($detailMurid_user);
                $this->Murid_->insert($detailMurid_murid);
                session()->setFlashdata('notif', 'toastr.success("Data murid berhasil disimpan", "Berhasil!");');
                return redirect()->to(base_url('Admin/kelola_murid'));
            } else {
                session()->setFlashdata('notif', 'toastr.error("Gagal menyimpan data");');
                return redirect()->to(base_url('Admin/tambah_murid/'));
            }
        } else {
            session()->setFlashdata('notif', 'toastr.error("AKSES DITOLAK", "ERROR!");');
            return redirect()->to(base_url('Credentials'));
        }
    }

    public function hapusDataMurid(){
        if ((session()->get('level_akunPengguna') == $this->access_Level)) {
            $user_id = $this->request->getPost('u_id');
            $this->User_->delete($user_id);
            $this->Murid_->delete($user_id);
            session()->setFlashdata('notif', 'toastr.success("Data murid berhasil dihapus", "Berhasil!");');
            return redirect()->to(base_url('Admin/kelola_murid'));
        } else {
            session()->setFlashdata('notif', 'toastr.error("AKSES DITOLAK", "ERROR!");');
            return redirect()->to(base_url('Credentials'));
        }
    }
}
