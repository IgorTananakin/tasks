<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/task3/index1.php" method="get">
        <input type="text" placeholder="" name="x1">
        <select name="operation" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" placeholder="" name="x2">
        <input type="submit" value="=" name="=">
        <?php

        require __DIR__ . '/calculator.php';

        if (!empty($_GET)) {
            $x1 = (float)$_GET['x1'];
            $x2 = (float)$_GET['x2'];
            $operation = (string)$_GET['operation'];
            echo calculator($x1 ,$x2, $operation);
        }

        ?>
    </form>
</body>
</html>
