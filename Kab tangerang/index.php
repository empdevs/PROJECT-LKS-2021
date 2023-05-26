<?php
include_once('./config/config.php');
include_once('./template/header.php');
?>
	<div class="container-header row flex-wrap space-around align-center">
			<?php 
			if(isset($_SESSION['alert'])){
			?>
			<div class="alert bg-<?php echo $_SESSION['alert']['type']?>">
				<?php echo $_SESSION['alert']['message'] ?>
			</div>
			<?php } ?>
		<div class="column">
			<h1>Selamat datang di AyoVaksin!</h1>
			<span class="mb-2">Dengan vaksinasi kamu bisa membantu orang disekitarmu.</span>
			<a href="<?php echo $data['site']?>/register.php" class="btn mb-2">Daftar</a>
		</div>
		<img class="img-rounded img-banner" src="<?php echo $data['site']?>/assets/images/29.jpeg">
	</div>
	<div class="container column bg-linear-gradient text-white">
		<h1>Daftar Fasilitas Kesehatan</h1>
		<span class="mb-5">Berikut daftar fasilitas kesehatan kami.</span>
		<div class="row overflow-x-auto mb-5">
			<?php 
			$get_faskes = $mysqli->query("SELECT * FROM faskes");
			while($faskes = mysqli_fetch_assoc($get_faskes)) {
			?>
			<div class="card-item">
				<img src="<?php echo $data['site']?>/assets/images/<?php echo $faskes['img']?>" class="card-img mb-2"/>
				<h5 class="text-black mb-2"><?php echo $faskes['nama']?></h5>
				<div class="mb-5">
				<span class="badge bg-primary"><?php echo $faskes['kecamatan']?></span>
				<span class="badge bg-warning">Kuota: <?php echo $faskes['kuota']?></span>
				</div>
				<a href="<?php echo $data['site'] ?>/faskes.php?id=<?php echo $faskes['id']?>" class="btn btn-block">Ikut Vaksin!</a>
			</div>
			<?php 
		}
		?>
		</div>
		<a href="<?php echo $data['site']?>/list-faskes.php" class="btn bg-warning w-200">Lihat Selengkapnya</a>
	</div>
	<div class="container column">
		<div class="column center text-center mb-5">
			<h1>Informasi Seputar Vaksinasi</h1>
			<span class="mb-5">Berikut informasi seputar vaksinasi.</span>
		</div>
		<div class="row flex-wrap center ">
			<div class="left-info">
				<p>Lindungi dirimu dan orang disekitarmu dengan melakukan vaksinasi. Berikut ini informasi yang bisa kami bagikan untukmu.</p>
				<ul>
					<li>Pemerintah Indonesia mulai melakukan vaksinasi Covid-19. dalam juknis pelaksanaan vaksinasi Covid-19</li>
					<li>Vaksin disuntikkan dalam dosis dan rentang jarak yang berbeda.</li>
					<li>Vaksin membantu sistem kekebalan tubuh melawan infeksi secara efisien dengan mengaktifkan respons tubuh terhadap penyakit tertentu.</li>
				</ul>
			</div>
			<img class="info-banner" src="<?php echo $data['site']?>/assets/images/vaccine.png"/>
		</div>
	</div>
	<div class="footer text-white">
		@copyright 2021 by <b>AyoVaksin</b>
	</div>
	<script type="text/javascript" src="./assets/js/main.js"></script>