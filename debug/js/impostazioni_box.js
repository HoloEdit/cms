 var $j = jQuery.noConflict();

     $j.post("ajax/stato_box.php", { }, function(risposta) {
            $j("#box").fadeTo(700, 0.1, function() {
        $j(this).html(risposta).fadeTo(900, 1, function() {
      
          
           });
           });
       });
       
  function stat_box(){
        $j.post("ajax/stato_box_fn.php", { motto: $j('#avatarmotto').val(), bacheca: $j('#visibility:checked').val(), amicizie: $j('#friendRequestsAllowed:checked').val()}, function(risposta) {
     if (risposta == 1) {
   $j("#mex").fadeTo(200, 0.1, function() {
        $j(this).css("display","").fadeTo(900, 1, function() { 
      });
       });
  
  
    }
    
        
  });
       
  }
  
 