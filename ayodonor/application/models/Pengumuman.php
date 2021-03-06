<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Model
{
    public function fetch()
    {
        return $this->db->get('pengumuman')->result_array();
    }
    public function getPengumumanById($id)
    {
        return $this->db->where('id_pengumuman', $id)->get('pengumuman')->row_array();
    }
    public function addPengumuman()
    {
        $data  = [ 
            'title' => $this->input->post('title', true),
            'description' => $this->input->post('description', true),
            'id_admin' => $this->session->userdata('id_admin'),
            'date_created' => date('d F Y')
        ];
        $this->db->insert('pengumuman', $data);
    }
    public function editPengumuman()
    {
        $id = $this->input->post('id_pengumuman');
        $data  = [
            'title' => $this->input->post('title', true),
            'description' => $this->input->post('description', true),
        ];
        $this->db->set($data);
        $this->db->where('id_pengumuman', $id);
        $this->db->update('pengumuman');   
    }
    public function delete($id)
    {
        $this->db->delete('pengumuman', array('id_pengumuman' => $id));
    }
}
