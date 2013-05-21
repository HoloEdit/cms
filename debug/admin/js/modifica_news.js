 var $j = jQuery.noConflict();

     $j.post("modifica_news_funzione.php", { }, function(risposta) {
            $j("#box1").fadeTo(700, 0.1, function() {
        $j(this).html(risposta).fadeTo(900, 1, function() {
      
          
           });
           });
       });
       
  function elimina_news(asd){
           $j.post("elimina_news.php", { id: asd}, function(msg) {
           
          if(msg == 1){
    $j.post("modifica_news_funzione.php", { }, function(risposta1) {
           $j("#box1").fadeTo(700, 0.1, function() {
      $j(this).html(risposta1).fadeTo(900, 1, function() {
          
           });
           });
      
      });
          }
                   
     });
  }
  
 