 var $j = jQuery.noConflict();
function utente(){
    
   var nome = $j("input#cerca").val();
   if (nome == "") {
    $j("input#cerca").css("background-color","red").css("color","#fff").val("Nome non valido");
 
      
    }
    $j.post("ajax/cerca.php", { nome: $j('#cerca').val()}, function(risposta) {
     if (risposta == 1) {
     $j("input#cerca").css("background-color","red").css("color","#fff").val("Nome inesistente");
  
    }
     if (risposta == 2) {
    
  
       $j("input#cerca").css("background-color","#fff");
  
            document.location = 'home.php?usr='+nome;
     
  
  
    }
        
  });
  
  return false;
}