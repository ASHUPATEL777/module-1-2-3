<!-- How can you tell if a number is even or odd without using any Condition or
loop?  -->

<?php
if (isset($_POST['submit'])) {
    $num = $_POST['passnum'];
    $arr = array("0" => 'EVEN NUMBER<br><br>', "1" => "ODD NUMBER</br></br>");
    echo $arr[$num % 2];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <style>

    </style>
</head>

<body>
    <form method="POST">
        <input type="text" name="passnum">
        <input type='submit' name='submit'>
    </form>
</body>

</html>