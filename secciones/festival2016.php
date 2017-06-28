<?php $page = get_page_by_title("Edición 2016"); ?>

<section id="edicion_anterior" class="columns h-a p-xs-2 p-sm-3 p-md-4 font-s">

   <h1 class="text-center">
      <?php echo apply_filters('the_title',$page->post_title); ?>
   </h1>

   <div class="content columns">
      <?php echo apply_filters('the_content',$page->post_content); ?>
   </div>

</section>



<section id="festival2016" class="columns h-a p0">

   <?php get_template_part('secciones/festival-videos'); ?>

   <?php get_template_part('secciones/festival2016-bandas'); ?>

   <?php get_template_part('secciones/festival-fotografia'); ?>

</section>
