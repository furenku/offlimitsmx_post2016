<?php

$principal = get_page_by_title("2017");

?>

<section id="portada" class="row expanded h-40-v h-70-md-v p5 rel">

   <div class="imagen absUpL wh-100 imgLiquid imgLiquidFill">
      <?php echo get_lazyload_thumbnail( $principal->ID, 'full' ); ?>
   </div>

   <div class="logo-flotante absUpL wh-100 v-center text-center">
      <div class="logotipo imagen columns small-centered small-10 medium-8 large-6 h-30-v imgLiquid imgLiquidNoFill fade-in-slow">

         <img
         data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-600w-2x.png" alt=""
         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
         class="b-lazy"
         />

      </div>
   </div>

</section>

<section id="introduccion" class="row h-sm-a h-40-md-v p5 rel">
   <section class="columns fotolinea h-40-v absUpL imgLiquid imgLiquidFill z-1">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotosfondos/horizontal04.jpg" alt="">
   </section>

   <div class="imagen columns h-70-sm-v h-100-md medium-6 imgLiquid imgLiquidNoFill">
      <?php echo get_lazyload_thumbnail( $principal->ID, 'thumb' ); ?>
   </div>
   <div class="logo-flotante h-40-sm-v h-100-md columns medium-6 v-center text-center">
      <?php echo apply_filters('the_content',$principal->post_content); ?>
   </div>

</section>
