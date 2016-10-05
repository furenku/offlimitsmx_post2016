<?php
$blog = get_page_by_title("Blog");
?>
<section id="blog" class="small-12 columns p0 h_100 mb3 mt2 mt_sm_4">

  <!-- header secciones home -->
  <div id="blog-header" class="small-12 columns p0 h_10vh mb_sm_2 mb2">

    <a href="<?php echo get_the_permalink($blog->ID); ?>">

      <div class="small-9 columns fontRXL h_100">
          <h1 class="white m0">
             Blog
          </h1>
      </div>

      <div class="small-3 columns p2 m0 h_100 fontRXL text-center">
        <div class="vcenter">
          <i class="fa fa-angle-right"></i>
        </div>
      </div>

    </a>

  </div>
  <!-- temina header -->

<!-- blog ultima -->
<?php

$entradas = get_posts( array( 'posts_per_page' => 3, 'post_type' => 'post' ) );


  for ($i=0; $i < 3; $i++) {
     ?>
         <article id="inicio-blog-entrada_"<?php echo $i+1; ?> class="columns h-30-v <?php echo $i==0 ? '' : 'medium-6'; ?> p-1 white">
            <a href="<?php echo get_the_permalink( $entradas[$i+1]->ID ); ?>">

           <div class="columns h-30-v p-1 color-black-bg color-white tarjeta">
             <div id="blog-thumb" class="columns h-50 imgLiquid imgLiquidFill cursor-pointer">
               <?php echo get_the_post_thumbnail($entradas[$i+1]->ID,'thumb'); ?>
             </div>

           <div id="blog-secundario-header" class="columns h-a p-0 p-t-0-2">
                <h5 class="font-s">
                   <?php echo apply_filters( 'the_title', get_the_title( $entradas[$i+1] -> ID )); ?>
                </h5>
           </div>
           <div id="blog-secundario-header-fecha" class="columns h-a p-0 p-t-0-2 font-xs">
               <?php echo get_the_date('d\.m\.Y', $entradas[$i+1]->ID ); ?>
           </div>

           <div class="columns h-a p-0 p-t-0-2 font-xs">
                <?php echo apply_filters('the_excerpt',wp_trim_words($entradas[$i+1]->post_excerpt,14)); ?>
           </div>

           <div class="absDownR p-1 color-primario-bg color-black h-a p-0 p-t-0-2 font-xs">
               <span class="pr2">Ver más</span><i class="fa fa-plus"></i>
           </div>
           </div>


         </a>
         </article>
     <?php
  }

  ?>



</section>
