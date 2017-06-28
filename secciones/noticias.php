<section id="noticias" class="columns small-centered medium-10 large-8 p-5 m-t-2 m-b-2 rel">

<?php

$q = new WP_Query( array(
   'cat' => get_term_by('name', 'Noticias', 'category')->term_id
));

if( $q-> have_posts() ) :
   while ( $q-> have_posts() ) :
      $q-> the_post();

      ?>

      <article id="noticias-principal" class="columns medium-6 h-5x">

         <h5 class="m-b-1">
            <?php echo get_the_title(); ?>
         </h5>

         <div class="imagen columns small-6 h-3x medium-6 imgLiquid imgLiquidNoFill">
            <?php echo get_the_post_thumbnail(); ?>
         </div>

         <div class="extracto-enlace small-6 h-3x columns h-a rel">
         <div class="extracto columns p-0 h-a">
            <?php echo get_the_excerpt(); ?>
         </div>
         <a class="button columns absDownR h-a m-t-1 m-b-0 text-right color-black-bg" href="<?php echo get_the_permalink(get_the_ID()); ?>">
            Ver más
         </a>
         </div>


      </article>

<?php
endwhile;
endif;
?>

</section>


<section class="columns fotolinea h-50-v imgLiquid imgLiquidFill m-t-3 m-b-3">
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotosfondos/horizontal05.jpg" alt="">
</section>
