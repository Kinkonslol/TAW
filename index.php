<?php
session_start();

if (isset($_POST["login"]) && isset($_POST["password"])) {
    if ($_POST["login"] == "admin" && $_POST["password"] == "kal") {
        $_SESSION["user"] = "admin";
        
    } else {
        die("Błąd!");
    }
}
if (isset($_SESSION["user"])) {
 header("Location: panel.php");
        exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>haslo od slonia i konia</title>
</head>

<body>
    <form method="post">
        <input type="text" name="login" id="2">
        <button>kal</button>
        <input type="text" name="password" id="3">
        
    </form>
</body>

</html>
