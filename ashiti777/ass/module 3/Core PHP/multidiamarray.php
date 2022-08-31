<!-- • Declare a Multi Dimensioned array of floats called balances having Three
rows and five columns. -->


<?php

$arr1 = array(
    array('a', 'b', 'c'),
    array('d', 'e', 'f'),
    array('g', 'h', 'i'),
    array('j', 'k', 'h'),
    array('m', 'n', 'o')
);
for ($raw = 0; $raw < 5; $raw++) {
    echo "<table border='20px solid' cellspacing='0px' cellpadding='15px'>";
    for ($col = 0; $col < 3; $col++) {

        echo '<td>' . $arr1[$raw][$col]  . '</td>';
    }
}
