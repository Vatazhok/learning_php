<?php

session_start();
include_once 'open_file.php';
$count = 0;
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
<!--shopping_basket.php-->
<form action="shopping_basket.php" method="post">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Кількість на складу</th>
            <th scope="col">Ціна</th>
            <th scope="col">Вибір</th>
        </tr>
        </thead>
        <tbody>

        <?php
        foreach ($goodsDecode as $value): ?>
            <tr>
                <td><?php
                    echo $value['name']; ?></td>
                <td><?php
                    echo $value['quantity']; ?></td>
                <td><?php
                    echo $value['price']; ?></td>
                <th scope="row">
                    <div class="form-check">
                        <input

                                name="checkbox[]"
                                class="form-check-input"
                                type="checkbox"
                                value="<?php
                                echo $count ?>"
                                id="flexCheckDefault"
                        />

                    </div>
                </th>
            </tr>

            <?php
            $count++;
        endforeach; ?>
        </tbody>
    </table>
    <button type="submit" class="btn btn-primary p-4">Відправити до корзини</button>
</form>


<!-- MDB -->
<script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>
</body>
</html>