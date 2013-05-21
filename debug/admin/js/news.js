 var j = jQuery.noConflict();

     j.post("news_box_princ.php", { }, function(risposta) {
            j("#news").html(risposta)
       });
       
  
 