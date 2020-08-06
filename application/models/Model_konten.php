<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_konten extends CI_Model {

	public function get_data()
	{
		// return $this->db->get('konten')->result_array();
		$this->db->select('konten.*,kategori.id_kategori AS id_kategori,kategori.nama');
		$this->db->join('kategori','konten.id_kategori = kategori.id_kategori');
		$this->db->from('konten');
		$query=$this->db->get();
		return $query->result_array();
	}
	public function get_data_by_id($id)
	{
		// return $this->db->get('konten')->result_array();
		$this->db->select('konten.*,kategori.id_kategori AS id_kategori,kategori.nama');
		$this->db->join('kategori','konten.id_kategori = kategori.id_kategori');
		$this->db->from('konten');
		$this->db->where('konten.id_konten',$id);
		$query=$this->db->get();
		return $query->result_array();
	}
	public function get_data_by_kategori($id)
	{
		// return $this->db->get('konten')->result_array();
		$this->db->select('konten.*,kategori.id_kategori AS id_kategori,kategori.nama');
		$this->db->join('kategori','konten.id_kategori = kategori.id_kategori');
		$this->db->from('konten');
		$this->db->where('kategori.id_kategori',$id);
		$query=$this->db->get();
		return $query->result_array();
	}

	public function get_resep_kuliner()
	{
		// return $this->db->get('konten')->result_array();
		$this->db->select('konten.*,kategori.id_kategori AS id_kategori,kategori.nama');
		$this->db->join('kategori','konten.id_kategori = kategori.id_kategori');
		$this->db->from('konten');
		$this->db->where('konten.id_kategori',2);
		$query=$this->db->get();
		return $query->result_array();
	}

	public function get_sejarah()
	{
		// return $this->db->get('konten')->result_array();
		$this->db->select('konten.*,kategori.id_kategori AS id_kategori,kategori.nama');
		$this->db->join('kategori','konten.id_kategori = kategori.id_kategori');
		$this->db->from('konten');
		$this->db->where('konten.id_kategori',1);
		$query=$this->db->get();
		return $query->result_array();
	}

	public function get_info_festival()
	{
		// return $this->db->get('konten')->result_array();
		$this->db->select('konten.*,kategori.id_kategori AS id_kategori,kategori.nama');
		$this->db->join('kategori','konten.id_kategori = kategori.id_kategori');
		$this->db->from('konten');
		$this->db->where('konten.id_kategori',3);
		$query=$this->db->get();
		return $query->result_array();
	}
	public function get_data_warung()
	{
		// return $this->db->get('konten')->result_array();
		$this->db->select('konten.*,kategori.id_kategori AS id_kategori,kategori.nama');
		$this->db->join('kategori','konten.id_kategori = kategori.id_kategori');
		$this->db->from('konten');
		$this->db->where('konten.id_kategori',4);
		$query=$this->db->get();
		return $query->result_array();
	}

	public function get_cerita_kuliner()
	{
		// return $this->db->get('konten')->result_array();
		$this->db->select('konten.*,kategori.id_kategori AS id_kategori,kategori.nama');
		$this->db->join('kategori','konten.id_kategori = kategori.id_kategori');
		$this->db->from('konten');
		$this->db->where('konten.id_kategori',5);
		$query=$this->db->get();
		return $query->result_array();
	}
	// public function input_data($data,$table)
	// {
	// 	$this->db->insert($table,$data);
	// }
	public function insert_data($data)
	{
		$this->db->insert('konten',$data);
		
	}
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
<<<<<<< HEAD
	public function detail_konten($judul)
	{
		// return $this->db->get('konten')->result_array();
		$this->db->select('konten.*,kategori.id_kategori AS id_kategori,kategori.nama');
		$this->db->join('kategori','konten.id_kategori = kategori.id_kategori');
		$this->db->from('konten');
		$this->db->where('judul', $judul);
		
		return $this->db->get()->row();
	}
=======
>>>>>>> master
}
?>
