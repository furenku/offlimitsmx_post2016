
var u = new Utils();
var bLazy;

setup_blazy();

jQuery(document).ready(function($){

   jQuery(document).foundation();

   setup_utils();
   setup_plugins();

   console.log("OFF Limits v.3");

});



function setup_plugins() {

   $('.imgLiquid.imgLiquidFill').imgLiquid();
   $('.imgLiquid.imgLiquidNoFill').imgLiquid({ fill: false });


}


function setup_utils() {

   u.verticalCenter();
   u.addWindowResizeFunction(u.verticalCenter);

}



function setup_blazy() {

   bLazy = new Blazy({
      success: function(img) {

         jimg = $(img);

         if(jimg.parent().hasClass('imagen') ){

            if( ! jimg.parent().hasClass('imgLiquid') )
            jimg.parent().addClass('imgLiquid imgLiquidFill')

            jimg.parent().removeClass('op0')

            jimg.parent().imgLiquid();

         }
      }

   });

}
