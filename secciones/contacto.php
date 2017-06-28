<?php $page = get_page_by_title("Contacto"); ?>

<section id="contacto" class="columns h-a p-2 p-md-3 p-lg-4 m-b-3 rel ">

   <!-- <h1 class="text-center">
      <?php echo apply_filters('the_title',$page->post_title); ?>
   </h1> -->

   <div class="content columns p-t-3">
      <?php echo apply_filters('the_content',$page->post_content); ?>
   </div>


   <section class="columns h-100-v fotolinea absUpL z-1 imgLiquid imgLiquidFill ">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotosfondos/horizontal08.jpg" alt="">
   </section>
</section>
