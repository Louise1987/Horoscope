
  viewHoroscope();
    
    function addHoroscope(){
      $.ajax({
        url: "addHoroscope.php",
        type:"POST",
        data: { 
          datum: $('#input-id').val()
        },
        success:function(result) { 
          if(result == "true"){
            viewHoroscope();
            console.log("lyckades att spara datum");  
          }else{
            console.log("misslyckades med att sätta datum");
          
          }          
        }
      })
    }

    function updateHoroscope(){
      $.ajax({
        url: "updateHoroscope.php", 
        type:"PUT",
        data:{
          datum: $('#input-id').val()
        },
        success: function(update) {
          console.log(update);
          if(update == "true"){
            viewHoroscope();
            console.log("lyckades uppdatera datum");
          }else{
            //viewHoroscope();
            console.log("misslyckades uppdatera datum");         
          }
          
          }
          
      })
     
      
    }

    function clearHoroscope(){
      $.ajax({
        url: "clearHoroscope.php",
        type:"DELETE",
        success:function(clear) {
          if(clear == "true"){
            viewHoroscope();
            console.log("lyckades att radera");
          }else{
            console.log("misslyckades att radera");
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

  









