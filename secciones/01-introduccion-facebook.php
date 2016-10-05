<section id="introduccion-facebook" class="row h-70-v p-5 p-sm-1 m-t-2">

   <div class="tarjeta columns medium-6 p-3 p-sm-1 m-t-2">

      <div id="introduccion-logotipo" class="logotipo imagen columns small-centered small-10 medium-8 large-6 h-20-v m-t-sm-2 imgLiquid imgLiquidNoFill">

         <img
         data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-600w-2x.png" alt=""
         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
         class="b-lazy"
         />

      </div>

      <div class="texto columns p-l-5 p-r-5 p-sm-1 h-a-sm  font-s">

         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut voluptas, autem. Animi voluptatem fugiat obcaecati eveniet!</p>

         <p>Vero eum ipsa necessitatibus porro sunt   saepe quibusdam, illum, cupiditate at ducimus labore sed, dolorum unde.</p>

         <p>Aliquam possimus corporis consequatur perspiciatis excepturi nostrum asperiores, vitae sed incidunt deserunt distinctio, necessitatibus molestiae tenetur.</p>

      </div>

   </div>

   <div id="facebook-feed" class="columns medium-6 h-100-v h-xs-a m-t-2 p-l-3 p-r-3 p-sm-1">

      <div class="columns small-8">
         <h3>Facebook</h3>
      </div>

      <div class="columns scroll-y scroll-xs-hidden p-l-3 p-r-3 p-sm-1">
         <?php echo do_shortcode('[recent_facebook_posts]'); ?>
      </div>

   </div>

</section>
