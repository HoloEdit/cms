 var $j = jQuery.noConflict();
$j("#cerca_ut").submit(function() {
    
   var nome = $j("input#cerca").val();
   if (nome == "") {
    $j("input#cerca").css("background-color","red").css("color","#fff").val("Nome non valido");
 
      
    }
    $j.post("cerca.php", { nome: $j('#cerca').val()}, function(risposta) {
     if (risposta == 1) {
     $j("input#cerca").css("background-color","red").css("color","#fff").val("Nome inesistente");
  
    }
     if (risposta == 2) {
    
  
       $j("input#cerca").css("background-color","#fff");
  
            document.location = 'modifica_ut.php?utente='+nome;
     
  
  
    }
        
  });
  
  
 return false; 
});