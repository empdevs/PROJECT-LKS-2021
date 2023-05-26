<?php
include_once('./config/config.php');
include_once('./template/header.php');

?>
	<div class="container-header h-100 column bg-linear-gradient text-white">
		<h1>Daftar Fasilitas Kesehatan</h1>
		<span class="mb-5">Berikut daftar fasilitas kesehatan kami.</span>
		<?php if(isset($_SESSION['user'])) { ?>
			<?php if($_SESSION['user']['level'] == 'admin') { ?>
				<a href='<?php echo $data['site']?>/admin/faskes/add.php' class="btn w-200 mb-2">Tambah Faskes</a>
			<?php } ?>
		 <?php } ?>
		<form method="GET" class="search-group">
			<input value="<?php if(isset($_GET['search'])){	
	echo mysqli_real_escape_string($mysqli, $_GET['search']);
} else {  echo ''; }?>" class="search-faskes" type="search" name="search" placeholder="Cari Fasilitas Kesehatan"/>
			<button type="submit" class="btn-search">Cari</button>
		</form>
		<div class="row overflow-x-auto">
			<?php 
			if(isset($_GET['search'])){
				$search = mysqli_real_escape_string($mysqli, $_GET['search']);
				$get_faskes = $mysqli->query("SELECT * FROM faskes WHERE nama like '%".$search."%' or kecamatan like '%".$search."%'");
			} else {
				$get_faskes = $mysqli->query("SELECT * FROM faskes");
			}
			while($faskes = mysqli_fetch_assoc($get_faskes)) {
			?>
			<div class="card-item">
				<img src="<?php echo $data['site']?>/assets/images/<?php echo $faskes['img']?>" class="card-img mb-2"/>
				<h5 class="text-black mb-2"><?php echo $faskes['nama']?></h5>
				<div class="mb-5">
				<span class="badge bg-primary"><?php echo $faskes['kecamatan']?></span>
				<span class="badge bg-warning">Kuota: <?php echo $faskes['kuota']?></span>
				</div>
				<?php if(isset($_SESSION['user'])) { ?>
				<?php if($_SESSION['user']['level'] == 'admin') { ?>
					<div class="row">
						<a href="<?php echo $data['site'] ?>/admin/faskes/delete.php?id=<?php echo $faskes['id']?>" class="btn btn-block mb-2 mr-2 font-14 bg-danger">Delete</a>
						<a href="<?php echo $data['site'] ?>/faskes.php?id=<?php echo $faskes['id']?>" class="btn btn-block mb-2 font-14 bg-warning">Detail</a>
					</div>
				<?php } ?>
				 <?php } ?>
				<a href="<?php echo $data['site'] ?>/faskes.php?id=<?php echo $faskes['id']?>" class="btn btn-block">Ikut Vaksin!</a>
			</div>
			<?php 
		}
		?>
		</div>
	</div>

<?php 
include_once('./template/footer.php');
?>