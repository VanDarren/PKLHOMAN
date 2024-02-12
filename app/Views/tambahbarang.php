<main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Barang</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
             
                <form action="<?= base_url('home/aksi_t_barang')?>" method="POST">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama barang</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama" placeholder="Enter Nama Barang" 
                  name="nama">
                  </div>

                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Kode Barang</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="kode" placeholder="Enter Kode Barang" 
                  name="kode">
                  </div>
                </div>

                

                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

       
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
