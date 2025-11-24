<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/diary.css">
</head>
<body>
    <header>
        <h1>日記</h1>
        <nav>
            <button>
                <img id="hint" src="" alt="?">
            </button>
            <button id="return-home">
                <img src="../img" alt="return">
            </button>
        </nav>
    </header>
    <section>
        <div>
            <form action="" method="post">
                <textarea name="diary_content" id="diary_content" cols="150" rows="10" placeholder="日記を書いてください..."></textarea>
                <br>
                <textarea name="diary_content" id="diary_content" cols="150" rows="10" placeholder="今日の成果と学び"></textarea>
                <br>
                <textarea name="diary_content" id="diary_content" cols="150" rows="10" placeholder="今の悩みは？"></textarea>
                <br>
                <textarea name="diary_content" id="diary_content" cols="150" rows="10" placeholder="小さな親切を書こう"></textarea>
                <br>
                <input type="submit" value="保存">
            </form>
        </div>
    </section>
    <script>
        document.getElementById('return-home').addEventListener('click', function() {
            window.location.href = '../index.php';
        });
        document.getElementById('hint').addEventListener('click', function() {
            alert('日記を書くことで自己反省と成長を促進しましょう！');
        });
    </script>
</body>
</html>