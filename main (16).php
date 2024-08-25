<?php
/******************************************************************************

Emre Üçbudak Karadeniz Teknik Üniveristesi

*******************************************************************************/
// PHP FONKSIYONLARA GIRIS
$ad = 5;
function azalt() {
    global $ad;
    echo("parametre almadan dışarıdaki parametreyi kullanma \n");
    echo($ad);
    
}
azalt();




?>
