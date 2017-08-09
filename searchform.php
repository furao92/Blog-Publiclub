<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package themely framework
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<!-- <label for="s" class="assistive-text"><?php _e( 'Pesquisar', 'verb-lite' ); ?></label>-->

			<input type="text" class="news-email-input" name="s" id="s" value="<?php echo get_search_query() ?>" placeholder="<?php esc_attr_e( 'Pesquisar &hellip;', 'verb-lite' ); ?>" />

				<input type="submit" name="submit" class="news-email-button" value="<?php esc_attr_e( 'Pesquisar', 'verb-lite' ); ?>" />


	</form>
