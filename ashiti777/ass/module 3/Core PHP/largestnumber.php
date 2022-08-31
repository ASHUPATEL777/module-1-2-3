<?php
$n1 = 500; $n2 = 1000; $n3 = 150;
$max = ($n1 > $n2) ? ($n1 > $n3 ? $n1 : $n3) :
                     ($n2 > $n3 ? $n2 : $n3);
echo "Largest number among ". $n1 . ", ". $n2 ." and " . $n3. " is  : ".$max;
?>