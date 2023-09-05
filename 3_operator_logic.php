<?php

function pembagian($bil1, $bil2)
{
    $result = 0;
    while ($bil1 >= $bil2) {
        $bil1 -= $bil2;
        $result++;
    }

    return $result;
}

$hasil1 = pembagian(7, 2);
$hasil2 = pembagian(8, 4);

echo "7 : 2 menghasilkan output " . $hasil1 . "<br>";
echo "8 : 4 menghasilkan output " . $hasil2 . "<br>";
