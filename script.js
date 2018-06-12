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
  viewHoroscope();
    
    function addHoroscope(){
      $.ajax({
        url: "addHoroscope.php",
        type:"POST",
        data: { datum: $('#input-id'.val())},
        success:function(result) { 
          if(result == "true"){
            alert("lyckades");
          }else{
            alert("misslyckades");
          
          }
        
          
        }
      })
    }

    function updateHoroscope(){
      $.ajax({
        url: "updateHoroscope.php", 
        type:"POST",
        success: function(update) {
          if(update == "true"){
            alert("lyckades");
          }else{
            alert("misslyckades");         
          }
          
          }
          
      })
     
      
    }

    function clearHoroscope(){
      $.ajax({
        url: "clearHoroscope.php",
        type:"POST",
        success:function(clear) {
          if(clear == "true"){
            alert("lyckades");
          }else{
            alert("misslyckades");
        }
        
      }
      })
    }

    function viewHoroscope(){
      $.ajax({
        url: "viewHoroscope.php",
        type:"GET",
        success:function(view){
          $("#mySign").html(view);
          // if(view == "true"){
          //   alert("lyckades");  
          // }else{
          //   alert("misslyckades");
          // }
        }
      })
    }

  

    // function newHoroscope(){
    //   $.ajax({
    //     url:"addHoroscope.php",
    //     type:"POST", 
    //     succes:function(result) {
    //       alert(result);
    //     }
    //   })
    // }

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







