$(document).ready(function(){

    // document.getElementById("birthNumber").value;
    // document.getElementById("visa").innerHTML

    //Hämtar värde i input till addHoroskop
  function addHoroscope() {
     document.getElementById("birthNumber").value();
    $.ajax({
    type: "POST",
    url: "addHoroscope.php",
    data: {"födelsedatum": $("#birthNumber").val()},
    success: $("#tecken").html(visa),
    dataType: html
    
     });
}
});





