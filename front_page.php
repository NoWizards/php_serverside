<?php
$pictures = ['brakes.png', 'headlight.png', 'spark_plug.png', 'steering_wheel.png', 'tire.png', 'wiper_blade.png'];
shuffle($pictures);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Front Page</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<div align="center">
<table style="width: 100%; border: 0; table-layout: fixed;">
    <tr>
        <?php
            for($i = 0; $i<3; $i++){
                echo "<td style=\"width: 33%; text-align:center \">
                    <img style=\" display:block; width:100%; height:auto;\"src=\"imgs/";
                    echo $pictures[$i];                    
                    
                    echo "\" width></td>";
            }
        ?>
    </tr>
</table>
</div>

    
</body>
</html>