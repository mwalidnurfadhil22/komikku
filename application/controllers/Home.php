<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		if ($this->input->post('keyword')) {
			$data['barang'] = $this->model_barang->cariBarang()->result();
		}
		$this->load->view('templates/header');
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}

}
