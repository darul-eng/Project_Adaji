<div class="container">
    <p>Selamat Datang di ADAJI</p>
     <?php
          $info = $this->session->flashdata('info');
          if(!empty($info)){
              echo $info;
          }
        ?>
    <form method="post" action="<?=base_url('Auth/cekmasuktoko')?>">
      <div>
        <input type="text" name="emailtoko" id="emailtoko" placeholder="Email Toko" value="<?=set_value('emailtoko') ?>">
        <small class="text-danger"><?=form_error('emailtoko') ?></small>
      </div>
      <div>
        <input type="password" name="katasandi" id="katasandi" placeholder="Kata Sandi" value="<?=set_value('katasandi') ?>">
        <small class="text-danger"><?=form_error('katasandi') ?></small>
      </div>
      <button class="" type="submit">Masuk</button>
  </form>
  <a href="<?=base_url('Auth/daftartoko')?>">Daftarkan Toko Anda</a>
    
</div>