<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bob's auto parts - Freigh Costs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table><tr class="titulo">
        <td>Distance</td>
        <td>Cost</td>
    </tr>
    <?php
    $distance = 50;
    while($distance <= 250){
        echo "
        <tr>
            <td>$distance</td>
            <td>".($distance/10)."</td>        
        </tr>\n";
        $distance += 50;
    }
    ?>

    </table>
    
</body>
</html>