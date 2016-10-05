
var u = new Utils();
var bLazy;
var collapsed_facebook = false;

setup_blazy();

jQuery(document).ready(function($){

   jQuery(document).foundation();

   u.addWindowResizeFunction( do_responsive_facebook );
   setup_utils();
   setup_plugins();

   console.log("OFF Limits v.3");

});



function do_responsive_facebook() {

   if( $(window).width() <= 768 && ! collapsed_facebook ) {
      var num_posts = 3;
      if( $('.rfbp-post').length > num_posts ) {

         $('.rfbp-post').addClass('hidden');

         for( var i =0; i < num_posts; i++ ) {
            $('.rfbp-post').eq(i).removeClass('hidden');
         }

         console.log("TO DO: mostrar mas posts fb");

      }

      collapsed_facebook = true;

   }
   if( $(window).width() > 768 && collapsed_facebook ) {

      $('.rfbp-post').removeClass('hidden');

   }
}



function setup_plugins() {

   $('.imgLiquid.imgLiquidFill').imgLiquid();
   $('.imgLiquid.imgLiquidNoFill').imgLiquid({ fill: false });


   $('#festival2016-videos-listado').slick({
      slidesToShow:1,
      slidesToScroll:1,
      dots:true,
      responsive: [
         {
            breakpoint: 768,
            settings: {
               slidesToShow:2,
               slidesToScroll:2,
            }
         },
         {
            breakpoint: 1024,
            settings: {
               slidesToShow:3,
               slidesToScroll:3,
            }
         },
         {
            breakpoint: 1200,
            settings: {
               slidesToShow:4,
               slidesToScroll:4,
            }
         },
         {
            breakpoint: 1440,
            settings: {
               slidesToShow:5,
               slidesToScroll:5,
            }
         }
      ]
   })


}


function setup_utils() {

   u.addWindowResizeFunction( u.verticalCenter );

}



function setup_blazy() {

   bLazy = new Blazy({
      // container: 'body,html',
      error: function(ele, msg) {
         console.log(ele, msg);
      },
      success: function(img) {

         jimg = $(img);

         if(jimg.parent().hasClass('imagen') ){

            if( ! jimg.parent().hasClass('imgLiquid') ) {

               jimg.parent().addClass('imgLiquid imgLiquidFill')

            }

            jimg.parent().removeClass('op0')

            jimg.parent().imgLiquid();

         }
      }

   });

}
