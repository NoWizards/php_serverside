<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Importing Php</title>
</head>
<body>
    <p>this is a new file while we are importing something...</p>
    <?php
    echo "<p>imported code will come here:</p>";
    require('reusable.php');
    echo "this Script will end here... <br/>";
    echo "<p>testing function: </p>";
    function my_function(){
        echo  "<p>My function was already called</p>";
    }
    my_function();
    ?>
    
</body>
</html>