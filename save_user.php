<?php
 include ("bd.php");
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
    if (isset($_POST['pass'])) { $pass=$_POST['pass']; if ($pass =='') { unset($pass);} }
 if (empty($login) or empty($pass)) 
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $pass = stripslashes($pass);
    $pass = htmlspecialchars($pass);
    $login = trim($login);
    $pass = trim($pass);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
    $result2 = mysqli_query ($connection, "INSERT INTO users (login,pass) VALUES('$login','$pass')");
    if ($result2=='TRUE')
    {
    header("Location: sob.html");
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>