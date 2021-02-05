<?php
//cek tombol submit
if (isset($_POST["submit"])) {

    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {

        header("Location: Admin.php");
        exit;
    } else {
        $error = true;
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
</head>

<body>
    <h1>Login Admin</h1>
    <?php if(isset($error)) :?>
    <p style="color:red;"> username / password salah </p>
    <?php endif; ?>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <br>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <button type="submit" name="submit"> MASUK </button>
        </form>
    </ul>
</body>

</html>