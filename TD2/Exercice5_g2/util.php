<?php

function estValide($j, $m, $a){
    switch($m){
        case 4:
            case 6:
            case 9:
            case 11:
                return $j<=30;
            case 2:
                return $a%4==0 ? $j<=29 : $j<=28;
            default:
                return $j<=31;
    }    
}