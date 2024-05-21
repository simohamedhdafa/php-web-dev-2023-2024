<?php 

function afficher_tab($t){
    echo "<pre>";
    print_r($t);
    echo "</pre>";
    die();
}

function str_contains_alph_and_num($s){
    $alph = "a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z";
    $alph = explode(",", $alph);
    $num = [0, 1, 2, 3, 4, 5, 6];
    $pass = str_split($s);
    return count(array_intersect($alph, $pass)) != 0 && count(array_intersect($num, $pass)) != 0 ;
}

/*
$tests = ["abcdefgy", "0052634 856", "klm5620"];
foreach($tests as $v)
    if(str_contains_alph_and_num($v))
        echo "$v test valide\n";
    else
        echo "$v test non valide\n";
*/

function valider($login, $pass){
    return true;
}