 var $j = jQuery.noConflict();

     $j.post("ajax/bacheca.php", { }, function(risposta) {
            $j("#news").fadeTo(700, 0.1, function() {
        $j(this).html(risposta).fadeTo(900, 1, function() {
      
          
           });
           });
       });
       

 