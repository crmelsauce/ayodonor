<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    { 
        if (!$this->session->userdata('email')) {
            redirect(base_url('Home/login'));
        } else {
            $data['loggedin'] = $this->Peserta->getPesertaByEmail($this->session->userdata('email'));
            $this->load->view('dashboard/index', $data);
        }
    }
    public function daftarDonor()
    {
        if (!$this->session->userdata('email')) {
            redirect(base_url('Home/login'));
        } else {
            $data['loggedin'] = $this->Peserta->getPesertaByEmail($this->session->userdata('email'));
            $data['tempat_donor'] = $this->Tempat_donor->fetch();
            $this->load->view('dashboard/daftarDonor', $data);
        }
    }
    
    public function form_Donor($id_tempat)
    {
        if (!$this->session->userdata('email')) {
            redirect(base_url('Home/login'));
        } else {
            $data['loggedin'] = $this->Peserta->getPesertaByEmail($this->session->userdata('email'));
            $data['id_tempat'] = $id_tempat;
            $this->load->view('dashboard/form_donor',$data);
        }
    }

    public function registDonor($id_tempat,$data){

         $this->form_validation->set_rules($this->Donor->rules);

        if ( $this->form_validation->run() == FALSE ) {
             $this->session->set_flashdata('SuccessReg', 'error');
            $this->load->view('dashboard/form_donor',$id_tempat,$data);
            // var_dump($this->Peserta->rules); die;
        } else {
            $this->Donor->register($id_tempat,$data);
            $this->session->set_flashdata('SuccessReg', 'success');
            redirect('user/daftarDonor');
            // harusnya redirect ke dashboard
            // redirect(base_url('/home/login'));
        }

    }
    public function pengumuman()
    {
        if (!$this->session->userdata('email')) {
            redirect(base_url('Home/login'));
        } else {
            $data['loggedin'] = $this->Peserta->getPesertaByEmail($this->session->userdata('email'));
            $data['pengumuman'] = $this->Pengumuman->fetch();
            $this->load->view('dashboard/pengumuman', $data);
        }
    }
    public function ganti_password()
    {
        $this->form_validation->set_rules(array(
            array(
                'field' => 'password_current',
                'label' => 'Current password',
                'rules' => 'required|trim'
            ), array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|trim|matches[password_confirmation]'
            ), array(
                'field' => 'password_confirmation',
                'label' => 'Password confirmation',
                'rules' => 'required|trim|matches[password]'
            )
        ));
        $data['loggedin'] = $this->Peserta->getPesertaByEmail($this->session->userdata('email'));
        if (!$this->form_validation->run()) {
            $this->load->view('dashboard/ganti_password.php', $data);
        } else {
            if (!password_verify($this->input->post('password_current'), $data['loggedin']['password'])) {
                $this->session->set_flashdata('message', 'Password salah.');
                redirect(base_url('user/ganti_password'));
            } else {
                $this->Peserta->ganti_password($data['loggedin']['id_peserta']);
                $this->session->set_flashdata('message', 'Password Berhasil diubah');
                redirect(base_url('user/ganti_password'));
            }
        }
    }
    public function logout()
    {
        session_destroy();
        redirect(base_url());
    }

    public function editPeserta()
    {
        $this->Peserta->edit2();
        redirect('user/index');
    }
}
