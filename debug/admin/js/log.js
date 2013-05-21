 var $j = jQuery.noConflict();

     $j.post("log_funzione.php", { }, function(risposta) {
            $j("#box1").fadeTo(700, 0.1, function() {
        $j(this).html(risposta).fadeTo(900, 1, function() {
      
          
           });
           });
       });

  
 