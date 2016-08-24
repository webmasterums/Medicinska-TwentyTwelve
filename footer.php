<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<!-- Ändrar språk på samarbetspartners baserat qTranslate språk -->
		<center>
		<?php $curLang = substr(get_bloginfo( 'language' ), 0, 2);
		switch ($curLang) {
			case "en":
			// Samarbetspartners på engelska
				print "Partners";
				break;
			case "sv":
				// Samarbetspartners på svenska
				print "Samarbetspartners";
				break;
		}
		?><br><br>

<!-- Sponsors logotyper som ligger på botten. Lägg till nya enligt mallen nedan -->
<!-- Mall kod: <a href="Länk" target="_blank"><img style="width: 150px;" src="länk till bild"></a> -->
	<div class="footer_sponsors" style="display:flex; justify-content:center; align-items:center;">
		<p>
		<a href="http://www.iksu.se" target="_blank"><img style="max-height:48px; width:auto;" src="http://medicinska.se/bilder/logotype-iksu-mini.png"></a>&nbsp;
		<a href="http://psykologiskcoachning.nu/" target="_blank"><img style="max-height:48px; width:auto;" src="http://medicinska.se/bilder/coachning.png"></a>&nbsp;
		<a href="http://www.ambio-helse.no" target="_blank"><img style="max-height:48px; width:auto;" src="http://medicinska.se/bilder/ambio1.png"></a>&nbsp;
		<a href="http://www.intersport.se" target="_blank"><img style="max-height:48px; width:auto; max-width:100%;" src="http://www.medicinska.se/bilder/intersport.png"></a>&nbsp;
		<a href="http://www.toughest.se/" target="_blank"><img style="max-height:48px; width:auto; max-width:100%;" src="http://www.medicinska.se/bilder/thoughest.png"></a>&nbsp;
		<a href="https://www.mecenat.se" target="_blank"><img style="max-height:48px; width:auto; max-width:100%;" src="http://medicinska.se/bilder/logo-mecenat.png"></a>&nbsp;
		<a href="http://www.rakmacka.se/" target="_blank"><img style="max-height:48px; width:auto; max-width:100%;" src="http://medicinska.se/bilder/rakmacka-logo.png"></a>&nbsp;
		<a href="http://www.kahlstkh.se/vasterbotten-2/" target="_blank"><img style="max-height:48px; width:auto; max-width:100%;" src="http://www.halsojobb.se/content/customer/t199x70/1177.jpg"></a>&nbsp;
		<a href="https://www.partykungen.se/" target="_blank"><img style="max-height:48px; width:auto; max-width:100%;" src="http://medicinska.se/bilder/partykungen.png"></a></p>
		</p>
	</div>	
	<div>
		<p>
		<br>
		Copyright © <?php echo date("Y"); ?> Umeå Medicinska Studentkår 
		<br><a href="mailto:webmaster@medicinska.se">webmaster@medicinska.se</a>
		</p>
	</div>
	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script> 
// Open menu on first tap on touch devices.
jQuery(document).ready(function () {
  	jQuery(".page_item").has("ul").children("a").attr("aria-haspopup", "true");
	jQuery(".menu-item").has("ul").children("a").attr("aria-haspopup", "true");
});
</script>
<script>
document.addEventListener("touchstart", function(){}, true);
</script>
</body>
</html>
