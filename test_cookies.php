<?php
    $lang = $_COOKIE['lang'];
    $text = "Test";

    function function_1() {
        global $text;
        if ($text == "Test") {
            $text = "OK";
        } else {
            $text = "Test";
        }
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="<?php function_1() ?>">Hey</button>
    <h3><?php echo $text ?></h3>
</body>
</html>