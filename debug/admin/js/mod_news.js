 var $j = jQuery.noConflict();

 
       
$j("#mod_news").submit(function() {
    var titolo = $j("input#title").val();
    if(titolo == ""){
        $j("input#title").css('background-color','#F3D9D9');
         $j("#msg1").fadeTo(200, 0.1, function() {
          $j(this).removeClass().addClass('alert_error').text('Controlla che i campi siano riempiti correttamente.').fadeTo(900, 1, function() {
          
      });
       });
    }else{
        
         $j("input#title").css('background-color','');
          $j("#msg1").hide()
          $j.post("mod_news.php", {title: $j('#title').val(), img: $j('#img').val(), intro: $j('#news_intro').val(), completa: $j('#news_completa').val(), num: $j('#numero').val()}, function(risposta) {
     if (risposta == 1) {
   $j("#msg1").fadeTo(200, 0.1, function() {
          $j(this).removeClass().addClass('alert_success').text('News modificata con successo.').fadeTo(900, 1, function() {
            
             document.location = 'modifica_news.php';
      });
       });
  
  
    }
    
        
  });
        
    }
      
       
  
  
 return false; 
});