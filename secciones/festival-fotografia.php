<section id="festival2016-fotografia" class="columns h-a p-0">

   <h4 class="text-center">
      Fotografía
   </h4>

   <?php
   $q = new WP_Query(
      array(
         'post_type'=>'galeria',
         // 'cat'=>get_term_by("name","2016","category" )->term_id,
         // 'posts_per_page' => -1,
         // 'orderby'=>'menu_order', 'order' => 'ASC'
      )
   );

   if( $q->have_posts() ) {
      while ( $q->have_posts() ) {
         $q->the_post();

         ?>

         <article id="festival-galeria-<?php echo get_the_ID(); ?>" class="galeria columns medium-6 large-3 h-20-v end rel imgfx1 p-0">

               <!-- <div class="imagen columns imgLiquidFill imgLiquid abs wh-100" > -->
                  <?php echo get_the_content( get_the_ID()); ?>
               <!-- </div> -->

         </article>

         <?php

      }
   }

   ?>


</section>
