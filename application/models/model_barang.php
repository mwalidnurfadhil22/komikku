<?php

/**
* 
*/
class Model_barang extends CI_model
{
	
	public function tampil_data()
	{
		return $this->db->get('tbl_barang');
	}

	public function tambah_barang($data, $table){
		$this->db->insert($table, $data);
	}

	public function edit_barang($where, $table){
		return $this->db->get_where($table, $where);
	}

	public function update_data(){
		$data = [
			"judul" => $this->input->post('judul'),
			"penulis" => $this->input->post('penulis'),
			"penerbit" => $this->input->post('penerbit'),
			"thn_terbit" => $this->input->post('thn_terbit'),
			"kategori" => $this->input->post('kategori'),
			"harga" => $this->input->post('harga'),
			"stok" => $this->input->post('stok')
		];
		$this->db->where('id_brg', $this->input->post('id_brg'));
		$this->db->update('tbl_barang', $data);
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function cariBarang(){
		$keyword = $this->input->post('keyword', true);
		$this->db->like('judul', $keyword);
		$this->db->or_like('penulis', $keyword);
		$this->db->or_like('penerbit', $keyword);
		$this->db->or_like('thn_terbit', $keyword);
		$this->db->or_like('kategori', $keyword);
		$this->db->or_like('harga', $keyword);
		
		return $this->db->get('tbl_barang');
	}

	public function detail_brg($id_brg){
		$result = $this->db->where('id_brg',$id_brg)->get('tbl_barang');
		if($result->num_rows()>0){
			return $result->result();
		}else{
			return false;
		}
	}
	
}