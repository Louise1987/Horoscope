<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script>

function calculate(){
    var x = documentgetElementById("dob").value;
    if(x==="")
    alert("Välj ditt födelsedatum");
    else
    {
        //alert("Date: "+x);
        var result = x.('-');
        var m = result.join('');
        var sum = parseInt(m[0])+parseInt(m[1])+parseInt(m[2])+parseInt(m[3])+
                parseInt(m[4])+parseInt(m[5])+parseInt(m[6])+parseInt(m[7]);
        
        //alert("Sum: "+sum);
        var num = parseInt(sum);
        var cal=0;
        while(num >0) {
            var rem = num%10;
            cal += rem;
            num = Math.floor(num / 10);
            if(cal > 9) {
                num = cal;
                cal = 0;
            }
        }

    }
    switch(cal) {
        case 1:
        hide('a');
        document.getElementByClassName('a')[0].style.display = 'block';
        break;

        case 2:
        hide('b');
        document.getElementByClassName('b')[0].style.display = 'block';
        break;

        case 3:
        hide('c');
        document.getElementByClassName('c')[0].style.display = 'block';
        break;

        case 4:
        hide('d');
        document.getElementByClassName('d')[0].style.display = 'block';
        break;

        case 5:
        hide('e');
        document.getElementByClassName('e')[0].style.display = 'block';
        break;

        case 6:
        hide('f');
        document.getElementByClassName('f')[0].style.display = 'block';
        break;

        case 6:
        hide('g');
        document.getElementByClassName('g')[0].style.display = 'block';
        break;

        case 7:
        hide('h');
        document.getElementByClassName('h')[0].style.display = 'block';
        break;

        case 8:
        hide('i');
        document.getElementByClassName('i')[0].style.display = 'block';
        break;

        case 9:
        hide('j');
        document.getElementByClassName('j')[0].style.display = 'block';
        break;

        case 10:
        hide('k');
        document.getElementByClassName('k')[0].style.display = 'block';
        break;

        case 11:
        hide('l');
        document.getElementByClassName('l')[0].style.display = 'block';
        break;

    }
}
function hide(clnm) {
    var arr = ['a','b','c','d','e','f','g','h','i','j','k','l'];
    for(i=0; i<arr.lenght; ++i) {
        if(arr[i] != clnm)
        document.getElementByClassName(arr[i])[0].style.display = 'none';
    }
}


        // function zodiac(day, month) {
        //     var zodiac =['', 'Capricorn', 'Aquarius', 'Pisces', 'Aries', 'Taurus', 'Gemini', 'Cancer', 'Leo', 'Virgo', 'Libra', 'Scorpio', 'Sagittarius', 'Capricorn'];
        //     var last_day = ['', 19, 18, 20, 20, 21, 21, 22, 22, 21, 22, 21, 20, 19];
        //     return (day > last_day[month]) ? zodiac[month*1 + 1] : zodiac[month];
        //     }
        //     var z_sign = zodiac(15, 10);

            
    </script>
</head>
<body>
    


<?php

echo $_POST['personnr'];

?>

</body>
</html>