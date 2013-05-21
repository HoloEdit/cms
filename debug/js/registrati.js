var $j = jQuery.noConflict();
  function registrati(){


   var username = $j("input#registration-nome").val();
   if (username == "") {
    
      $j("#messaggio1").fadeTo(200, 0.1, function() {
        $j(this).removeClass().addClass('field-error').text('Devi inserire un username').fadeTo(900, 1, function() { 
      });
       });
  var m1 = 1;
       }else{
         $j("#messaggio1").fadeTo(200, 0.1, function() {
        $j(this).removeClass().addClass('field-correct').text('Nome valido').fadeTo(900, 1, function() { 
      });
       });
         var m1 = 2;
    }
    var pass = $j("input#registration-password").val();
    if(pass == ''){
       
       $j("#messaggio3").fadeTo(200, 0.1, function() {
      
        $j(this).removeClass().addClass('field-error').text('Devi inserire una password').fadeTo(900, 1, function() {
      });
       });
        var m2 = 1; 
    }else{
       $j("#messaggio3").fadeTo(200, 0.1, function() {
        $j(this).removeClass().addClass('field-correct').text('Password valida').fadeTo(900, 1, function() { 
      });
       });
         var m2 = 2;
    }
    
       var email = $j("input#registration-email").val();
    var x=email;
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
		{
        $j("#messaggio2").fadeTo(200, 0.1, function() {
        $j(this).removeClass().addClass('field-error').text('Email non valida').fadeTo(900, 1, function() {
               });
       });
        var m3 = 1;
		}else{
		 $j("#messaggio2").fadeTo(200, 0.1, function() {
        $j(this).removeClass().addClass('field-correct').text('Email valida').fadeTo(900, 1, function() {
               });
       });
        var m3 = 2;
		}
        
        if(m1 == 2 && m2 == 2 && m3 == 2){
    $j.post("ajax/registrati.php", { username: $j('input#registration-nome').val(), password: $j('input#registration-password').val(), email: $j('input#registration-email').val() }, function(risposta) { 
    if(risposta == 1){
          $j("#messaggio1").fadeTo(200, 0.1, function() {
      
        $j(this).removeClass().addClass('field-error').text('Nome occupato').fadeTo(900, 1, function() {
      });
       });
              
      
 
    
       }
     if(risposta == 2){
            $j("#messaggio1").fadeTo(200, 0.1, function() {
      
        $j(this).removeClass().addClass('field-correct').text('Registrazione...').fadeTo(900, 1, function() {
      });
       });
              
          $j("#messaggio2").fadeTo(200, 0.1, function() {
      
        $j(this).removeClass().addClass('field-correct').text('Registrazione...').fadeTo(900, 1, function() {
      });
       });
       
        $j("#messaggio3").fadeTo(200, 0.1, function() {
      
        $j(this).removeClass().addClass('field-correct').text('Registrazione...').fadeTo(900, 1, function() {
                     document.location = 'home.php';
      });
       });

    }
       
               
});
}else{
    
}
return false; 
}