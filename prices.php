<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Krt</title>
</head>
<body>
<?php
$prices = array('tires'=> 100, 'oil'=> 10, 'spark plugs'=> 4);
echo "<p>using foreacho statement...</p>";
foreach($prices as $key => $value){
    echo $key." - ".$value;
    echo "<br/>";
}
echo"<hr>
<p>using while statement...</p>";
#using while
while (list($product, $price) = each($prices)){
    echo $product." - ".$price."<br/>";
}
echo"<hr>
<p>after Asorting... asort(prices)</p>";
asort($prices);
foreach($prices as $key => $value){
    echo $key." - ".$value;
    echo "<br/>";
}
echo"<hr>
<p>after Ksorting...  ksort(prices)</p>";
ksort($prices);
foreach($prices as $key => $value){
    echo $key." - ".$value;
    echo "<br/>";
}
?>
    
</body>
</html>