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

<?php
    $images = include __DIR__.'/mas.php';
    foreach ($images as $id => $value) {
?>
    <a href="/task3/image.php?id=<?php echo $id;?> ">
        <img src=" <?php echo $value;?>" alt="" height="100px" width="100px">
    </a>
    <?php
        }
    ?>

</body>
</html>

