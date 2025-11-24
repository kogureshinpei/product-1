<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/todo.css">
    <script src="../js/todo.js" defer></script>
</head>
<body>
    <header>
        <h1>TODO</h1>
        <nav>
            <button id="return">
                <img src="" alt="return">
            </button>
        </nav>
    </header>
    <section>
        <div class="container">
            <form id="form">
                <input type="text" id="input" placeholder="TODOを入力してください" autocompolete="off">
            </form>
            <ul id="ul"></ul>
        </div>
    </section>
    <footer>
        <div>
            <p>TODOを入力したらEnterを押してください</p>
            <p>クリックで削除、右クリックで完了状態(赤文字)にできます</p>
        </div>
    </footer>
</body>
</html>