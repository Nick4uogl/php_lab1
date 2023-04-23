<?php

// Ми можемо передати дані через url за допомогою $_POST $_GET суперглобальних змінних

//echo $_GET['name'];

if (isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name;
}

?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="name">name:</label>
    <input type="text" id="name" name="name">
    <div><input type="submit" value="submit" name="submit"></div>
</form>