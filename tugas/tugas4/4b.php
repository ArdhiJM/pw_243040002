<?php
$component = [
     "Motherboard",
     "Processor",
     "Hard Disk",
     "PC Coller",
     "VGA Card",
     "SSD"
];


echo "<h3>Macam-macam perangkat keras komputer</h3>";
$i = 1;
foreach ($component as $c) {
     echo  "$i. " .  $c  .  "<br>";
     $i++;
}


echo "<h3>Macam-macam perangkat keras komputer baru</h3>";
array_push($component, "Modem", "Card Reader");
sort($component);

$i = 1;
foreach ($component as $c) {
     echo  "$i. " .  $c  .  "<br>";
     $i++;
}