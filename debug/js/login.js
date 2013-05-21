 var $j = jQuery.noConflict();

  function login(){

   var username = $j("input#credentials-email").val();
   if (username == "") {
    
      $j("#errore").fadeTo(200, 0.1, function() {
        $j(this).removeClass().addClass('errore-login').text('Controlla che tutti i campi siano riempiti').fadeTo(900, 1, function() { 
      });
       });
  var l1 = 1;
       }else{
         $j("#errore").hide()
           var l1 = 2;
    }
    var pass = $j("input#credentials-password").val();
    if(pass == ''){
       
         $j("#errore").fadeTo(200, 0.1, function() {
        $j(this).removeClass().addClass('errore-login').text('Controlla che i campi non siano vuoti.').fadeTo(900, 1, function() { 
      });
       });
         var l2 = 1;
    }else{
       $j("#errore").hide()
         var l2 = 2;
    }
    
    if(l1 == 2 && l2 == 2){
    $j.post("ajax/login.php", { username: $j('#credentials-email').val(), password: $j('#credentials-password').val() }, function(risposta) { 
   
     if(risposta == 1){
         $j("#errore").fadeTo(200, 0.1, function() {
        $j(this).removeClass().addClass('errore-login').text('Nome inesistente.').fadeTo(900, 1, function() { 
      });
       });
        
       }
       
       if(risposta == 2){
         $j("#errore").fadeTo(200, 0.1, function() {
        $j(this).removeClass().addClass('errore-login').text('Controlla che la password sia corretta.').fadeTo(900, 1, function() { 
      });
       });
        
       }
   
    if(risposta == 3){
        $j("#errore").hide()  
         
            document.location = 'home.php';
    
       }
          if(risposta == 4){
         $j("#errore").fadeTo(200, 0.1, function() {
        $j(this).removeClass().addClass('errore-login').text('Sei stato bannato.').fadeTo(900, 1, function() { 
      });
       });
        
       }
     
               
});
}else{
    
}
return false; 
}