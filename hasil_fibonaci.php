<?php

$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$deret = $_POST['deret'];

echo "
<table border=1>
     <tr align=center>
            <td>I</td>
            <td>X</td>
    </tr>";

$fibonaci = 0;
for ($i = 1; $i <= $deret; $i++) {
    if ($i == 1) {
        echo "
        <tr align=center>
            <td>$i</td>
            <td>$angka1</td>
        </tr>";
    } elseif ($i == 2) {
        echo "
        <tr align=center>
            <td>$i</td>
            <td>$angka2</td>
        </tr>";
    } else {
        $fibonaci = $angka1 + $angka2;
        $angka1 = $angka2;
        $angka2 = $fibonaci;

        echo "
            <tr align=center>
                <td>$i</td>
                <td>$fibonaci</td>
            </tr>";

        }
    }
    echo "</table>";
    echo "Banyak Deret : ".$deret;
?>