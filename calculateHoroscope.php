<?php

function getSign($datum){

    $datum = $_POST["birthNumber"];
   
    $horoscope = $datum[2] . $datum[3] . $datum[4] . $datum[5];

   
    if($datum >= '1222' || $datum  <= '1230' || $datum  >= '0101' || $datum  <= '0119'){
        $horoscope = "<h3>22 december - 19 januari: Stenbocken</h3><img src='img/capricorn.png'>";      
    }
    elseif($datum >= '0120' || $datum <= '0131' || $datum >= '0201' || $datum <= '0218'){
        $horoscope = "<h3>20 januari - 18 februari: Vattumannen</h3><img src='img/aquarius.png'>";
    }
    elseif($datum >= '0219' || $datum <= '0228' || $datum >= '0301' || $datum <= '0320'){
        $horoscope = "<h3>19 februari - 20 mars: Fiskarna</h3><img src='img/fiskarna.png'>";
    }
    elseif($datum >= '0321' || $datum <= '0331' || $datum >= '0401' || $datum <= '0419'){
        $horoscope = "<h3>21 mars - 19 april: Vädur</h3><img src='img/145320518826077950.png'>";
    }
    elseif($datum >= '0420' || $datum <= '0430' || $datum >= '0501' || $datum <= '0520'){
        $horoscope = "<h3>20 april - 20 maj: Oxe</h3><img src='img/14723750691989231915.png'>";
    }
    elseif($datum >= '0521' || $datum <= '0531' || $datum >= '0601' || $datum <= '0621'){
        $horoscope = "<h3>21 maj - 21 juni: Tvilling</h3><img src='img/twins.png'>";
    }
    elseif($datum >= '0622' || $datum <= '0630' || $datum >= '0701' || $datum <= '0722'){
        $horoscope = "<h3>22 juni - 22 juli: Kräfta</h3><img src='img/cancer.png'>";
    }
    elseif($datum >= '0723' || $datum <= '0731' || $datum >= '0801' || $datum <= '0822'){
        $horoscope = "<h3>23 juli - 22 augusti: Lejon</h3><img src='img/lejonet.jpg'>";
    }
    elseif($datum >= '0823' || $datum <= '0831' || $datum >= '0901' || $datum <= '0922'){
        $horoscope = "<h3>23 augusti - 22 september: Jungfru</h3><img src='img/1472374684156882602.png'>";
    }
    elseif($datum >= '0923' || $datum <= '0930' || $datum >= '1001' || $datum <= '1022'){
        $horoscope = "<h3>23 september - 22 oktober: Vågen</h3><img src='img/1472374760754885861.png'>";
    }
    elseif($datum >= '1023' || $datum <= '1031' || $datum >= '1101' || $datum <= '1121'){
        $horoscope = "<h3>23 oktobber - 21 november: Skorpionen</h3><img src='img/273px-Scorpio.svg.png'>";
    }
    elseif($datum >= '1122' || $datum <= '1130' || $datum >= '1201' || $datum <= '1221'){
        $horoscope = "<h3>22 november - 21 december: Skytten</h3><img src='img/sagittarius.png'>";
    }
        
       return $horoscope;

      
        
    }

?>