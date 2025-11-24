<?php
// require __DIR__ . '/dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANABI HOUSE -main page -</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" > -->
    <script src="./js/index.js" defer></script>
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
    <a href="./auth/login.php">login</a>
</section>
<main>
    <div class="splide" id="diary_slider">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <p class="p_date">日にち1</p> <!-- beforeで’_’を追加して見やすくする -->
                    <p class="p_text">text</p>
                    <p class="p_favorite">お気に入り有無</p>
                </li>
                <li class="splide__slide">
                    <p class="p_date">日にち2</p>
                    <p class="p_text">text</p>
                    <p class="p_favorite">お気に入り有無</p>
                </li>
                <li class="splide__slide">
                    <p class="p_date">日にち3</p>
                    <p class="p_text">text</p>
                    <p class="p_favorite">お気に入り有無</p>
                </li>
            </ul>
        </div>
    </div>
</main>
</body>
</html>