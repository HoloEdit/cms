 var $j = jQuery.noConflict();

    $j.post("ajax/personaggi.php", { nome: $j('#nomeprofilo').val() }, function(risposta) {
            $j("#personaggi").fadeTo(700, 0.1, function() {
        $j(this).html(risposta).fadeTo(900, 1, function() {
      
          
           });
           });
       });
       
  function elimina_pg(asd){
           $j.post("ajax/elimina_pg.php", { id: asd}, function(msg) {
           
          if(msg == 1){
            $j.post("ajax/personaggi.php", { nome: $j('#nomeprofilo').val() }, function(risposta) {
       $j("#personaggi").fadeTo(700, 0.1, function() {
      $j(this).removeClass().html(risposta).fadeTo(900, 1, function() {
          
           });
           });
      
      });
          }
                   
     });
  }