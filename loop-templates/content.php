<?php
/**
 * @package themely framework
 */
?>

<div class="col-xs-6 col-sm-6 col-md-6">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="min-height:560px">

	<header class="entry-header">

            <div class="entry-meta">

				<!--categoria-->
        <?php //verb_lite_entry_categories(); ?>

			</div><!-- .entry-meta -->

		<!-- Titulo -->
    <?php //the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php //if ( 'post' == get_post_type() ) : ?>

            <!-- <div class="row"> -->

                <!-- data e autor
                <div class="col-xs-8 col-sm-8 col-md-8">

                    <div class="entry-meta">

                        <?php //verb_lite_posted_on(); ?>

                    </div><!- - .entry-meta - ->

                </div>
              -->

                <!-- comentários
                <div class="col-xs-4 col-sm-4 col-md-4">

                    <div class="entry-meta pull-right">

                        <?php //verb_lite_entry_comments(); ?>

                    </div><!- - .entry-meta - ->

                </div>
              -->

          <!--   </div> -->

		<?php //endif; ?>

	</header><!-- .entry-header -->

        <div class="post-thumbnail">
            <div class="hovereffect">
                <?php echo get_the_post_thumbnail( $post->ID, 'verb-lite-rectangle' ); ?>
            </div>
            <div id="categoria" class=''>
              <span id="<?php verb_lite_entry_categories_2(); ?>"><?php verb_lite_entry_categories(); ?></span>
            </div>
<?php /*if($categoria0 == '<a href="http://www.blog.publiclub.com.br/category/design/" rel="category tag">Design</a>') {echo "design"; } elseif($categoria0 == '<a href="http://www.blog.publiclub.com.br/category/marketing/" rel="category tag">Marketing</a>') {echo "marketing"; } elseif($categoria0 == '<a href="http://www.blog.publiclub.com.br/category/tecnologia/" rel="category tag">Tecnologia</a>') {echo "tecnologia"; } elseif($categoria0 == '<a href="http://www.blog.publiclub.com.br/category/midias-sociais/" rel="category tag">Mídias Sociais</a>') {echo "midias-sociais"; }*/ ?>
        </div>

        <div id="post-title0"> <?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?> </div>

        <aside id="archives-3" class="widget widget_archive">
          <h3 class="data-title">
          <?php verb_lite_posted_on(); ?></h3>
        </aside>

            <h3 class="widget-title"></h3>

		<div class="entry-content">

            <?php
                the_excerpt();
            ?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'verb-lite' ),
					'after'  => '</div>',
				) );
			?>

		</div><!-- .entry-content -->

</article><!-- #post-## -->
</div>
