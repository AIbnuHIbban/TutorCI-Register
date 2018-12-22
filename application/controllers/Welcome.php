<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view('welcome_message');
	}

	public function login(){
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);

		// Load Model
		$this->load->model('M_Welcome');

		$cek = $this->M_Welcome->cekLogin($data)->num_rows();
		
		$data_user = $this->M_Welcome->cekLogin($data)->row();

		if ($cek > 0) {
			$sess = array(
				'username'  => $data_user->username,
				'status'	=> TRUE
			);

			$this->session->set_userdata($sess);
			redirect('admin');
		}else{
			redirect(base_url());
		}

	}

	public function admin(){
		if ($this->session->userdata('status') == TRUE ) {
			$this->load->view('halaman_admin');
		}else{
			redirect(base_url());
		}
		
	}

	public function logout(){
		session_destroy();
		redirect(base_url());
	}

	public function keHalamanDaftar(){
		$this->load->view('daftar');
	}

	public function prosesdaftar(){
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
		);

		$this->load->model('M_Welcome');
		$input = $this->M_Welcome->daftar($data);

		if($input){
			$this->session->set_flashdata('pesan','Berhasil Register, Silahkan Login!!');
			redirect(base_url());
		}else{
			echo "Gagal";
		}
	}

}
