<!-- How can you declare the array (all type) in PHP? Explain with example
Covert a JSON string to array.  -->



<!-- In PHP, there are three types of arrays:

                 1. Indexed arrays - Arrays with a numeric index.

                 2. Associative arrays - Arrays with named keys.

                 3. Multidimensional arrays - Arrays containing one or more arrays.-->




<!-- index array -->


<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";
echo "<br>";
?>



/////////////////////////////////////////////////////////////////////////////

<?php
echo "<br>";

echo "<br>";

?>
<!-- Associative -->

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br>";
echo "<br>";
?>



/////////////////////////////////////////////////////////////////////////////


<!-- Multidimensional -->

<?php

$info=array("student"=>array("a","b","c","d"),"fees"=>array("1000","2000","3000","4000","5000"));

echo "<pre>";

print_r($info);

print_r($info["student"][2]);

?>