<?php

$pages = get_pages( array('parent'=>get_page_by_title("Festival")->ID));

?>

<section id="festival">

   <h1>
      Off Limits 2017
   </h1>

   <?php foreach ($pages as $page) : ?>

   <div class="columns medium-6 large-4 font-xs">

      <h4>
         <?php echo apply_filters('the_title', $page->post_title); ?>
      </h4>

      <div class="content columns p-1">
         <?php echo apply_filters('the_content', $page->post_content); ?>
      </div>

   </div>

   <?php endforeach; ?>


</section>
