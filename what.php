<?php
$array = array();
$array []= 'safe';
$array []= 'unsafe';
$array [] = 'safe';
$tainted = $array[1];

$legal_table = array("safe1", "safe2");

if (!in_array($tainted, $legal_table, true)) {
    $tainted = $tainted;
} else {
    $tainted = $legal_table[0];
}

echo $tainted;
?>