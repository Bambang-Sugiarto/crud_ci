<?php
class Model_karyawan extends CI_Model
{
    public function getAllKaryawan()
    {
        # code...
        return $this->db->get('tb_karyawan')->result_array();
    }

    public function tambah_karyawan()
    {
        # code...
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $data = array(
            'nama' => $nama,
            'email' => $email,
            'alamat' => $alamat
        );
        $this->db->insert('tb_karyawan', $data);
    }

    public function hapus_karyawan($id)
    {
        # code...
        $this->db->delete('tb_karyawan', ['id' => $id]);
    }

    public function getIdKaryawan($id)
    {
        # code...
        return $this->db->get_where('tb_karyawan', ['id' => $id])->row_array();
    }

    public function ubah_karyawan()
    {
        # code...
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $data = array(
            'nama' => $nama,
            'email' => $email,
            'alamat' => $alamat
        );
        $this->db->where('id', $id);
        $this->db->update('tb_karyawan', $data);
    }

    public function cari()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nama', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('alamat', $keyword);
        return $this->db->get('tb_karyawan')->result_array();
    }
}
