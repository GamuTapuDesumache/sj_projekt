<?php
    include('partials/header.php');
?>
<body>

    <?php
        include('partials/banner.php');
    ?>
    
    <div id="templatemo_main">
    	<div class="col_w960">
            <h2>Galéria</h2>
            <p><em>Naša ponuka je neustále aktualizovaná.</em> Buďte súčasťou trendu a majte stránku, na ktorú sa ľudia budú vracať! Ak máte nejaké
        pripomienky/otázky/problém, neváhajte a <a href="contact.php">pošlite nám správu</a></p>
    	</div>
    	
    <section>
	<div class="container">
  <?php
  $portfolio = $Portfolio->get_portfolio();
  foreach ($portfolio as $item) {
    echo '<div style="text-align:center; display:block; width:100%;">';
    echo '<img src="' . $item->image . '" alt="' . $item->name . '" style="width:100%;">';
    echo '<div>' . $item->name . '</div>';
    echo '</div>';
  }
  ?>
</div>
</section>
       
        <div class="cleaner"></div>
    </div> <!-- end of main -->
    
    <?php
        include('partials/footer.php');
    ?>
    
</div> <!-- end of wrapper -->

</body>
</html>