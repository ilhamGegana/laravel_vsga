<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require 'app/view/' . $view . '.php';
    ?>

    <h1>Welcome to the Home Page</h1>
    <h2>Users:</h2>
    <ul>
        <?php foreach ($users as $user) : ?>
            <li><?php echo $user['name']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>