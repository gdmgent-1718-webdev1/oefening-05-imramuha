<?php

    function leeftijdBezoekerTester($leeftijdBezoeker){

        if ($leeftijdBezoeker < 16){
            echo "${leeftijdBezoeker} jaar, is te jong voor deze film." . PHP_EOL;
        } else if ($leeftijdBezoeker <= 18) {
            echo "${leeftijdBezoeker} jaar, je hebt ouderlijk toezicht nodig." . PHP_EOL;
        } else {
            echo "Je bent al ${leeftijdBezoeker} jaar, geniet van de film!" . PHP_EOL;
        }
    }

    for($i = 1; $i <= 20; $i++){
    leeftijdBezoekerTester($i);
    }