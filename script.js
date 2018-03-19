$(document).ready(function(){

    //Skriver ut horoskop
    viewHoroscope = function(){
        $.ajax({
            url:"php/viewHoroscope.php",
            method: "GET",
            succes: function(results){
                $(".content").html(results);
            }
        });
    }

    viewHoroscope();
//Visar sparat horoskop
    $("#showHoroscope").click(function(){
        viewHoroscope();
    });
//Sparar horoskop i SESSION och skriver ut om SESSION är tomt
function saveHoroskope(){
    $.ajax({
        url: "addHoroscope.php",
        method: "POST",
        data: {
            "personnr": $("#birthDate").val()
        },
        succes: function(results) {
            if(results == "true"){
                viewHoroscope();
            }
            $(".content").html(results)
        }
    })
}
//Uppdaterar SESSION med nytt horoskop och skriver ut 

$("#updateHoroskope").click(function(){

    $.ajax({
        url:"php/updateHoroscope.php",
        method: "PUT",
        data:{
            "personnr": $("#birthDate").val()
        },
        success: function(results){
            if (results == "true"){
                viewHoroscope();
            }else {
                $("content").html(results);
            }
        }
});

});
});
//Raderar sparat horoskop
$("#removeHoroscope").click(function(){

$.ajax({
    url:"php/deleteHoroscope.php",
    method: "DELETE",
    data:{
        "personNr": $("#birthDate").val()
    },
    succes: function(results){
        $(".content").html(results);
    }
});
});
