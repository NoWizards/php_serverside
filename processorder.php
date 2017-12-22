<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bob's Auto Parts</title>
</head>
<body>
    <h1> Bob's auto parts </h1>
    <h2> Order Results:       
    </h2>
    <?php
    $document_root = $_SERVER['DOCUMENT_ROOT'];


    $tireqty = $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
    $find = $_POST['find'];
    $address = $_POST['address'];
    $date = date('H:i, js F Y');
echo "<p>Order Processed at: ";
echo $date;
echo "</p>";
echo '<p>Your order is as follows: </p>';
echo htmlspecialchars($tireqty).' tires<br />';
echo htmlspecialchars($oilqty).' bottles of oil<br />';
echo htmlspecialchars($sparkqty).' spark plugs<br />';
echo htmlspecialchars($address). ' customer\'s address';
$totalqty = 0;
$totalqty = $tireqty + $oilqty + $sparkqty;
echo "<p>Items ordered: ".$totalqty. "<br/>";
$totalamount = 0.00;

define('TIREPRICE', 100);
define('OILPRICE', 10);
define('SPARKPRICE', 4);

$totalamount = $tireqty*TIREPRICE
+$oilqty*OILPRICE
+ $sparkqty*SPARKPRICE;

echo "Subtotal: $".number_format($totalamount,2)."</p>";
$taxrate = 0.10;
$totalamount = $totalamount*(1 + $taxrate);
echo "<p>Total including tax: $".number_format($totalamount,2)."</p>";
switch($find){
    case "a":
        echo "<p>Regular Custome.</p>";
        break;
    case "b":
        echo "<p>Customer, referred by TC advert</p>";
        break;
    case "c":
        echo "<p>Customer referred by phone directory</p>";
        break;
    case "d":
        echo "<p>Customer referred by word of mouth</p>";
        break;
    default:
        echo "<p>We do not know how this customer found us</p>";
        break;

}
#working on windows xampp
$fp = fopen(getcwd()."\\orders\\orders.txt", 'ab');
flock($fp, LOCK_EX);
#$fp = fopen('orders.txt', 'ab', true);
$outputstring = $date."  \t".$tireqty." tires  \t".$oilqty." oil  \t".$sparkqty." sparks  \t $ ".$totalamount."   \t".$address.PHP_EOL;
fwrite($fp, $outputstring, strlen($outputstring));
flock($fp, LOCK_UN);
fclose($fp);
echo "<p>Order Written.</p>";
?>
</body>
</html>