<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        <p>
        physics <input type="number" name="mark1">
        </p>

        <p>
        chemistry <input type="number" name="mark2">
        </p>

        <p>
        biology <input type="number" name="mark3">
        </p>

        <p>
        maths <input type="number" name="mark4">
        </p>

        <p>
        computer <input type="number" name="mark5">
        </p>
        <p>
            <input type="submit" name="btn" value="submit">
        </p>
  
    </form>
</body>
</html>

<?php

    if (isset($_POST['btn']))
    {

        $physics = $_POST['mark1'];
        $chemistry = $_POST['mark2'];
        $biology = $_POST['mark3'];
        $maths = $_POST['mark4'];
        $computer = $_POST['mark5'];

        $total = $physics + $chemistry + $biology + $maths + $computer;

        $percentage=($total/5);


        echo 'physics:'.$physics;
        echo '<br>';

        echo 'chemistry:'. $chemistry;
        echo '<br>';

        echo 'biology:'. $biology;
        echo '<br>';

        echo 'maths:'. $maths ;
        echo '<br>';

        echo 'computer:'. $computer;
        echo '<br>';

        echo 'Total:'. $total;
        echo '<br>';

        echo 'Percentage:'.$percentage;
    }


?>