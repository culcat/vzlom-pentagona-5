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
        <input type="number" name="num" id="">
        <button type="submit">try</button>
    </form>
</body>
</html>
<?php
    $plus = 0 ;
    $minus = 0;
    $plusCount = 0 ;
    $minusCount = 0;
    $array = [];
    $arrayPlus = [];
    $arrayMinus = [];
    $arrayCount = $_POST['num'];
    for($i=0;$i<$arrayCount;$i++){
        $array[$i] = rand(-4,5);
        if($array[$i]>=0){
            $arrayPlus[$i]= $array[$i] ;
            $plus = array_sum($arrayPlus);
            $plusCount = count($arrayPlus);
        }
        if($array[$i]<0){
            $arrayMinus[$i]= $array[$i] ;
            $minus = array_sum($arrayMinus);
            $minusCount = count($arrayMinus);
        }
    }

    var_dump( $array);
    echo "<br/>";
    echo "<br/>";
    echo 'Всего положительных:'.$plusCount;
    echo "<br/>";
    echo 'Сумма положительных:'.$plus;
    echo "<br/>";
    echo "<br/>";
    echo 'Всего отрицательных:'.$minusCount;
    echo "<br/>";
    echo 'Сумма  отрицательных:'.$minus;
    echo "<br/>";
    echo "<br/>";
    echo 'Среднее:'.array_sum($array)/count($array);
