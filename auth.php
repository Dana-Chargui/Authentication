<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
</head>
<body>
    <?php
        if(isset($_GET["msg"])){
            echo("<h3 style='color:red'>Authentication Error</h3>");
        }
    ?>

        <fieldset>
                <legend>Authentication</legend>
            <form method="POST" action="login.php">
                <input type="text" name="login" placeholder="Enter login"><br>
                <input type="password" name="pass" placeholder="Enter password"><br>
                <input type="submit" value="connection"><br>
            </form>
        </fieldset>
</body>
</html>