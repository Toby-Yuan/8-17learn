<?php
    //var_dump($_POST): 撈取所有在這頁面送出的資料(Array)
    // var_dump($_POST);

    // 要用SESSION就要加
    session_start();
    //isset : 判斷是否存在
    if (isset($_POST["btnOK"])){
        // 用SESSION傳給寫一頁
        $_SESSION["who"] = $_POST["userNameTextBox"];
        header("Location: hello.php");
        
        // 可寫可不寫
        exit();
    }
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

        input{
            margin-top: 20px;
        }

        input[name="btnOK"]{
            padding: 3px 20px;
            background: black;
            color: white;
            border: 0.05px solid rgba(0, 0, 0, 0);
        }

        input[name="btnOK"]:hover{
            background: #e7e7e7;
            color: black;
        }
    </style>
</head>
<body>
    <!-- 把資料先傳給自己來判斷 -->
    <form method="POST" action="">
        Your name:
        <input type="text" name="userNameTextBox">
        <input type="submit" value="submit" name="btnOK">
    </form>
</body>
</html>