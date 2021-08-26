<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    /* header {
        background-color: #00000090;
        color: #fff888;
        padding: 20px;
        text-align: center;
    } */
    </style>
</head>

<body>
    <header>
        <ul>
            <?php
            foreach ($person as $key => $feature) : ?>
            <li>

                <small><?= $key  ?></small>
                <strong><?= $feature . "<br>";; ?></strong>
                <?php endforeach; ?>
            </li>



        </ul>
    </header>

</body>

</html>