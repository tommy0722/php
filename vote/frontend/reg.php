<<h2 class="text-center font-weight-bold">會員註冊</h2>
    <form action="./api/reg.php" method="post" id="regForm">
        <table>
            <tr>
                <td>帳號：</td>
                <td><input type="text" name="account" id=""></td>
            </tr>
            <tr>
                <td>密碼：</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td>電子郵件：</td>
                <td><input type="text" name="mail" id=""></td>
            </tr>
            <tr>
                <td>姓名：</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>生日：</td>
                <td><input type="date" name="birthday" id=""></td>
            </tr>
        </table>
        <div><input type="submit" value="確認送出"> </div>
    </form>