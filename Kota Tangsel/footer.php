    <footer>
      <div class="row">
        <div class="large-12 columns">
          <div class="row">
            <div class="large-8 columns">
            	<p>(c) 2021, Pemerintah</p>
            </div>
            <div class="large-4 columns">
              <?php if ($a == 1) {$titik = "." ;}?>
              <?php if ($a == 2) {$titik = ".." ;}?>
              <p class="text-right"><a href="<?php echo $titik ?>/logout">Logout (Keluar)</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>