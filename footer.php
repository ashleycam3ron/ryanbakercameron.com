<div class="push clear"></div>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="col3">
		<h3>About</h3>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter-profile-pic.jpg"/>
		<p>Ryan Cameron is a technology enthusiast and designer who loves all things architecture and engineering. He is a board member and consultant of a national art museum, has over 12 years of experience as an architect, and is active in the Revit community, <a target="_blank" href="https://forums.augi.com/member.php?173651-rbcameron1">AUGI</a>, <a target="_blank" href="http://www.revitforum.org/members/rbcameron1.html">Revitforum.org</a> and <a target="_blank" href="http://www.revitcity.com/profile.php?user_id=78200">RevitCity.com</a> forums. Ryan enjoys collaborating and discussing his creative passions. Right now he is teaming with Autodesk to develop innovative workflows using their products. He has publications in several magazines including Crit Journal and MetalMag through architectural competitions. Ryan is a recipient of many awards including the Herman Miller Young Architect Award.
		</p>
	</div>
	<div class="col2 col3">
		<h3>Contact</h3>
		<?php echo do_shortcode( '[gravityform id="1" name="Contact" title="false" description="false"]' ) ?>
	</div>
	<div class="col2 col3 last">
		<h3>Connect</h3>
		<nav id="social"><?php wp_nav_menu(array('menu' => 'social')); ?></nav>
		<div id="info"></div>
	</div>
	<div class="clear"></div>
	<a class="login" href="<?php echo wp_login_url(); ?>" title="Login">Login</a>
</footer><!-- #colophon -->

</div><!-- #main -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- google analytics -->

</body>
</html>