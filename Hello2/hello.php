<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            margin: 0px;
            padding: 0px;
            font-family: 微軟正黑體;
        }

        body{
            background: skyblue;
            text-align: center;
            padding-top: 200px;
        }
    </style>
</head>
<body>
    Hello <?php echo $_SESSION["who"]?> !
</body>
</html>