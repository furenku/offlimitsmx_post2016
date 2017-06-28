<!doctype html>
<html class="no-js" lang="en">
<head>

   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">

   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>
      Off Limits
   </title>

   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/app.css">

   <?php wp_head(); ?>

</head>
<body class="">

<!--  meta tags -->

   <header id="cabecera" class="row expanded h-10-v m-0 p-0" data-sticky-container>


      <div class="sticky columns h-10-v color-black-bg " data-sticky data-anchor="contenedor-sitio" data-margin-top="0" data-sticky-on="small">

         <a class="logotipo h-100" href="<?php echo get_site_url(); ?>">
            <div class="imagen imgLiquid imgLiquidNoFill">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-300w-2x.png" alt="Off Limits Logo"/>
            </div>
         </a>

         <nav id="menu-sitio">
            <ul>

               <?php
               $paginas = get_pages(
                  array(
                     'parent' => get_page_by_title('2017')->ID,
                     'sort_column' => 'menu_order'
                  )
               );
               ?>

               <?php foreach( $paginas as $pagina ) : ?>

                  <li class="columns small-2 h-10-v font-ml font3 v-center text-center" data-id="<? echo $pagina->ID; ?>">
                     <a class="w-100" href="<?php echo get_the_permalink(get_the_ID()); ?>">
                        <?php echo apply_filters('the_title', $pagina->post_title); ?>
                     </a>
                  </li>

               <?php endforeach; ?>

            </ul>
         </nav>

     </div>


   </header>


   <main id="principal" class="row expanded h-a">
