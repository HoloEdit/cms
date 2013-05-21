 var $j = jQuery.noConflict();

 
       
$j("#mod_ut").submit(function() {
 
          $j.post("modifica_ut_funzione.php", { username: $j('#username').val(), user: $j('#user').val(), rank: $j('#rank').val(), vip_points: $j('#vip_points').val(), activity_points: $j('#activity_points').val(), credits: $j('#crediti').val(), ruolo: $j('#ruolo').val(), motto: $j('#motto').val()}, function(risposta) {
     if (risposta == 1) {
   $j("#msg3").fadeTo(200, 0.1, function() {
          $j(this).removeClass().addClass('alert_success').text('Utente modificato con successo.').fadeTo(900, 1, function() {
    location.reload();
      });
       });
  
  
    }
    
        
  });
        
   
      
       
  
  
 return false; 
});