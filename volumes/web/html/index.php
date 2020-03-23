<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$array = [
    ['name' => 'hoge'],
    ['name' => 'fuga']
];
?>
    <div>
        <?php foreach($array as $item) :?>
            <p><?php echo $item['name'] ?></p>
        <?php endforeach; ?>
    </div>
</body>
</html>