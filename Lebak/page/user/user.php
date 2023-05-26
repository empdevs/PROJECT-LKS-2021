<?php
	$peserta_vaksin = data("SELECT * FROM user");
 ?>
<div class="user">
	<div class="container">
		<div class="d-flex justify-content-between">
			<div class="judul-cek-pendaftaran">					
				<h3>Peserta Vaksin</h3>
			</div>
			<div class="tambah">
				<a class="text-white" href="my_profile.php?page=user&action=tambah">+ Tambah peserta</a>
			</div>
		</div>
		<table cellspacing="0" style="border: 1px #6600ff solid !important; font-size: 12px; width: 100%;">
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>Nik</td>
				<td>Email</td>
				<td>Action</td>
			</tr>	
			<?php $no=1; ?>
		
			<?php foreach($peserta_vaksin as $pv): ?>
				<tr>
					<td><?= $no;?></td>
					<td><?= $pv['nama_depan']?></td>
					<td><?= $pv['nik']?></td>
					<td><?= $pv['email']?></td>
					<td>
						<div class="btn">
							<a class="text-white" href="my_profile.php?page=user&action=detail&user_id=<?= $pv['user_id'] ?>">Detail</a>
						</div>
					</td>
				</tr>		
			<?php $no++; ?>
			<?php endforeach; ?>
		</table>	
	</div>
</div>