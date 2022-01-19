<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $x=10;
    $y=1;

    echo "x=x+10 : ".$x+=10; //x=x+10
    echo "<br>";
    echo "x=x-5 : ".$x-=5; //x=x-10
    echo "<br>";
    echo "x=x/5 : ".$x/=5; //x=x/10
    echo "<br>";
    echo "x=x*2 : ".$x*=2; //x=x*10
    echo "<br>";
    echo "x=x%10 : ".$x%=10; //x=x%10
    echo "<br>";
    echo $x/$y;


    ?>

</body>
</html>