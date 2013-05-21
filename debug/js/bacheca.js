 var $j = jQuery.noConflict();

     $j.post("ajax/bacheca.php", { nome: $j('#nomeprofilo').val() }, function(risposta) {
            $j("#testi").fadeTo(700, 0.1, function() {
        $j(this).html(risposta).fadeTo(900, 1, function() {
      
          
           });
           });
       });
       
  function elimina_comm(asd){
           $j.post("ajax/elimina_comm.php", { id: asd}, function(msg) {
           
          if(msg == 1){
             $j.post("ajax/bacheca.php", { nome: $j('#nomeprofilo').val() }, function(risposta1) {
           $j("#testi").fadeTo(700, 0.1, function() {
      $j(this).html(risposta1).fadeTo(900, 1, function() {
          
           });
           });
      
      });
          }
                   
     });
  }
  
 