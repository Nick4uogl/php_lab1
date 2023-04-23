<?php

session_start();

if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];
    if ($username == 'nick' && $password = '123') {
        $_SESSION['username'] = $username;
        header('Location: /lab1/php/user_page.php');
    } else {
        echo 'Incorrect login';
    }
}

?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div>
        <label for="username">username:</label>
        <input type="text" id="username" name="username">
    </div>
    <div>
        <label for="password">password:</label>
        <input type="password" id="password" name="password">
    </div>

    <div><input type="submit" value="submit" name="submit"></div>
</form>