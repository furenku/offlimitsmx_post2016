<?php $page = get_page_by_title("Edición 2016"); ?>

<section id="edicion_anterior" class="columns h-a p-xs-2 p-sm-3 p-md-4 font-s  color-black-bg" data-id="<?php echo $page->ID; ?>">

   <h1 class="text-center">
      <?php echo apply_filters('the_title',$page->post_title); ?>
   </h1>

   <div class="content columns medium-4 h-60-v h-80-sm-v v-center texto">
      <?php echo apply_filters('the_content',$page->post_content); ?>
   </div>

   <div class="content columns medium-4 h-60-v h-80-sm-v">

      <?php get_template_part('secciones/festival2016-bandas'); ?>

   </div>
   <div class="content columns medium-4 h-60-v h-80-sm-v imgLiquid imgLiquidNoFill">

      <?php echo get_the_post_thumbnail($page->ID); ?>

   </div>

</section>



<section id="festival2016" class="columns h-a p0">

   <?php get_template_part('secciones/festival-videos'); ?>

   <?php #get_template_part('secciones/festival-fotografia'); ?>

</section>
