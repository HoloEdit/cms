 var $j = jQuery.noConflict();

     $j.post("sbanna_ut.php", { }, function(risposta) {
            $j("#box1").fadeTo(700, 0.1, function() {
        $j(this).html(risposta).fadeTo(900, 1, function() {
      
          
           });
           });
       });
       
  function sbanna_ut(asd){
           $j.post("sbanna_ut_funzione.php", { id: asd}, function(msg) {
           
          if(msg == 1){
    $j.post("sbanna_ut.php", { }, function(risposta1) {
           $j("#box1").fadeTo(700, 0.1, function() {
      $j(this).html(risposta1).fadeTo(900, 1, function() {
          
           });
           });
      
      });
          }
                   
     });
  }
  
 