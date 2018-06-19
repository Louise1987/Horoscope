
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
          
        }else{
          
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
            
          }else{
            viewHoroscope();
                    
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
            
          }else{
            
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
         
        }
      })
    }

  









