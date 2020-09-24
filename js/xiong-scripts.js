//HERE YOU CAN PUT ALL KIND OF SMALL SCRIPTS



//Generic open close element
      (function() {
      jQuery('#tähän avattava suljettu elementti').hide();

      jQuery('#tähän avausnappi id').on('click', function() {    
          jQuery('#tähän mitä avataan').toggle('slow');
        });
      })();
    

jQuery('section').css('display', 'none').fadeIn(1200);      

if(typeof iFrameResize === "function") {
  iFrameResize({
  log: false,

}, '#calculator');
}



