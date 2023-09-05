<?php

$aplikasi[1] = 'gtAkademik';
$aplikasi[2] = 'gtFinansit';
$aplikasi[3] = 'etPerizinan';
$aplikasi[4] = 'eCampuz';
$aplikasi[5] = 'eOviz';

echo '<ul>';

$i = 1;
while (isset($aplikasi[$i])) {

    echo '<li>' . $aplikasi[$i] . '</li>';

    $i++;
}

echo '</ul>';
