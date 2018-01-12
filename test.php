<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action=<?php echo $_SERVER["PHP_SELF"];?> method ="post">
    NAME: <input type="text" name="name"><br>
    E-mail <input type="text" name="email"><br>
    <input type="submit">

    </form>  
        
    <?php
        $name = ($_POST["name"]);
        $email = ($_POST["email"]);
        echo "output";
        echo '<br>';
        echo $name;
        echo '<br>';
        echo $email;
        echo '<br>';
    ?>
</body>
</html>