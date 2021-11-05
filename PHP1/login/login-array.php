<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入畫面</title>
    <style>
        div {
            width: 400px;
            padding: 10px;
            margin: auto;
            box-shadow: 1px 1px 10px;
        }
    </style>
</head>

<body>
    <div>
        <form action="login-array.php" method="post">
            <?php
            $users = [
                ['acc' => 'mack', 'pw' => '1234'],
                ['acc' => 'judy', 'pw' => '4567'],
                ['acc' => 'james', 'pw' => '4444'],
                ['acc' => 'jmary', 'pw' => '8888'],
            ];
            if (!empty($_POST)) {

                $acc = $_POST['acc'];
                $pw = $_POST['pw'];
                $test=false;
                foreach ($users as $user) {
                    if ($acc == $user['acc'] && $pw == $user['pw']) {
                        $test=true;
                    }
                //     if ($acc == $user['acc'] && $pw == $user['pw']) {
                //         echo '帳號及密碼正確';
                //         echo '<br>';
                //         echo '登入成功';
                //     } else {
                //         echo '帳號密碼錯誤';
                //         echo '<br>';
                //         echo '登入失敗';
                //     }
                // }
                }
                if ($test) {
                    echo '帳號及密碼正確';
                    echo '<br>';
                    echo '登入成功';
                } else {
                    echo '帳號密碼錯誤';
                    echo '<br>';
                    echo '登入失敗';
                }
            }
            ?>
            <p>帳號：<input type="text" name="acc"></p>
            <p>密碼：<input type="password" name="pw"></p>
            <p><input type="submit" value="登入"><input type="reset" value="取消"></p>
        </form>
    </div>
</body>

</html>