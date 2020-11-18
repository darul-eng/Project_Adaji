 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">Detail Barang</h1>

           <div class="card mb-3" style="">
             <div class="row no-gutters">
               <div class="col-md-6">
                 <?php foreach ($barang as $brng) : ?>
                   <img src="<?= base_url('') ?>/assets/img/product/<?= $brng['gambar_barang'] ?>" class="card-img">
               </div>
               <div class="col-md-6">
                 <div class="card-body">
                   <h5 class="card-title"><?= $brng['nama_barang']; ?></h5>
                   <p class="card-text"><?= $brng['deskripsi_barang'] ?></p>
                   <p class="card-text"><?= $brng['jenis_kemasan'] ?></p>
                   <p class="card-text">Rp.<?= $brng['harga_barang'] ?></p>
                   <p class="card-text">Stok : <?= $brng['jumlah_barang'] ?></p>
                   <p class="card-text"><small class="text-muted">Tanggal Masuk <?= $brng['tanggal_upload'] ?></small></p>
                   <a href="<?= base_url(); ?>barang/" class="btn btn-sm btn-primary"><i class="fas fa-backward"></i></a>
                   <a href="<?= base_url(); ?>barang/destroy/<?= $brng['id_barang']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin?')"><i class="fa fa-trash"></i></a>
                 </div>
               <?php endforeach; ?>
               </div>
             </div>
           </div>

         </div><!-- /.col -->
       </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

   <!-- Main content -->

   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->