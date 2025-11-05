<?php
// require __DIR__ . '/dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANABI HOUSE -main page -</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" >
    <script src="./js/index.js"></script>
</head>
<body>
<header class="header">
    <h1>MANABI HOUSE</h1>
    <nav>
        <a href="./functon/todo.php">
            <img src="./img/えんぴつ付きのノートアイコン.svg" alt="TODO">
        </a>
        <a href="./functon/diary.php">
            <img src="./img/読書のアイコン.svg" alt="DIARY">
        </a>
    </nav>
</header>
<section class="left-side">
    <p>重要度</p>
    <input type="text" name="priority" id="priority" placeholder="重要度を入力してください">
    <div>
        <ul>
            <li>重要度</li>
            <li>タスクの内容</li>
        </ul>
    </div>
</section>
<main>
    <div>
        <p>日にち</p>
        <p>text</p>
        <p>お気に入り有無</p>
    </div>
    <a href="./auth/login.php">login</a>
</main>
</body>
</html>