 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">Detail Toko</h1>

           <div class="card mb-3" style="">
             <div class="row no-gutters">
               <div class="col-md-6">
                 <?php foreach ($toko as $tk) : ?>
                   <img src="<?= base_url('') ?>/assets/img/product/<?= $tk['foto'] ?>" class="card-img">
               </div>
               <div class="col-md-6">
                 <div class="card-body">
                   <h5 class="card-title"><?= $tk['nama_toko']; ?></h5>
                   <p class="card-text"><?= $tk['email'] ?></p>
                   <p class="card-text"><?= $tk['kontak'] ?></p>
                   <p class="card-text"><small class="text-muted"><?= $tk['alamat_toko'] ?></small></p>
                   <a href="<?= base_url(); ?>toko" class="btn btn-sm btn-primary"><i class="fas fa-backward"></i></a>
                   <a href="<?= base_url(); ?>toko/destroy/<?= $tk['id_toko']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin?')"><i class="fa fa-trash"></i></a>
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