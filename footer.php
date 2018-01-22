<?php
$disclaimer = get_option( 'womness_disclaimer', '' );
$copyright = get_option( 'womness_copyright', '' );
?>
    </div>
  </div>
  <div class="push"></div>


</div>
<div id="FooterWrap">
	<div class="footer-nav">
		<?php
		wp_nav_menu(array(
			'theme_location' 	=> 'womness_footer_menu',
			'container' 		=> '',
		));
		?>
	</div>
  <div id="Footer">
  	<?php echo $copyright; ?>
  	<div class="container" id="disclaimer">
  		<div><?php echo $disclaimer; ?></div>
	</div>
  </div>

</div>
	<?php wp_footer(); ?>
</body>
</html>