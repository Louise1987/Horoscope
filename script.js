//$(document).ready(function(){

    //Hämtar värde i input till addHoroskop
  // function addHoroscope(){
  //   document.getElementById("birthNumber").val();
  //   $.ajax({
  //   type: "POST",
  //   url: "addHoroscope.php",
  //   data: {"birthNumber": $("#birthNumber").val()},
  //   success: $("#tecken").html(visa),
  //   dataType: html
    
  //     });
  //   }
    
    function addHoroscope(){
      $.ajax({
        url: "test.php",
        type:"POST",
        success:function(result) { 
        alert(result);
          
        }
      });
    }

    //Skickar värde till viewHoroscope
    // function saveHoroscope(){
    //   document.getElementById("birthNumber").val();
    //   $.ajax({
    //     type: "GET",
    //     url: "viewHoroscope.php",
    //     data: {"birthNumber": $("#birthNumber").val()},
    //     succes: $("#tecken").html(visa),
    //     dataType: html

    //   })
    // }

 //});







