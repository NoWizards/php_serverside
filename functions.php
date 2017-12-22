<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>

    td{
        border-style: solid;
        border-width: 1px;
    }
    </style>
    <title>K-ri Functions</title>
</head>
<body>
    <?php
        $data = ["rown one","row two","row thrww"];
        function create_table($dat){
            echo "<table >";
            reset($dat);
            $value = current($dat);
            while($value){
                echo "<tr >
                    <td>$value</td>
                </tr>\n";
                $value = next($dat); 
            }
            echo "</table>";
        }
        create_table($data);
        echo "<br>";


        function create_other_table($data, $header=NULL, $caption=NULL){
            echo "<table>";
                if($caption){
                    echo "<caption>$caption</caption>";
                }
                if($header){
                    echo "<tr>
                        <th>$header</th>
                    </tr>";
                }
                reset($data);
                $value = current($data);
                while($value){
                    echo "<tr >
                        <td>$value</td>
                    </tr>\n";
                    $value = next($data); 
                }
                echo "</table>";
        }
        $my_header = 'Data to check';
        $my_caption = 'Data about something';
        echo    "<hr><br>";

        create_other_table($data, $my_header, $my_caption);
        echo "<p>testing a passed by reference</p>";
        function increment(&$value, $plus=1){
            $value = $value + $plus;
        }
        $a = 10;
        echo "<p>$a</p>";
        increment($a, 2);
        echo "<p>$a</p><br/>";
    
    ?>
</body>
</html>