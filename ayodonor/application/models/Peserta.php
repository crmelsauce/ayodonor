<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta extends CI_Model
{
    public $rules = array(
        array(
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'instansi',
            'label' => 'Instansi',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim|is_unique[peserta.email]'
        ),
        array(
            'field' => 'asal',
            'label' => 'Asal',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'nohp',
            'label' => 'NoHP',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim|is_unique[peserta.email]'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|trim|matches[re-password]|min_length[6]'
        ),
        array(
            'field' => 're-password',
            'label' => 're-Password',
            'rules' => 'required|trim|matches[password]'
        ),
    );
    public function register()
    {
        $data = [
            'nama'      => $this->input->post('nama', true),
            'instansi'  => $this->input->post('instansi', true),
            'asal'      => $this->input->post('asal', true),
            'nohp'      => $this->input->post('nohp', true),
            'email'     => $this->input->post('email', true),
            'password'  => $this->input->post('password', true),
        ];

        // $config['file_name'] = $this->db->query("SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'webpro' AND TABLE_NAME = 'peserta'")->row()->AUTO_INCREMENT;
        $this->db->insert('peserta', $data);
    }
    public function getPeserta()
    {
        return $this->db->get_where('peserta', ['email' => $this->input->post('email', true)])->row_array();
    }
    public function get_info(){
         $data = [
            'total' => $this->db->count_all_results('peserta'),
            'terdaftar' => $this->db->where('status', '1')->count_all_results('peserta'),
            'approve' => $this->db->where('status', '2')->count_all_results('peserta'),
            'closed' => $this->db->where('status', '3')->count_all_results('peserta')
        ];
        return $data;
    }
    public function fetch()
    {
        return $this->db->get('peserta')->result_array();
    }
    public function fetch_approval()
    {
        return $this->db->where('status', '2')->get('peserta')->result_array();
    }
    public function getPesertaByEmail($email)
    {
        // akwokaowkokaokw
        return $this->db->get_where('peserta', ['email' => $email])->row_array();
    }
    public function ganti_password($id)
    {
        $data = array(
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        );
        $where = array('id_peserta' => $id);
        $this->db->where($where)->update('peserta', $data);
    }
    public function delete($id)
    {
        $this->db->delete('peserta', array('id_peserta' => $id));
    }
    public function edit()
    {
        $where = array('id_peserta' => $this->input->post('id_peserta'));
        $data = [
            'nama' => $this->input->post('nama', true),
            'instansi' => $this->input->post('instansi', true),
            'asal' => $this->input->post('asal', true),
            'nohp' => $this->input->post('nohp', true),
            'email' => $this->input->post('email', true),
        ];
        $this->db->where($where)->update('peserta', $data);
    }
}
