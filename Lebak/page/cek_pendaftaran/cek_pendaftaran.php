<?php 
	$puskesmas = data("SELECT * FROM pendaftaran INNER JOIN user ON pendaftaran.user_id = user.user_id INNER JOIN jadwal_vaksin ON pendaftaran.jadwal_vaksin_id = jadwal_vaksin.jadwal_vaksin_id WHERE pendaftaran.user_id = '$user_id'");
	 foreach($puskesmas as $p){
	 	$puskesmas_id = $p['puskesmas_id'];

	 	 $nama_puskesmas = data("SELECT nama_puskesmas FROM puskesmas WHERE puskesmas_id = '$puskesmas_id'");
		 foreach($nama_puskesmas as $np){
		 	$puskesmas_nama = $np['nama_puskesmas'];
		 }

	 }

 ?>
<div class="cek-pendaftaran">
	<div class="container">
		<div class="judul-cek-pendaftaran">					
			<h3>Jadwal Anda</h3>
		</div>
		<table cellspacing="0" style="border: 1px #6600ff solid !important; font-size: 12px; width: 100%;">
			<tr>
				<td>No</td>
				<td>Tempat</td>
				<td>Alamat</td>
				<td>Tanggal Vaksin</td>
				<td>Tanggal Daftar</td>
			</tr>	
			<?php $no=1; ?>
		
			<?php foreach($puskesmas as $p): ?>
				<tr>
					<td><?= $no;?></td>
					<td><?= $puskesmas_nama?></td>
					<td><?= $p['alamat'] ?></td>
					<td><?= $p['tanggal_vaksin'] ?></td>
					<td><?= $p['tanggal'] ?></td>
				</tr>		
			<?php endforeach; ?>
		</table>
			<?php if(empty($puskesmas)):?>
				<p>Anda belum daftar, Segera daftar <a href="my_profile.php?page=pendaftaran">Disini</a></p>
			<?php endif; ?>			
	</div>
</div>
