<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_gudang;

class Home extends BaseController
{
	public function index()
	{
		echo view('header');
	echo view('menu');
	echo view('home'); 
	echo view('footer');
	}

	public function barang()
	{
		
		$model = new M_gudang;
		$data['darren'] = $model->tampil('gudang');
		echo view('header');
		echo view('menu');
		echo view('barang',$data); 
		echo view('footer');

		}
		
		public function TambahBarang()
{

	$model = new M_gudang;
	$data['darren'] = $model->tampil('gudang');
	echo view('header');
	echo view('menu');
	echo view('tambahbarang',$data); 
	echo view('footer');
}

public function aksi_t_barang()
{
	$nama = $this->request->getPost('nama');
	$kode = $this->request->getPost('kode');
		
	$tabel=array(
		'nama_barang'=>$nama,
		'kode_barang'=>$kode,
		'stok'=>'0'

	);

	$model=new M_gudang;
	$model->tambah('gudang', $tabel);
	return redirect()->to('home/barang');

}

public function hapusbarang($id)
{
	$model = new M_gudang;
	$where = array('id_barang' =>$id);
	$model->hapus('gudang', $where);
	return redirect()->to('home/barang');
	
}

public function editbarang($id)
{

	$model = new M_gudang;
	$where = array('id_barang' => $id);
	$data['darren'] = $model->getWhere('gudang', $where);
	echo view('header');
	echo view('menu');
	echo view('e_barang',$data); 
	echo view('footer');

}

public function aksieditbarang()
{
	$model = new M_gudang; 
	$a = $this->request->getPost('nama');
	$b = $this->request->getPost('kode');
	$c = $this->request->getPost('stok');
	$id = $this->request->getPost('id');
	$where = array('id_barang'=>$id);

	$isi = array(
		'nama_barang'=> $a,
		'kode_barang'=> $b,		
		'stok'=> $c,		
	);
	$model->edit('gudang',$isi, $where);
	return redirect()->to('home/barang');
}

}


