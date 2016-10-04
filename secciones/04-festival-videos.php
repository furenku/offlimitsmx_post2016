<h2>Videos</h2>

<section id="festival2016-videos" class="columns h-a p-0">
   <?php
   $q = new WP_Query(
      array(
         'post_type'=>'video',
         // 'cat'=>get_term_by("name","2016","category" )->term_id,
         // 'posts_per_page' => -1,
         // 'orderby'=>'menu_order', 'order' => 'ASC'
      )
   );

   if( $q->have_posts() ) {
      while ( $q->have_posts() ) {
         $q->the_post();

         ?>

         <article id="festival2016-video-<?php echo get_the_ID(); ?>" class="video columns medium-6 large-4 h-40-v end rel imgfx1 p-0">

            <!-- <a href="<?php echo get_the_permalink( get_the_ID() ); ?>" class="wh-100 p-0"> -->

               <div class="titulo columns h-10 text-center white font-xl font2 txsh1">

                     <?php echo get_the_title(); ?>

               </div>
               <div class="contenido columns h-90 text-center white font-xl font2 txsh1">

                     <?php # echo get_the_content(); ?>

               </div>

            <!-- </a> -->

         </article>

         <?php

      }
   }

   ?>


</section>
