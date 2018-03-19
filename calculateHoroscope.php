<?php

$datum = substr($_POST["personnr"], -4, 4);
class User{
    private $horoscope;
    function __construct($datum){

        $this->datum = $date;

        if(strlen($datum) < 4){
            $this->horoscope = "<p>Fel personnummer</p>";
        }
        elseif($datum >= '1222' && $datum <= '1230' || $datum >= '0101' && $datum <= '0119'){
            $this->horoscope = "<h3>22 december - 19 januari: Stenbocken</h3>";
        }
        elseif($datum >= '0120' && $datum <= '0131' || $datum >= '0201' && $datum <= '0218'){
            $this->horoscope = "<h3>20 januari - 18 februari: Vattumannen</h3>";
        }
        elseif($datum >= '0219' && $datum <= '0228' || $datum >= '0301' && $datum <= '0320'){
            $this->horoscope = "<h3>19 februari - 20 mars: Fiskarna</h3>";
        }
        elseif($datum >= '0321' && $datum <= '0331' || $datum >= '0401' && $datum <= '0419'){
            $this->horoscope = "<h3>21 mars - 19 april: Vädur</h3>";
        }
        elseif($datum >= '0420' && $datum <= '0430' || $datum >= '0501' && $datum <= '0520'){
            $this->horoscope = "<h3>20 april - 20 maj: Oxe</h3>";
        }
        elseif($datum >= '0521' && $datum <= '0531' || $datum >= '0601' && $datum <= '0621'){
            $this->horoscope = "<h3>21 maj - 21 juni: Tvilling</h3>";
        }
        elseif($datum >= '0622' && $datum <= '0630' || $datum >= '0701' && $datum <= '0722'){
            $this->horoscope = "<h3>22 juni - 22 juli: Kräfta</h3>";
        }
        elseif($datum >= '0723' && $datum <= '0731' || $datum >= '0801' && $datum <= '0822'){
            $this->horoscope = "<h3>23 juli - 22 augusti: Lejon</h3>";
        }
        elseif($datum >= '0823' && $datum <= '0831' || $datum >= '0901' && $datum <= '0922'){
            $this->horoscope = "<h3>23 augusti - 22 september: Jungfru</h3>";
        }
        elseif($datum >= '0923' && $datum <= '0930' || $datum >= '1001' && $datum <= '1022'){
            $this->horoscope = "<h3>23 september - 22 oktober: Vågen</h3>";
        }
        elseif($datum >= '1023' && $datum <= '1031' || $datum >= '1101' && $datum <= '1121'){
            $this->horoscope = "<h3>23 oktobber - 21 november: Skorpionen</h3>";
        }
        elseif($datum >= '1122' && $datum <= '1130' || $datum >= '1201' && $datum <= '1221'){
            $this->horoscope = "<h3>22 november - 21 december: Skytten</h3>";
        }
        else{
            $this->horoscope = "<p>Fel personnummer</p>";
        }

    }
    public function printSign(){
        return $this->horoscope;
    }
}

$horoscope = new User($datum);


?>