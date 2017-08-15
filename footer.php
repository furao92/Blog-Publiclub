<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Themely
 */
?>

<div class="wrapper" id="wrapper-footer">

    <div class="container">

        <div class="row">

                <?php dynamic_sidebar( 'footer' ); ?>
                <div class="col-md-12">
                  <div class="col-md-12">
                    <img src="http://localhost/blog/wp-content/uploads/2017/08/logo-branco.png" width="180">
                    <br><br><br>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-4">
                     MAPA DO SITE
                     <hr>
                      <a href="index.php">HOME</a> <br>
                      <a href="https://www.publiclub.com.br/sobre">SOBRE NÓS</a> <br>
                      <a href="https://www.publiclub.com.br/planos">PLANOS</a> <br>
                      <a href="https://www.publiclub.com.br/servicos">SERVIÇOS</a> <br>
                      <a href="https://www.publiclub.com.br/contato">CONTATO</a> <br>


                  </div>

                  <div class="col-md-4">
                    SIGA NOSSAS REDES SOCIAIS
                    <hr>
                    <table width="100%">
                      <tr>
                        <td align="center"><a href="https://www.facebook.com/publiclub.com.br"><img src="http://localhost/blog/wp-content/uploads/2017/08/facebook.png" width="50"></a></td>
                        <td align="center"><a href="https://twitter.com/twitpubliclub"><img src="http://localhost/blog/wp-content/uploads/2017/08/twitter.png" width="50"></a></td>
                        <td align="center"><a href="https://www.linkedin.com/company-beta/10801295"><img src="http://localhost/blog/wp-content/uploads/2017/08/linkedin.png" width="50"></a></td>
                        <td align="center"><a href="https://plus.google.com/113319698580776536032"><img src="http://localhost/blog/wp-content/uploads/2017/08/google.png" width="50"></a></td>
                        <td align="center"><a href="https://www.instagram.com/publiclub/"><img src="http://localhost/blog/wp-content/uploads/2017/08/instagram.png" width="50"></a></td>
                        <td align="center"><a href="https://www.youtube.com/channel/UCGV1WXXo1abA9LR272VeqCA"><img src="http://localhost/blog/wp-content/uploads/2017/08/youtube.png" width="50"></a></td>
                      </tr>
                    </table>
                    <br>


                    CATEGORIAS
                    <hr>
                    <a href="category/midias-sociais/"> MÍDIAS SOCIAIS </a> <br>
                    <a href="category/marketing/"> MARKETING </a> <br>
                    <a href="category/tecnologia/"> TECNOLOGIA </a> <br>
                    <a href="category/design/"> DESIGN </a> <br>



                  </div>

                  <div class="col-md-4">
                    CONTATO
                    <hr>
                   
                    <?php echo do_shortcode("[contact-form-7 id='245' title='rodapé']"); ?>

                  </div>

                </div>

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- wrapper end -->

<div class="wrapper" id="wrapper-footer-full">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <footer id="colophon" class="site-footer" role="contentinfo">

                    <div class="site-info">

                        <a href="<?php echo esc_url( __( 'https://www.publiclub.com.br/termos_uso', 'verb-lite' ) ); ?>"><?php printf( __( 'Termos de Uso', 'verb-lite' ), 'WordPress' ); ?></a>

                        <span class="sep"> | </span>

                        <a href="<?php echo esc_url( __( 'https://www.publiclub.com.br/politica_privacidade', 'verb-lite' ) ); ?>"><?php printf( __( 'Politicas de Privacidade', 'verb-lite' ), 'WordPress' ); ?></a>


                    </div><!-- .site-info -->

                </footer><!-- #colophon -->

            </div><!--col end -->

        </div><!-- row end -->

    </div><!-- container end -->

</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
