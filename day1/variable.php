<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>Variable</div>
    <?php
        // Variable decleared is case sensitive
        $x = 5;
        
        $y = "Samson";

        $X = 500;
        echo " $X";

        //to check data type of variable
        var_dump($x);


        var_dump(5);
        echo "<br>";

        var_dump("John");
        echo "<br>";

        var_dump(3.14);
        echo "<br>";

        var_dump(true);
        echo "<br>";

        var_dump([2, 3, 56]);
        echo "<br>";

        var_dump(NULL);
        echo "<br>";


        //Assign multiple value to variable

        $a = $b = $c = 7;
        echo "  $a  $b  $c ";

    
        include 'scope.php';
        include 'datatype.php';

    ?>
    
</body>
</html>