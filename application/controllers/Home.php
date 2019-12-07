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

	public function detail($id_brg){
		$data['barang'] = $this->model_barang->detail_brg($id_brg);

		$this->load->view('templates/header');
		$this->load->view('detail_barang',$data);
		$this->load->view('templates/footer');
	}

}
