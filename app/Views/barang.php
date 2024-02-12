<main id="main" class="main">

<div class="pagetitle">
  <h1>Gudang</h1>
  <nav>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
	  <li class="breadcrumb-item active">Data</li>
	</ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
	<div class="col-lg-12">

	  <div class="card">
		<div class="card-body">
		  <h5 class="card-title">Gudang</h5>
		  <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
		  <a href="<?= base_url ('home/tambahbarang')?> ">
		<button class="btn btn-success"><i class="bx bx-duplicate"></i></button>
	</a>
		  <!-- Table with stripped rows -->
		  <table class="table datatable">
			<thead>
			  <tr>
				<th scope="col">No</th>
				<th scope="col">Nama Barang</th>
				<th scope="col">Kode Barang</th>
				<th scope="col">Stok</th>
				<th scope="col">Aksi</th>

			  </tr>
			</thead>
			<tbody>
			<?php
	$no=1;
	foreach ($darren as $key) {
		
	?>
	<tr>
	<td><?= $no++ ?></td>
	<td><?= $key->nama_barang ?></td>
	<td><?= $key->kode_barang ?></td>
	<td><?= $key->stok ?></td>
	
	<td>
		
		<a href=" <?= base_url('home/editbarang/'.$key->id_barang)?>">
		<button class="btn btn-warning">Edit</i></button>
		</a>

		<a href=" <?= base_url('home/hapusbarang/'.$key->id_barang)?>">
		<button class="btn btn-danger">Hapus</i></button>
		</a>
	</td>
	</tr>
<?php } ?>
			</tbody>
		  </table>
		  <!-- End Table with stripped rows -->

		</div>
	  </div>

	</div>
  </div>
</section>

</main><!-- End #main -->

