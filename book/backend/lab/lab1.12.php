
<?php

function reiskosten($vertrek, $bestemming){
    $reiskosten = array();
    $reiskosten[1] = array();
    $reiskosten[2] = array();
    $reiskosten[3] = array();
    $reiskosten[4] = array();
    $reiskosten[1][1] = 0; 
    $reiskosten[1][2] = 30;
    $reiskosten[1][3] = 60;
    $reiskosten[1][4] = 90;
    $reiskosten[2][1] = 30;
    $reiskosten[2][2] = 0;
    $reiskosten[2][3] = 40;
    $reiskosten[2][4]= 20;
    $reiskosten[3][1]= 60;
    $reiskosten[3][2]= 40;
    $reiskosten[3][3]= 0;
    $reiskosten[3][4]= 10;
    $reiskosten[4][1]= 90;
    $reiskosten[4][2]= 20;
    $reiskosten[4][3]= 10;
    $reiskosten[4][4]= 0;
    
    $vertrek= array();
    $vertrek[1]= array();
    $vertrek[2]= array();
    $vertrek[3]= array();
    $vertrek[4]= array();

    $vertrek[1]= "Amsterdam";
    $vertrek[2]= "Utrecht";
    $vertrek[3]= "Den Haag";
    $vertrek[4]= "Rotterdam";


    $bestemming= array();
    $bestemming[1]= array();
    $bestemming[2]= array();
    $bestemming[3]= array();
    $bestemming[4]= array();

    $bestemming[1]= "Amsterdam";
    $bestemming[2]= "Utrecht";
    $bestemming[3]= "Den Haag";
    $bestemming[4]= "Rotterdam";

    
    return($reiskosten[$vertrek][$bestemming]);

}
?>

<h1>reiskosten</h1>

Vertrek:



<?php



?>