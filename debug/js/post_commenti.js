 var $j = jQuery.noConflict();
 function messaggio_bac(){
  
   var comm = $j("textarea#commento").val();
   if (comm == "") {
    
      $j("#messaggio_bacheca").fadeTo(200, 0.1, function() {
        $j(this).removeClass().addClass('errore-bac ').text('Commento non valido').fadeTo(900, 1, function() { 
      });
       });
  
       }else{
          
        $j("#messaggio_bacheca").fadeTo(200, 0.1, function() {
        $j(this).removeClass().addClass('corretto-bac ').text('Caricamento').fadeTo(900, 1, function() { 
            $j("a#invia_comm").hide();
             $j.post("ajax/commenti.php", { commento: $j('textarea#commento').val(), nomeprofilo: $j('input#nomeprofilo').val() }, function(risposta) { 
            if(risposta == 1){
            $j.post("ajax/bacheca.php", { nome: $j('#nomeprofilo').val() }, function(risposta1) {
          $j("#testi").fadeTo(700, 0.1, function() {
      $j(this).removeClass().html(risposta1).fadeTo(900, 1, function() {
        $j("textarea#commento").attr("value", '');
        $j("#messaggio_bacheca").fadeTo(200, 0.1, function() {
        $j(this).removeClass().addClass('corretto-bac ').text('@nomeutente per taggare').fadeTo(900, 1, function() { 
      });
       });
        $j("a#invia_comm").show();
        
                           });
                         });
                        });
                        
                        }else{
                             $j("#messaggio_bacheca").fadeTo(700, 0.1, function() {
         $j(this).removeClass().addClass('errore-bac ').text('Errore del server').fadeTo(900, 1, function() { 
                           });
                         });
                            $j("#messaggio_bacheca").fadeTo(200, 0.1, function() {
        $j(this).removeClass().addClass('errore-bac ').text('Errore del server').fadeTo(900, 1, function() { 
      });
       });
                        }
                        });
                     });
                    });
    }
    
        
    
  
  return false;
}

  function Smile(quale_faccina)
   {
      document.post_comm.commento.value += quale_faccina;
   }

