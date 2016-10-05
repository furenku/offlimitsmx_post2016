<?php

$portada = get_page_by_title("Portada");

?>

<div id="portada" class="row expanded h-70-v p5 rel">
   <div class="imagen absUpL wh-100 imgLiquid imgLiquidFill">
      <?php echo get_lazyload_thumbnail( $portada->ID, 'full' ); ?>
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
</div>
