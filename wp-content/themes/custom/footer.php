<?php
/*
Theme Name: Mixby Wordpress
Author: Heidi Yee
Description: Learning Wordpress using Mixby site by customizing new theme based on twentyfifteen theme
Version: 1.0.0
*/
// include 'hello.php'

?>
	<!-- linking js right before closing body -->
	<script src="<?php echo get_template_directory_uri(); ?>
/_ui/js/jquery-3.0.0.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>
/_ui/js/menu.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>
/_ui/js/svg.js"></script>
	<!-- endbuild -->
	</div><!-- .site-content -->

	<footer>
		<div class="container">

			<a href="<?php echo esc_url( __( 'https://wordpress.org/') ); ?>"><?php printf( __( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
