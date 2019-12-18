<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function index()
	{
        $this->load->view('templates/header');
		$this->load->view('cart');
		$this->load->view('templates/footer');
		
    }
    
    public function add()
    {
        $id = $this->uri->segment(3);

        $this->db->select('*');
        $this->db->from('tbl_barang');
        $this->db->where('id_brg', $id);
        $query = $this->db->get();
        $row = $query->row();

        $data = array(
            'id' => $id,
            'qty' => 1,
            'price' => $row->harga,
            'name' => $row->judul,
        );

        $this->cart->insert($data);
        redirect('home', 'refresh');

    }

    public function hapus_keranjang($rowid=''){
		if($rowid){
			// hapus item			
			$this->cart->remove($rowid);
			$this->session->set_flashdata('sukses', 'Data keranjang belanja telah dihapus');
			redirect('cart');
		} else {
			// hapus all
			$this->cart->destroy();
			$this->session->set_flashdata('sukses', 'Data keranjang belanja telah dihapus');
			redirect('cart');
		}
		
	}

	// public function update_keranjang($rowid){
	// 	if($rowid){
	// 		$data = array(
	// 			'rowid' => $rowid,
	// 			'qty' => $this->input->post('qty')
	// 		);
	// 		$this->cart->update($data);
	// 		$this->session->set_flashdata('sukses', 'Data Berhasil Di Update');
	// 		redirect('cart');
	// 	}else{
	// 		redirect('home');
	// 	}
	// }

	public function pembayaran(){
		$this->load->view('templates/header');
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');
	}
}
