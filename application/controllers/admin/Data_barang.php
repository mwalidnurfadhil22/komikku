<?php 
class Data_barang extends CI_Controller
{
	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_barang', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah(){
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/tambah_barang');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi(){

		$judul 		= $this->input->post('judul');
		$penulis 	= $this->input->post('penulis');
		$penerbit 	= $this->input->post('penerbit');
		$thn_terbit = $this->input->post('thn_terbit');
		$kategori 	= $this->input->post('kategori');
		$harga 		= $this->input->post('harga');
		$stok 		= $this->input->post('stok');
		$gambar 	= $_FILES['gambar']['name'];

		if($gambar){
			$config['upload_path'] = './assets/img/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')) {
				echo "Gambar gagal DI Upload!";
			} else {
				
				$gambar = $this->upload->data('file_name');
			}
		}

		$data = array(
			'judul' => $judul,
			'penulis' => $penulis,
			'penerbit' => $penerbit,
			'thn_terbit' => $thn_terbit,
			'kategori' => $kategori,
			'harga' => $harga,
			'stok' => $stok,
			'gambar' => $gambar
		);

		$this->model_barang->tambah_barang($data, 'tbl_barang');

		redirect('admin/data_barang/index');
	}

	public function edit($id){
		$where = array('id_brg' => $id);
		$data['barang'] = $this->model_barang->edit_barang($where, 'tbl_barang')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_barang', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$judul = $this->input->post('judul');
		$penulis = $this->input->post('penulis');
		$penerbit = $this->input->post('penerbit');
		$thn_terbit = $this->input->post('thn_terbit');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');

		$this->model_barang->update_data();

		redirect('admin/data_barang/index');
	}
	
	public function hapus($id){
		$where = array('id_brg' => $id );
		$this->model_barang->hapus_data($where,'tbl_barang');
		redirect('admin/data_barang/index');
	}

	public function detail($id_brg){
		$data['barang'] = $this->model_barang->detail_brg($id_brg);

		$this->load->view('templates/header');
		$this->load->view('admin/detail_barang',$data);
		$this->load->view('templates/footer');
	}

}