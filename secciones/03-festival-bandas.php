<section id="festival2016-bandas" class="columns h-80-v  p-0">
   <?php
   $q = new WP_Query(
      array(
         'post_type'=>'banda',
         'cat'=>get_term_by("name","2016","category" )->term_id,
         'posts_per_page' => -1,
         'orderby'=>'menu_order', 'order' => 'ASC'
      )
   );

   if( $q->have_posts() ) {
      while ( $q->have_posts() ) {
         $q->the_post();

         ?>

         <article id="festival2016-banda-<?php echo get_the_ID(); ?>" class="banda columns small-6 medium-3 h-20-v h-10-sm-v end rel hover-grow p-0-3">

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