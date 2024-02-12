<?php

namespace App\Models;

use CodeIgniter\Model;

class M_gudang extends Model
{
	public function tampil($darren){
		return $this->db->table($darren)
						->get()
						->getResult();	
	}

	public function join($table1, $table2, $on){
		return $this->db->table($table1)
						->join($table2, $on, 'left')
						->get()
						->getResult();	
	}

	public function joinWhere($table1, $table2, $on, $where){
		return $this->db->table($table1)
						->join($table2, $on, 'right')
						->getWhere($where)
						->getRow();	
	}

	public function tambah($table,$isi){
		return $this->db->table($table)
						->insert($isi);
	}

	public function upload($file){
		$imageName = $file ->getName(); 
		$file->move(ROOTPATH . 'public/img', $imageName);
	}

	public function hapus($table,$where){
		return $this->db->table($table)
						->delete($where);
	}	

	public function getWhere($darren,$where){
		return $this->db->table($darren)
						->getWhere($where)
						->getRow();	
	}

	public function edit($darren,$isi,$where){
		
		return $this->db->table($darren)
						->update($isi,$where);	
	}
	
}