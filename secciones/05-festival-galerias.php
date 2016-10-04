<h2>Galerías</h2>

<section id="festival2016-galerias" class="columns h-a  p-0">
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

            <!-- <a href="<?php echo get_the_permalink( get_the_ID() ); ?>" class="wh-100 p-0"> -->

               <div class="imagen columns imgLiquidFill imgLiquid abs wh-100" >
                  <?php echo get_lazyload_thumbnail( get_the_ID(), 'large' ); ?>
               </div>

               <div class="titulo columns h-100 abs z1 v-center text-center white font-xl font2 txsh1">

                     <?php echo get_the_title(); ?>

               </div>

            <!-- </a> -->

         </article>

         <?php

      }
   }

   ?>


</section>
