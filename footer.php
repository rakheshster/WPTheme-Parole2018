<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 */
?>

	</div><!-- .site-content -->

<!--	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php 
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				?><p><?php the_privacy_policy_link(); ?></p><?php
			}
			?>
-->
			<!--<p>&copy; <?php echo date("Y") ?> <?php bloginfo('name'); ?>. <?php _e('All Rights Reserved.'); ?></p>-->

<!--
		</div><!-- .site-info -->
<!--	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>