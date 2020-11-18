 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-12">
           <h1 class="m-0">Daftar Toko</h1>

           <div class="card-deck" id="list-view" style="">
             <table class="table table-sm table-hover">
               <thead>
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Nama Toko</th>
                   <th scope="col">Alamat</th>
                   <th scope="col">Email</th>
                   <th scope="col">Kontak</th>
                   <!-- <th scope="col">Tanggal Masuk</th> -->
                   <th scope="col">Action</th>
                 </tr>
               </thead>
               <tbody>
                 <?php $i = 1; ?>
                 <?php foreach ($toko as $tk) : ?>
                   <tr>
                     <th scope="row"><?= $i; ?></th>
                     <td><?= $tk['nama_toko'] ?></td>
                     <td><?= $tk['alamat_toko'] ?></td>
                     <td><?= $tk['email'] ?></td>
                     <td><?= $tk['kontak'] ?></td>
                     <td>
                       <a href="<?= base_url(); ?>toko/destroy/<?= $tk['id_toko']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin?')"><i class="fa fa-trash"></i></a>
                       <a href="<?= base_url(); ?>toko/show/<?= $tk['id_toko']; ?>" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
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