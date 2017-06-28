<?php
$q = new WP_Query(
array(
   'post_type'=>'video',
   // 'cat'=>get_term_by("name","2016","category" )->term_id,
   // 'posts_per_page' => -1,
   // 'orderby'=>'menu_order', 'order' => 'ASC'
)
);
?>

<h1 class="text-center m-t-2">Videos</h1>

<section id="festival2016-videos" class="columns row h-60-sm-v h-40-md-v h-md-50 p-sm-2 p-md-4">


      <?php

      if( $q->have_posts() ) {
         while ( $q->have_posts() ) {
            $q->the_post();

            ?>

            <article id="festival2016-video-<?php echo get_the_ID(); ?>" class="video columns imgfx1 p-1">

               <!-- <a href="<?php echo get_the_permalink( get_the_ID() ); ?>" class="wh-100 p-0"> -->

                  <h5 class="titulo columns h-30 text-center white font2 txsh1 m-b-0">
                     <?php echo get_the_title(); ?>
                  </h5>

                  <div class="contenido columns h-70 text-center white font-xl font2 txsh1">
                     <?php echo get_the_content(); ?>
                  </div>

               <!-- </a> -->

            </article>

            <?php

         }
      }

      ?>

</section>
