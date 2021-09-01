<?php

require "views/partials/header.view.php";
?>

<?php foreach ($users as $user):?>
<ul>
    <li><?=$user->username?></li>
</ul>

<?php endforeach;?>
<h1>User Form</h1>
<form action="users" method="POST">
    <input type="text" name="username">
    <button type="submit">Add</button>
</form>

<?php

require "views/partials/footer.view.php";