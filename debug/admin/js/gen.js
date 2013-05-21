 var $j = jQuery.noConflict();

 
       
$j("#gen").submit(function() {
        $j.post("gen_funzione.php", { motivo: $j('#motivo').val(), chiuso: $j('#visibility:checked').val(), nome: $j('#nome').val()}, function(risposta) {
     if (risposta == 1) {
   $j("#mex").fadeTo(200, 0.1, function() {
          $j(this).removeClass().addClass('alert_success').text('Impostazioni modificate con successo.').fadeTo(900, 1, function() {
            
             document.location = 'generali.php';
      });
       });
  
  
    }
    
        
  });
       
  
  
 return false; 
});