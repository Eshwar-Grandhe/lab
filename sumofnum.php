<!DOCTYPE html>
<html>
<head>
<title>
sum of numbers
</title>
</head>
<body>
    <?php 
        $number = 123;
        $sum = 0;
        $rem = 0;
        while($number > 0)
        {
            $rem = $number % 10;
            $sum += $rem;
            $number /=  10;
        }
        echo "The sum of digits is: ".$sum;
    
    ?>
</body>
</html>