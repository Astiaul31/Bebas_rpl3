<?php

    echo "<h4>Perulangan While 1</h4>";
    $ulang = 0;

    while($ulang <= 5){
        echo "<p>Perulangan ke-$ulang</p>";
        $ulang++;
    }
    echo "<br>";
    echo "<h4>Perulangan While 2</h4>";
    $ulang = 5;

    while($ulang >= 0){
         echo "<p>Perulangan ke-$ulang</p>";
         $ulang--;
}
    echo "<br>";
    echo "<h4>Perulangan While 3</h4>";
    $ulang = 0;

    while($ulang <= 5){
    echo " &nbsp $ulang";
    $ulang++;
}
?>