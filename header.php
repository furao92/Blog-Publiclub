<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package themely framework
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87636313-6', 'auto');
  ga('send', 'pageview');

</script>





<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '110137033029132',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>



<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=431500823850061";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
<!--
    <div class="wrapper top-bar top-bar-dark">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 hidden-sm-down">
                    <div class="date">
                        <i class="fa fa-calendar-check-o"></i> <?php echo date_i18n('l jS F Y'); ?>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <ul class="social-icons pull-right">
                        <li><a class="icon fa fa-rss" href="<?php echo esc_url( home_url( '?feed=rss2' ) ); ?>" data-original-title="RSS"></a></li>
                        <?php if ( get_theme_mod( 'verb_lite_social_facebook' ) ) { ?><li><a class="icon fa fa-facebook" href="<?php echo esc_url( get_theme_mod( 'verb_lite_social_facebook', '#') ); ?>" target="_blank"></a></li><?php } ?>
                        <?php if ( get_theme_mod( 'verb_lite_social_twitter' ) ) { ?><li><a class="icon fa fa-twitter" href="<?php echo esc_url( get_theme_mod( 'verb_lite_social_twitter', '#') ); ?>" target="_blank"></a></li><?php } ?>
                        <?php if ( get_theme_mod( 'verb_lite_social_linkedin' ) ) { ?><li><a class="icon fa fa-linkedin" href="<?php echo esc_url( get_theme_mod( 'verb_lite_social_linkedin', '#') ); ?>" target="_blank"></a></li><?php } ?>
                        <?php if ( get_theme_mod( 'verb_lite_social_pinterest' ) ) { ?><li><a class="icon fa fa-pinterest" href="<?php echo esc_url( get_theme_mod( 'verb_lite_social_pinterest', '#') ); ?>" target="_blank"></a></li><?php } ?>
                        <?php if ( get_theme_mod( 'verb_lite_social_google' ) ) { ?><li><a class="icon fa fa-google-plus" href="<?php echo esc_url( get_theme_mod( 'verb_lite_social_google', '#') ); ?>" target="_blank"></a></li><?php } ?>
                        <?php if ( get_theme_mod( 'verb_lite_social_instagram' ) ) { ?><li><a class="icon fa fa-instagram" href="<?php echo esc_url( get_theme_mod( 'verb_lite_social_instagram', '#') ); ?>" target="_blank"></a></li><?php } ?>
                        <?php if ( get_theme_mod( 'verb_lite_social_youtube' ) ) { ?><li><a class="icon fa fa-youtube" href="<?php echo esc_url( get_theme_mod( 'verb_lite_social_youtube', '#') ); ?>" target="_blank"></a></li><?php } ?>
                        <?php if ( get_theme_mod( 'verb_lite_social_tumblr' ) ) { ?><li><a class="icon fa fa-tumblr" href="<?php echo esc_url( get_theme_mod( 'verb_lite_social_tumblr', '#') ); ?>" target="_blank"></a></li><?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  -->
    <div class="wrapper header">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12 col-sx-12 pull-left" id="logo">
                    <?php if (!has_custom_logo()) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <span class="lead"><?php bloginfo( 'description' ); ?></span>
                    <?php else : ?>
                        <?php the_custom_logo() ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-6 pull-left">
                  <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'verb-lite' ); ?></a>

                  <nav class="navbar navbar-light site-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">

                      <div class="navbar-header">

                        <div class="col-md-12" id="menu-login2">
                          <button type="button" id="cadastre2" class="navbar-btn btn btn-warning btn-rounded btn-register" onclick="location.href='https://www.publiclub.com.br/cadastro'">Cadastre seu Negócio</button>
                        </div>


                          <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->

                          <button class="navbar-toggle hidden-lg-up" type="button" data-toggle="collapse" data-target=".exCollapsingNavbar">
                              <span class="sr-only"><?php _e( 'Toggle navigation', 'verb-lite' ); ?></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>

                          <!-- The WordPress Menu goes here -->
                          <?php wp_nav_menu(
                                  array(
                                      'theme_location' => 'primary',
                                      'depth' => 3,
                                      'container_class' => 'collapse navbar-toggleable-md exCollapsingNavbar',
                                      'menu_class' => 'nav navbar-nav',
                                      'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                      'menu_id' => 'main-menu',
                                      'walker' => new wp_bootstrap_navwalker()
                                  )
                          ); ?>

                      </div>

                  </nav><!-- .site-navigation -->
                </div>
                <div class="col-md-4 pull-left" id="menu-login">
                  <a role="button" class="login-popover" href="https://www.publiclub.com.br/index.php?route=account/login"><span class="fa fa-sign-in fa-lg"></span> Login</a>
                  &nbsp;
                  <button type="button" class="navbar-btn btn btn-warning btn-rounded btn-register" onclick="location.href='https://www.publiclub.com.br/cadastro'">Cadastre seu Negócio</button>
                </div>




                <!--
                <div class="col-md-8 pull-right">
                    <?php dynamic_sidebar( 'header-adspot' ); ?>
                </div>
              -->
            </div>
        </div>
    </div>
    <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

        <!--
        <div class="container">

            <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'verb-lite' ); ?></a>

            <nav class="navbar navbar-light site-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">

                <div class="navbar-header">

                    <!-- .navbar-toggle is used as the toggle for collapsed navbar content - ->

                    <button class="navbar-toggle hidden-lg-up" type="button" data-toggle="collapse" data-target=".exCollapsingNavbar">
                        <span class="sr-only"><?php _e( 'Toggle navigation', 'verb-lite' ); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!- - The WordPress Menu goes here - ->
                    <?php wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'depth' => 3,
                                'container_class' => 'collapse navbar-toggleable-md exCollapsingNavbar',
                                'menu_class' => 'nav navbar-nav',
                                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                'menu_id' => 'main-menu',
                                'walker' => new wp_bootstrap_navwalker()
                            )
                    ); ?>

                </div>

            </nav>< !-- .site-navigation - >

        </div>
      -->








      <div class="container">
          <div class="row">
            <div id="" class="col-md-12">

              <div class="div-categorias" id="div-marketing">
                  <a href="category/marketing/">
                    <div class="hovereffect">
                      <img width="100%" src="http://www.blog.publiclub.com.br/wp-imagem/marketing.png" class="attachment-verb-lite-rectangle size-verb-lite-rectangle wp-post-image" alt="">
                    </div>
                      <div id="categoria" class=''> <span id="p-marketing" class="p-header"> Marketing </span> </div>
                      <?php /*
                        global $post;
                        $args = array( 'numberposts' => 1, 'order' => 'DESC', 'category' => 'design', 'post__in'  => get_option( 'sticky_posts' ) );
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ) : setup_postdata($post); ?>
                        <div id="categoria" class=''> <span id="p-marketing" class="p-header"> <?php the_title(); ?> </span> </div>
                      <?php endforeach; */ ?>
                  </a>
              </div>
              <div class="div-categorias" id="div-tecnologia">
                <a href="category/tecnologia/">
                  <div class="hovereffect">
                    <img width="100%" src="http://www.blog.publiclub.com.br/wp-imagem/tecnologia.png" class="attachment-verb-lite-rectangle size-verb-lite-rectangle wp-post-image" alt="">
                  </div>
                    <div id="categoria" class=''> <span id="p-tecnologia" class="p-header"> Tecnologia </span> </div>
                </a>
              </div>
              <div class="div-categorias" id="div-sociais">
                <a href="category/midias-sociais/">
                  <div class="hovereffect">
                    <img width="100%" src="http://www.blog.publiclub.com.br/wp-imagem/midias-sociais.png" class="attachment-verb-lite-rectangle size-verb-lite-rectangle wp-post-image" alt="">
                  </div>
                    <div id="categoria" class=''> <span id="p-sociais" class="p-header"> Midias Sociais </span> </div>
              </a>
              </div>
              <div class="div-categorias" id="div-design">
                <a href="category/design/">
                  <div class="hovereffect">
                    <img width="100%" src="http://www.blog.publiclub.com.br/wp-imagem/design.png" class="attachment-verb-lite-rectangle size-verb-lite-rectangle wp-post-image" alt="">
                  </div>
                    <div id="categoria" class=''> <span id="p-design" class="p-header"> Design </span> </div>
                </a>
              </div>
            </div>
          </div><!-- .wrapper-navbar end -->
        </div>
      </div>
