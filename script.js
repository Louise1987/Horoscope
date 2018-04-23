$(document).ready(function(){

    //Hämtar värde i input till addHoroskop
   
     
  function addHoroscope(){
    document.getElementById("birthNumber").val();
    $.ajax({
    type: "POST",
    url: "addHoroscope.php",
    data: {"födelsedatum": $("#birthNumber").val()},
    success: $("#tecken").html(visa),
    dataType: html
    
      });
    }
  });







