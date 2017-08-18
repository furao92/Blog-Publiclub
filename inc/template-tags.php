<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package themely framework
 */

if ( ! function_exists( 'verb_lite_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function verb_lite_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	/* original
	$posted_on = sprintf(
		_x( 'on %s', 'post date', 'verb-lite' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);
	*/

	$posted_on = sprintf(
		_x( '%s', 'post date', 'verb-lite' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	/*
	$byline = sprintf(
		_x( 'by %s', 'post author', 'verb-lite' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);
	*/

	echo '<span class="byline"> '. /*. $byline .*/ '</span> <span class="posted-on">' . $posted_on . '</span>';

}
endif;

if ( ! function_exists( 'verb_lite_entry_categories' ) ) :
/**
 * Prints HTML with meta information for the categories
 */
function verb_lite_entry_categories() {
	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( __( ' ', 'verb-lite' ) );
		if ( $categories_list && verb_lite_categorized_blog() ) {
			printf(__( '%1$s', 'verb-lite' ), $categories_list );
		}
	}
}


function verb_lite_entry_categories_2() {
	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		$categories_list_2 = get_the_category_list( __( ' ', '' ) );
		$categories_list_2 = str_replace('<a href="http://www.blog.publiclub.com.br/category/tecnologia/" rel="category tag">Tecnologia</a>', 'p-tecnologia', $categories_list_2);
		$categories_list_2 = str_replace('<a href="http://www.blog.publiclub.com.br/category/midias-sociais/" rel="category tag">Mídias Sociais</a>', 'p-sociais', $categories_list_2);
		$categories_list_2 = str_replace('<a href="http://www.blog.publiclub.com.br/category/design/" rel="category tag">Design</a>', 'p-design', $categories_list_2);
		$categories_list_2 = str_replace('<a href="http://www.blog.publiclub.com.br/category/marketing/" rel="category tag">Marketing</a>', 'p-marketing', $categories_list_2);
		$categories_list_2 = str_replace('<a href="http://www.blog.publiclub.com.br/category/publiclub/" rel="category tag">Publiclub</a>', 'p-publiclub', $categories_list_2);


		if ( $categories_list_2 && verb_lite_categorized_blog() ) {
			printf(__( '%1$s', 'verb-lite' ), $categories_list_2 );
		}
	}
}

endif;

if ( ! function_exists( 'verb_lite_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function verb_lite_entry_footer() {
    // Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', __( ', ', 'verb-lite' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . __( '#tags:  %1$s', 'verb-lite' ) . '</span>', $tags_list );
		}
	}
	edit_post_link( __( 'Edit', 'verb-lite' ), '<span class="edit-link">', '</span>' );
}
endif;

if ( ! function_exists( 'verb_lite_entry_comments' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function verb_lite_entry_comments() {

	if (  ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<i class="fa fa-comments-o"></i> <span class="comments-link">';
		comments_popup_link( __( 'Nenhum comentário', 'verb-lite' ), __( '1 comentário', 'verb-lite' ), __( '% comentários', 'verb-lite' ) );
		echo '</span>';
	}
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function verb_lite_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'verb_lite_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'verb_lite_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so verb_lite_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so verb_lite_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in verb_lite_categorized_blog.
 */
function verb_lite_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	delete_transient( 'verb_lite_categories' );
}
add_action( 'edit_category', 'verb_lite_category_transient_flusher' );
add_action( 'save_post',     'verb_lite_category_transient_flusher' );
