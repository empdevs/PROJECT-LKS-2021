<?php 
	$puskesmas = data("SELECT * FROM puskesmas INNER JOIN jadwal_vaksin ON puskesmas.puskesmas_id = jadwal_vaksin.puskesmas_id ");
	$cek_pendaftaran = data("SELECT * FROM pendaftaran INNER JOIN user ON pendaftaran.user_id = user.user_id INNER JOIN jadwal_vaksin ON pendaftaran.jadwal_vaksin_id = jadwal_vaksin.jadwal_vaksin_id WHERE pendaftaran.user_id = '$user_id'");
	if(isset($_POST["daftar_vaksin"])){
		$user_id;
		$jadwal_vaksin_id = $_POST["jadwal_vaksin_id"];
		$tanggal_daftar = date("d-M-Y");

		mysqli_query($koneksi,"INSERT INTO pendaftaran VALUES('','$user_id','$jadwal_vaksin_id','$tanggal_daftar')");

		echo "<script>
				alert('Anda berhasil daftar untuk vaskin');
				document.location.href='my_profile.php?page=cek_pendaftaran';
			</script>";
	}
 ?>
<div class="pendaftaran">
	<div class="container">
				<?php if($cek_pendaftaran):?>
					<div class="info">
						<small>Anda sudah mendaftar, silahkan cek jadwal anda, <br> dan datang ke faskes sesuai tanggal yang anda pilih,silahkan cek <a href="my_profile.php?page=cek_pendaftaran"> Disini</a> </small>
					</div>
				<?php else: ?>
					<div class="text-right">
						<div class="info">
							<small>Pilih faskes terdekat dari rumahmu</small>
						</div>
					</div>
				<form action="" method="POST">
					<div class="form-control">
						<label>Jadwal Vaskinasi</label>
						<select name="jadwal_vaksin_id">
							<?php foreach($puskesmas as $p):?>
								<option value="<?=$p['jadwal_vaksin_id']?>"><?= strtoupper($p['nama_puskesmas']) ?> - (<?=$p['tanggal_vaksin']?>)</option>
							<?php endforeach;?>
						</select>
					</div>
					<div class="button text-right">
						<button class="btn text-white"  type="submit" name="daftar_vaksin">Daftar</button>
					</div>
				</form>
			<?php endif; ?>
		</div>
</div>