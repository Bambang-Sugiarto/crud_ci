<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_karyawan');
	}


	public function index()
	{
		$data['karyawan'] = $this->model_karyawan->getAllKaryawan();
		$jdl['judul'] = "Home";
		if ($this->input->post('keyword')) {
			$data['karyawan'] = $this->model_karyawan->cari();
		}
		$this->load->view('karyawan/index', $data, $jdl, $data);
	}

	public function tambah()
	{
		# code...
		$data['judul'] = "Tambah";
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		if ($this->form_validation->run() == false) {

			$this->load->view('karyawan/tambah', $data);
		} else {

			$this->model_karyawan->tambah_karyawan();
			redirect('home');
		}
	}

	public function hapus($id)
	{
		# code...
		$this->model_karyawan->hapus_karyawan($id);
		redirect('home');
	}

	public function ubah($id)
	{
		# code...
		$data['judul'] = "Ubah";
		$data['karyawan'] = $this->model_karyawan->getIdKaryawan($id);
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		if ($this->form_validation->run() == false) {

			$this->load->view('karyawan/ubah', $data);
		} else {

			$this->model_karyawan->ubah_karyawan();
			redirect('home');
		}
	}
}
