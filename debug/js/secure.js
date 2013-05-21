 var $j = jQuery.noConflict();

     $j.post("ajax/secure.php", { }, function(risposta) {
            $j("#controllo").fadeTo(700, 0.1, function() {
       
      if(risposta == 1){
         document.location = 'index.php';
      }else{
        
      }
          
           });
       });
       
