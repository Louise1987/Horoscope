<?php

function getSign($datum){
   
    $sign = $datum[2] . $datum[3] . $datum[4] . $datum[5];

   
    if($datum >= '1222' || $datum  <= '1230' || $datum  >= '0101' || $datum  <= '0119'){
        $sign = "<h3>22 december - 19 januari: Stenbocken</h3><img src='img/capricorn.png'>";      
    }
    elseif($horoscope >= '0120' || $horoscope <= '0131' || $horoscope >= '0201' || $horoscope <= '0218'){
        $sign = "<h3>20 januari - 18 februari: Vattumannen</h3><img src='img/aquarius.png'>";
    }
    elseif($horoscope >= '0219' || $horoscope <= '0228' || $horoscope >= '0301' || $horoscope <= '0320'){
        $sign = "<h3>19 februari - 20 mars: Fiskarna</h3><img src='img/fiskarna.png'>";
    }
    elseif($horoscope >= '0321' || $horoscope <= '0331' || $horoscope >= '0401' || $horoscope <= '0419'){
        $sign = "<h3>21 mars - 19 april: Vädur</h3><img src='img/145320518826077950.png'>";
    }
    elseif($horoscope >= '0420' || $horoscope <= '0430' || $horoscope >= '0501' || $horoscope <= '0520'){
        $sign = "<h3>20 april - 20 maj: Oxe</h3><img src='img/14723750691989231915.png'>";
    }
    elseif($horoscope >= '0521' || $horoscope <= '0531' || $horoscope >= '0601' || $horoscope <= '0621'){
        $sign = "<h3>21 maj - 21 juni: Tvilling</h3><img src='img/twins.png'>";
    }
    elseif($horoscope >= '0622' || $horoscope <= '0630' || $horoscope >= '0701' || $horoscope <= '0722'){
        $sign = "<h3>22 juni - 22 juli: Kräfta</h3><img src='img/cancer.png'>";
    }
    elseif($horoscope >= '0723' || $horoscope <= '0731' || $horoscope >= '0801' || $horoscope <= '0822'){
        $sign = "<h3>23 juli - 22 augusti: Lejon</h3><img src='img/lejonet.jpg'>";
    }
    elseif($horoscope >= '0823' || $horoscope <= '0831' || $horoscope >= '0901' || $horoscope <= '0922'){
        $sign = "<h3>23 augusti - 22 september: Jungfru</h3><img src='img/1472374684156882602.png'>";
    }
    elseif($horoscope >= '0923' || $horoscope <= '0930' || $horoscope >= '1001' || $horoscope <= '1022'){
        $sign = "<h3>23 september - 22 oktober: Vågen</h3><img src='img/1472374760754885861.png'>";
    }
    elseif($horoscope >= '1023' || $horoscope <= '1031' || $horoscope >= '1101' || $horoscope <= '1121'){
        $sign = "<h3>23 oktobber - 21 november: Skorpionen</h3><img src='img/273px-Scorpio.svg.png'>";
    }
    elseif($horoscope >= '1122' || $horoscope <= '1130' || $horoscope >= '1201' || $horoscope <= '1221'){
        $sign = "<h3>22 november - 21 december: Skytten</h3><img src='img/sagittarius.png'>";
    }
        
       return $sign;

      
        
    }

?>