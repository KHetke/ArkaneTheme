<?php
/**
 * @package WordPress
 * @subpackage themename
 */
?>

	</div><!-- #main  -->

	<footer id="colophon" role="contentinfo">
			<div id="site-generator">
				<small>&copy Copyright <?php echo date('Y') . " " . esc_attr( get_bloginfo( 'name', 'display' ) ); ?> <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'themename' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s.', 'themename' ), 'WordPress' ); ?></a></small>
			</div>
	</footer><!-- #colophon -->
</div><!-- .container (Closes first div from header.php) -->

<?php wp_footer(); ?>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/bootstrap.min.js"></script>

</body>
</html>