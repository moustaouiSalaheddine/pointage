<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src="JQ folder/jquery-3.2.1.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->
                <h2 class="active">se connecter</h2>
<!--                <h2 class="active"> Sign In </h2>
                <h2 class="inactive underlineHover">Sign Up </h2>-->

                <!-- Icon -->
                <div class="fadeIn first">
                    <!--<img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />-->
                </div>

                <!-- Login Form -->
                <form>
                    <input type="text" id="email" class="fadeIn second" name="login" placeholder="login">
                    <input type="password" id="password" class="fadeIn third" name="login" placeholder="password">
                    <input type="submit" id="loginBtn" class="fadeIn fourth" value="Log In">
                </form>

                <!-- Remind Passowrd -->
<!--                <div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>
                </div>-->

            </div>
        </div>
        <script src="script/Login.js" type="text/javascript"></script>
    </body>

</html>
