var $j = jQuery.noConflict();
  function datifb(){


   var username = $j("input#nome").val();
   if (username == "") {
    
      $j("#messaggio1").fadeTo(200, 0.1, function() {
  $j(this).removeClass().addClass('error-messages-holder').html('<h3>Alcuni campi sono vuoti, compila tutti i campi.</h3>').fadeTo(900, 1, function() {
      });
       });
  var m1 = 1;
       }else{
         $j("#messaggio1").hide();
         var m1 = 2;
    }
    var pass = $j("input#password").val();
    if(pass == ''){
       
       $j("#messaggio1").fadeTo(200, 0.1, function() {
      
  $j(this).removeClass().addClass('error-messages-holder').html('<h3>Alcuni campi sono vuoti, compila tutti i campi.</h3>').fadeTo(900, 1, function() {
      });
       });
        var m2 = 1; 
    }else{
     $j("#messaggio1").hide();
         var m2 = 2;
    }
    
   var pass2 = $j("input#password2").val();
    if(pass2 == ''){
       
       $j("#messaggio1").fadeTo(200, 0.1, function() {
      
        $j(this).removeClass().addClass('error-messages-holder').html('<h3>Alcuni campi sono vuoti, compila tutti i campi.</h3>').fadeTo(900, 1, function() {
      });
       });
        var m3 = 1; 
    }else{
     $j("#messaggio1").hide();
         var m3 = 2;
    }
    
     if(pass2 != pass){
       
       $j("#messaggio1").fadeTo(200, 0.1, function() {
      
        $j(this).removeClass().addClass('error-messages-holder').html('<h3>Le due password non coincidono.</h3>').fadeTo(900, 1, function() {
      });
       });
        var m4 = 1; 
    }else{
     $j("#messaggio1").hide();
         var m4 = 2;
    }
        
        if(m1 == 2 && m2 == 2 && m3 == 2 && m4 == 2){
    $j.post("ajax/datifb.php", { username: $j('input#nome').val(), password: $j('input#password').val()}, function(risposta) { 
    if(risposta == 1){
          $j("#messaggio1").fadeTo(200, 0.1, function() {
      
$j(this).removeClass().addClass('error-messages-holder').html('<h3>Username occupato.</h3>').fadeTo(900, 1, function() {
      });
       });
              
      
 
    
       }
     if(risposta == 2){
          $j("#messaggio1").hide();
      

                     document.location = 'home.php';
     
    }
       
               
});
}else{
    
}
return false; 
}