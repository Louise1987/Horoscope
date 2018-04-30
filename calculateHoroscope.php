<?php

function getSign($datum){

    $datum = $_POST["birthNumber"];
   
    $horoscope = $datum[2] . $datum[3] . $datum[4] . $datum[5];

    if($datum[2] >= '1222' || $datum[3]  <= '1230' || $datum[4]  >= '0101' || $datum[5]  <= '0119') {
        $horoscope = "<h3>22 december - 19 januari: Stenbocken</h3><img src='img/capricorn.png'>";
    }
        // if($datum[2] . $datum[3] . $datum[4] . $datum[5] >= '1222' || $datum[2] . $datum[3] . $datum[4] . $datum[5]  <= '1230' || $datum[2] . $datum[3] . $datum[4] . $datum[5]  >= '0101' || $datum[2] . $datum[3] . $datum[4] . $datum[5]  <= '0119'){
        //     $horoscope = "<h3>22 december - 19 januari: Stenbocken</h3><img src='img/capricorn.png'>";
        //     //return $horoscope;
        // }
        // elseif($datum[2] . $datum[3] . $datum[4] . $datum[5] >= '0120' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '0131' || $datum[2] . $datum[3] . $datum[4] . $datum[5] >= '0201' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '0218'){
        //     $horoscope = "<h3>20 januari - 18 februari: Vattumannen</h3><img src='img/aquarius.png'>";
            
        // }
        // elseif($datum[2] . $datum[3] . $datum[4] . $datum[5] >= '0219' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '0228' || $datum[2] . $datum[3] . $datum[4] . $datum[5] >= '0301' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '0320'){
        //     $horoscope = "<h3>19 februari - 20 mars: Fiskarna</h3><img src='img/fiskarna.png'>";
        // }
        // elseif($datum[2] . $datum[3] . $datum[4] . $datum[5] >= '0321' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '0331' || $datum[2] . $datum[3] . $datum[4] . $datum[5] >= '0401' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '0419'){
        //     $horoscope = "<h3>21 mars - 19 april: Vädur</h3><img src='img/145320518826077950.png'>";
        // }
        // elseif($datum[2] . $datum[3] . $datum[4] . $datum[5] >= '0420' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '0430' || $datum[2] . $datum[3] . $datum[4] . $datum[5] >= '0501' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '0520'){
        //     $horoscope = "<h3>20 april - 20 maj: Oxe</h3><img src='img/14723750691989231915.png'>";
        // }
        // elseif($datum[2] . $datum[3] . $datum[4] . $datum[5] >= '0521' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '0531' || $datum[2] . $datum[3] . $datum[4] . $datum[5] >= '0601' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '0621'){
        //     $horoscope = "<h3>21 maj - 21 juni: Tvilling</h3><img src='img/twins.png'>";
        // }
        // elseif($datum[2] . $datum[3] . $datum[4] . $datum[5] >= '0622' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '0630' || $datum[2] . $datum[3] . $datum[4] . $datum[5] >= '0701' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '0722'){
        //     $horoscope = "<h3>22 juni - 22 juli: Kräfta</h3><img src='img/cancer.png'>";
        // }
        // elseif($datum[2] . $datum[3] . $datum[4] . $datum[5] >= '0723' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '0731' || $datum[2] . $datum[3] . $datum[4] . $datum[5] >= '0801' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '0822'){
        //     $horoscope = "<h3>23 juli - 22 augusti: Lejon</h3><img src='img/lejonet.jpg'>";
        // }
        // elseif($datum[2] . $datum[3] . $datum[4] . $datum[5] >= '0823' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '0831' || $datum[2] . $datum[3] . $datum[4] . $datum[5] >= '0901' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '0922'){
        //     $horoscope = "<h3>23 augusti - 22 september: Jungfru</h3><img src='img/1472374684156882602.png'>";
        // }
        // elseif($datum[2] . $datum[3] . $datum[4] . $datum[5] >= '0923' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '0930' || $datum[2] . $datum[3] . $datum[4] . $datum[5] >= '1001' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '1022'){
        //     $horoscope = "<h3>23 september - 22 oktober: Vågen</h3><img src='img/1472374760754885861.png'>";
        // }
        // elseif($datum[2] . $datum[3] . $datum[4] . $datum[5] >= '1023' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '1031' || $datum[2] . $datum[3] . $datum[4] . $datum[5] >= '1101' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '1121'){
        //     $horoscope = "<h3>23 oktobber - 21 november: Skorpionen</h3><img src='img/273px-Scorpio.svg.png'>";
        // }
        // elseif($datum[2] . $datum[3] . $datum[4] . $datum[5] >= '1122' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '1130' || $datum[2] . $datum[3] . $datum[4] . $datum[5] >= '1201' || $datum[2] . $datum[3] . $datum[4] . $datum[5] <= '1221'){
        //     $horoscope = "<h3>22 november - 21 december: Skytten</h3><img src='img/sagittarius.png'>";
        // }
        
       return $horoscope;

       //echo $horoscope;
        
    }

?>