<?php
$name = "ivan ivanov";
$email = "ivan@i.ua";
$tel = 380966666666;
$pass = "secret";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<form action="">
    <div class="container">
        <h1>Register</h1>
        <hr>
        <label for=""><b>Name</b></label>
        <input type="text" value="<?php echo $name?>" >

        <label for=""><b>Email</b></label>
        <input type="text" value="<?php echo $email?>" >

        <label for=""><b>Email</b></label>
        <input type="number" value="<?php echo $tel?>" >

        <label for=""><b>Password</b></label>
        <input type="password" value="<?php echo $pass?>">

        <button type="submit" class="">Register</button>
    </div>
</form>

</body>
</html>



