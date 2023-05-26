<html lang="en">
  <head>
    <meta charset="utf-8">


    <title>Pelayanan Vaksinasi</title>
<?php if ($a == 1): ?>
	<link href="./style.css" rel="stylesheet" type="text/css"/>
    <link href="./img/favicon.png" rel="icon" type="image/png" />
<?php elseif ($a == 2): ?>
	<link href="../style.css" rel="stylesheet" type="text/css"/>
    <link href="../img/favicon.png" rel="icon" type="image/png" />
<?php endif ?>

<?php if ($a == 1) {$titik = "." ;}?>
<?php if ($a == 2) {$titik = ".." ;}?>


  </head>

    <body class="index">
    <div id="fb-root"></div>
    <div class="contain-to-grid">
      <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">
            <h1><a href="<?php echo $titik ?>">Website Pelayanan Vaksinasi</a></h1>
          </li>

        </ul>

        <section class="top-bar-section">
          <!-- Right Nav Section -->
          <ul class="right">
              <li class=""><a href="<?php echo $titik ?>/tentang">Tentang</a></li>
              <li class=""><a href="<?php echo $titik ?>/faskes">Faskes</a></li>
              <li class=""><a href="<?php echo $titik ?>/peserta">Peserta</a></li>
          </ul>
        </section>
      </nav>
    </div>