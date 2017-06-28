<?php

$pages = get_pages( array('parent'=>get_page_by_title("Festival")->ID));

?>

<section id="festival" class="columns row text-center">

   <div class="logo columns text-center h-15-v imgLiquid imgLiquidNoFill">
      <img
      src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-600w-2x.png" alt=""
      />
   </div>

   <h5 class="columns m-1">
      30 de septiembre, 2017
   </h5>

   <?php foreach ($pages as $page) : ?>

   <div class="columns medium-6 large-4 font-xs p-1">

      <h4>
         <span class="w-a p-0-3 color-black-bg">
            <?php echo apply_filters('the_title', $page->post_title); ?>
         </span>
      </h4>

      <div class="content columns p-l-4 p-r-4 p-t-1">
         <?php echo apply_filters('the_content', $page->post_content); ?>
      </div>

   </div>

   <?php endforeach; ?>


</section>
