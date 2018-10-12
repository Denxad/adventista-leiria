<?php
/**
 * User: xadden
 * Date: 12-10-2018
 */
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>

    <link type="text/css" rel="stylesheet" href="{{asset("css/login.css")}}"/>
</head>
<body>
<div class="layer">
    <div class="wrapper">
        <form class="content" action="" method="post">
            <img class="logo" src="{{asset('images/adventist_logo_white.png')}}" alt="Logotipo Adventista">

            <div class="form-fields-group">
                <input class="form-fields" name="email" type="email" placeholder="Email">
                <span class="underline"></span>
            </div>

            <div class="form-fields-group">
                <input class="form-fields" name="password" type="password" placeholder="Password">
                <span class="underline"></span>
            </div>

            <input class="button" type="submit" value="Login">
        </form>
    </div>
</div>
</body>
</html>

