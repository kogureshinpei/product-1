<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/auth.css">
</head>
<body>
    <section>
        <h1>ログイン</h1>
        <from action="" method="post">
            <div>
                <p>name</p>
                <input type="text" name="name" id="name" placeholder="名前を入力してください">
            </div>
            <div>
                <p>password</p>
                <input type="password" name="password" id="password" placeholder="パスワードを入力してください">
            </div>
            <button>login</button>
            <a href="./signup.php">アカウントをお持ちでない方はこちら</a>
        </from>
    </section>
    <script>
        const but = document.querySelector('button');
        but.addEventListener('click', () => {
            alert('ログインが完了しました。');
            if(true){
                window.location.href = '../index.php';
            }
        });
    </script>
</body>
</html>