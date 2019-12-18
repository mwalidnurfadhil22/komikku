<body>
<!-- Navigation -->
<nav class="navbar navbar-expand fixed-top" style="background-image: url(<?= base_url('assets/img/navbar.jpg')?>); height: 5rem;" >
  <div class="container">
    <a class="navbar-brand" href="<?= base_url()?>"><img src="assets/img/logo.jpg" alt="logo" style="width: 100px; height:80px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="col">
      <form action="" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari komik ...." name="keyword">
          
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
          </div>
        </div>
      </form>
    </div>

    <div class="navbar">
      <ul class="nav navbar-nav">
        <li>
          <?php 
          $Keranjang = 'Keranjang Belanja: '.$this->cart->total_items(). ' items' 
          ?>

          <?= anchor('home/detail_keranjang', $Keranjang) ?>
        </li>
      </ul>
    </div>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link text-secondary" href="<?= base_url('cart') ?>">
            <i class="fas fa-shopping-cart"><sup><?= count($this->cart->contents()); ?></sup></i>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('auth'); ?>" class="nav-link" href="#"><i class="fas fa-user"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <!-- Page Content -->
  <div class="container mt-6">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <?php if ( empty($barang) ) : ?>
      <div class="alert alert-danger mt-4" role="alert" style="text-align: center;">
        Data Yang Anda Cari Tidak Tersedia
      </div>
    <?php endif; ?>
    <div class="row mt-3 mb-5">

      <?php foreach ($barang as $brg) :?>
        <div class="card mt-4 ml-4 mb-4" style="width: 16rem">
          <img src="<?= base_url().'/assets/img/'.$brg->gambar ?>" class="card-img-top" style="height: 20rem;" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $brg->judul ?></h5>
            <small>oleh : <?= $brg->penulis ?></small>
            <br>
            <small>(<?= $brg->penerbit ?>)</small>
            <br>
            <small>Stok : <?= $brg->stok ?></small>
            <br>
            <span class="badge badge-pill badge-success mb-3">Rp. <?= number_format($brg->harga, 0,',','.') ?></span><br>
            <a href="<?= base_url(); ?>cart/add/<?= $brg->id_brg ?>" class="btn btn-sm btn-primary under">Tambah Ke Keranjang</a>
            <a href="<?= base_url(); ?>Home/detail/<?= $brg->id_brg ?>" class="btn btn-sm btn-success">Detail</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <!-- /.container -->