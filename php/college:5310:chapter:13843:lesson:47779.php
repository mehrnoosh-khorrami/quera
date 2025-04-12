<?php

$pattern = "/^[A-Za-z ]{3,}$/"; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';

    if (preg_match($pattern, $name)) {
        echo "<!DOCTYPE html>
        <html>
            <head>
                <meta charset='utf-8'>
                <title>Say HI</title>
            </head>
            <body>
                <h1>Say my name!</h1>
                Hello $name
            </body>
        </html>";
    } else {
        echo '<!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <title>Say HI</title>
            </head>
            <body>
                <h1>Say my name!</h1>
                <form method="post" action="form.php">
                    <input type="text" name="name">
                    <span style="color: red">invalid name</span>
                    <input type="submit" value="Say it!">
                </form>
            </body>
        </html>';
    }
} else {
    echo '<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Say HI</title>
        </head>
        <body>
            <h1>Say my name!</h1>
            <form method="post" action="form.php">
                <input type="text" name="name">
                <input type="submit" value="Say it!">
            </form>
        </body>
    </html>';
}

?>