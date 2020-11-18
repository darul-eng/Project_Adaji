 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-12">
           <h1 class="m-0">Daftar Barang</h1>

           <div class="card-deck" id="list-view" style="">
             <table class="table table-sm table-hover">
               <thead>
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Barang</th>
                   <th scope="col">stok</th>
                   <th scope="col">Harga</th>
                   <th scope="col">Tanggal Masuk</th>
                   <th scope="col">Action</th>
                 </tr>
               </thead>
               <tbody>
                 <?php $i = 1; ?>
                 <?php foreach ($barang as $brng) : ?>
                   <tr>
                     <th scope="row"><?= $i; ?></th>
                     <td><?= $brng['nama_barang'] ?></td>
                     <td><?= $brng['jumlah_barang'] ?></td>
                     <td>Rp.<?= $brng['harga_barang'] ?></td>
                     <td><?= $brng['tanggal_upload'] ?></td>
                     <td>
                       <a href="<?= base_url(); ?>barang/destroy/<?= $brng['id_barang']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin?')"><i class="fa fa-trash"></i></a>
                       <a href="<?= base_url(); ?>barang/show/<?= $brng['id_barang']; ?>" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                     </td>
                   </tr>
                   <?php $i++; ?>
                 <?php endforeach; ?>
               </tbody>
             </table>
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