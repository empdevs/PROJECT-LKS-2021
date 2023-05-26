<?php
include_once('../../controller/faskes/form_add.php');
include_once('../../template/header.php');
?>
<div class="container-header column center">
	<form method="POST" enctype="multipart/form-data" class="card-auth">
		<?php 
			if(isset($_SESSION['alert'])){
			?>
			<div class="alert bg-<?php echo $_SESSION['alert']['type']?>">
				<?php echo $_SESSION['alert']['message'] ?>
			</div>
			<?php } ?>
			<div class="input-group">
				<input class="input-form" type="file" name="file" placeholder="Foto Faskes">
				<input class="input-form" type="number" name="kuota" placeholder="Kuota">
				<input class="input-form" type="text" name="kecamatan" placeholder="Kecamatan">
				<input class="input-form" type="text" name="nama_faskes" placeholder="Nama Faskes">
				<input class="input-form" type="text" name="deskripsi" placeholder="Deskripsi">
			</div>
			<span class="mb-2">Perlu bantuan? <a href="<?php echo $data['site']?>/hubungi_kami.php">Hubungi kami</a></span>
			<div class="row">
				<button type="submit" class="btn w-200 mr-2" name="add_faskes">Tambah Faskes</button>
				<a href="<?php echo $data['site'].'/admin/list-faskes.php'?>" class="btn w-200 bg-danger" >Kembali</a>
			</div>
		</form>
</div>
<?php 
include_once('../../template/footer.php');
?>