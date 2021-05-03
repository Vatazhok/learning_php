<?php

session_start();
include_once 'open_file.php';

if (!$_SESSION['rezShopBasket']) {
    $_SESSION['rezShopBasket'] = [];
}

$checkBoxes = $_POST['checkbox'];
foreach ($checkBoxes as $i) {
    if (isset ($i)) {
        array_push($_SESSION['rezShopBasket'], $goodsDecode[$i]);
    }
}

//echo "Сессии <pre>";
//print_r($_SESSION);
//echo "</pre>";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- MDB -->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
            rel="stylesheet"
    />
</head>
<body>


<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Кількість на складу</th>
        <th scope="col">Ціна</th>
    </tr>
    </thead>
    <tbody>

    <?php
    foreach ($_SESSION['rezShopBasket'] as $value): ?>
        <tr>
            <td><?php
                echo $value['name']; ?></td>
            <td><?php
                echo $value['quantity']; ?></td>
            <td><?php
                echo $value['price']; ?></td>
        </tr>
    <?php
    endforeach; ?>
    </tbody>
</table>

<button onclick="document.location='clearSession.php'" class="btn btn-primary">Очистити корзину та перейти до вибору
    товарів
</button>


<!-- MDB -->
<script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>
</body>
</html>