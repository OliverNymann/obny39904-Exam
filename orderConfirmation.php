<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordrebekræftelse</title>
    <link rel="stylesheet" href="confirmationStyle.css">
</head>
<body>
    <div class="order">
        <p>Tak for din ordre <?php echo $_POST["firstname"]?></p>
        <br>
        <p>Du vil modtage en Ordrebekræftelse på email: <?php echo $_POST["email"]?></p>
    </div>


</body>
</html>