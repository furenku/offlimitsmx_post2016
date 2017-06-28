<section id="bandas" class="columns medium-10 medium-offset-1 large-8 large-offset-2 end h-a p-2 p-md-3 p-lg-4 m-b-3">

   <h4 class="text-center">
      Cartel 2016
   </h4>

   <?php
   $q = new WP_Query(
      array(
         'post_type'=>'banda',
         'cat'=>get_term_by("name","2017","category" )->term_id,
         'posts_per_page' => -1,
         'orderby'=>'menu_order', 'order' => 'ASC'
      )
   );

   if( $q->have_posts() ) {
      while ( $q->have_posts() ) {
         $q->the_post();

         ?>

         <article id="festival2017-banda-<?php echo get_the_ID(); ?>" class="banda columns small-6 medium-4 h-20-v h-10-sm-v end rel hover-grow p-0-3">

            <a href="<?php echo get_the_permalink( get_the_ID() ); ?>" class="wh-100">

               <div class="imagen columns imgLiquidNoFill imgLiquid wh-100 " >

                  <?php echo get_the_post_thumbnail( get_the_ID(), 'medium' ); ?>

               </div>

            </a>

         </article>

         <?php

      }
   }

   ?>


</section>

<section class="columns fotolinea imgLiquid imgLiquidFill ">
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotosfondos/horizontal07.jpg" alt="">
</section>
