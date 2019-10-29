
<html>
    <head>
        <title>Welcome to Test_MVC</title>
        <link rel="stylesheet" href="<?= CSS_URL?>login.css">
    </head>
    <body>
        <div class="formBox">
            <form action="index.php?controller=login&action=doLogin" method="post">
                <label for="login">
                    <input id="login" type="text" name="user_login" placeholder="Login">
                </label>



                //ads
                <label for="pass">
                    <input id="pass" type="password" name="user_password" placeholder="Password">
                </label>
                <button name="login">Login</button>
            </form>
        </div>

    </body>
</html>
