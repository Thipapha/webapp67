<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dinamic Function calls </title>
</head>
<body>
    <?php
    function sayHello(){
        echo "Hello<br />";
        echo "This is PHP<br />";
    }
    $function_holder = "sayHello";
    $function_holder();
    ?>
    
</body>
</html>