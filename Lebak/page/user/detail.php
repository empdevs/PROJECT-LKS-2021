<?php
$user_id = $_GET["user_id"];
	$peserta_vaksin = data("SELECT * FROM user WHERE user_id='$user_id' ");
 ?>
<div class="user">
	<div class="container">
		<div class="judul-cek-pendaftaran">					
			<h3>Detail Peserta Vaksin</h3>
		</div>
		<div class="modal">
			<?php foreach($peserta_vaksin as $pv): ?>
				<p>Nama Depan : <?= $pv['nama_depan']?></p>
				<p>Nama Keluarga : <?= $pv['nama_keluarga']?></p>
				<p>Nik : <?= $pv['nik']?></p>
				<p>Umur <?= $pv['umur']?></p>
				<p>Telepon : <?= $pv['telepon']?></p>
				<p>Email : <?= $pv['email']?></p>
				<p>Alamat : <?= $pv['alamat']?></p>
				<p>Kota : <?= $pv['kota']?></p>
				<p>Provinsi : <?= $pv['provinsi']?></p>

				<div class="ubah">
					<a class="text-white" href="my_profile.php?page=user&action=ubah&user_id=<?= $pv['user_id'] ?>">Ubah</a>
				</div>
				<div class="hapus">
					<a class="text-white" href="my_profile.php?page=user&action=hapus&user_id=<?= $pv['user_id'] ?>">Hapus</a>
				</div>
			<?php endforeach; ?>
		</div>	
	</div>
</div>