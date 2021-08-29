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
        font-family: "Helvetica Neue", Helvetica, Arial;
    } */
    </style>
</head>

<body>
    <ul>
        <li>
            <a href="index">Home</a>
        </li>
        <li>
            <a href="product">Product</a>
        </li>
        <li>
            <a href="contact">Contact</a>
        </li>
    </ul>
    <ul>
        <?php foreach ($tasks as $task):?>

        <li>
            <?php 
            if($task->completed){
                
                echo "<strike>$task->description</strike>";
            }else{

                echo "$task->description";
            }
            
            ?>
        </li>

        <?php endforeach; ?>

    </ul>
</body>

</html>