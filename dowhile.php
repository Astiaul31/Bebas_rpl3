<?php
echo "<h3>Perulangan do while 1</h3>";
$ulang = 5;

do {
    echo "<p>ini adalah perulangan ke-$ulang</P>";
    $ulang--;
}while ($ulang > 0);

$ulang = 0;

     echo "<br>";
     echo "<h3>Perulangan do while 2</h3>";

do {
    echo "<p>ini adalah perulangan ke-$ulang</P>";
    $ulang++;
}while ($ulang <=5);

echo "<br>";
     echo "<h3>Perulangan do while 3</h3>";

     $ulang = 0;

do {
    echo "<p>No resi</P>";
    echo "<p>09877663</P>";
    $ulang++;
}while ($ulang < 2);
?>