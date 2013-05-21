 var $j = jQuery.noConflict();

 
       
$j("#zambacmd").submit(function() {
 
          $j.post("comandi_funzione.php", {comando: $j('#comandi').val()}, function(risposta) {
     if (risposta == 1) {
   $j("#msg1").fadeTo(200, 0.1, function() {
          $j(this).removeClass().addClass('alert_success').text('News modificata con successo.').fadeTo(900, 1, function() {
            
             document.location = 'modifica_news.php';
      });
       });
  
  
    }
    
        
  });
        
 
      
       
  
  
 return false; 
});