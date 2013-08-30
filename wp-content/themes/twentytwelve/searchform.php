<?php
/**
 * The template for displaying search forms in Twenty Twelve
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text"><?php _e( 'Search', 'twentytwelve' ); ?></label>
		<br /><input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Szukaj', 'twentytwelve' ); ?>" /><br />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'twentytwelve' ); ?>" />
	</form>
