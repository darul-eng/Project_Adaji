<div class="container">
	<p>Selamat Datang di ADAJI</p>
	<form method="post" action="<?= base_url('Auth/cekdaftartoko') ?>" enctype="multipart/form-data">
		 <?php
            $info = $this->session->flashdata('info');
            if(!empty($info)){
                echo $info;
            }
          ?>
		<div>
			<input type="file" name="gambartoko" id="gambartoko">
		</div>
		<div>
			<input type="text" name="namatoko" id="namatoko" placeholder="Nama Toko" value="<?=set_value('namatoko') ?>">
			<small class="text-danger"><?=form_error('namatoko') ?></small>
      	</div>
		<div>
			<input type="email" name="emailtoko" id="emailtoko" placeholder="Email Toko" value="<?=set_value('emailtoko') ?>">
			<small class="text-danger"><?=form_error('emailtoko') ?></small>
		</div>
		<div>
			<input type="text" name="alamattoko" id="alamattoko" placeholder="Alamat Toko" value="<?=set_value('alamattoko') ?>">
			<small class="text-danger"><?=form_error('alamattoko') ?></small>
		</div>
		<div>
			<input type="text" name="kontaktoko" id="kontaktoko" placeholder="Kontak Toko" value="<?=set_value('kontaktoko') ?>">
			<small class="text-danger"><?=form_error('kontaktoko') ?></small>
		</div>
		<div>
			<input type="password" name="katasandi1" id="katasandi1" placeholder="Kata Sandi">
			<small class="text-danger"><?=form_error('katasandi1') ?></small>
		</div>
		<div>
			<input type="password" name="katasandi2" id="katasandi2" placeholder="Konfirmasi Kata Sandi">
			<small class="text-danger"><?=form_error('katasandi2') ?></small>
		</div>
		
		
		<button type="submit">Daftar</button>
	</form>

	<a href="<?=base_url('Auth/masuktoko')?>">Masuk Ke Toko</a>
</div>