<?php
session_start();
if (!empty($_SESSION)){
    echo 'Привіт' . ' ' . $_SESSION['User'];
?>
    <button onclick="document.location='clearSession.php'" class="">Вийти з акаунта </button>
<?php
    die();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>auth</title>
</head>
<body>
<form action='function_auth.php' method='post'>
    <h1>Форма авторизації</h1>
    <p>Логін<br/><input type='text' name='login' required></p>
    <p>Пароль<br/><input type='password' name='pass' required></p>
    <p><input type='submit' name='submit' value='Увійти'> <br></p></form>
</form>
<p>Немає акаунта? <a href="reg.php">Зареєструватися</a></p>
</body>
</html>

