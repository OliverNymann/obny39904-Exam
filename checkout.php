<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="checkOutStyle.css">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <form class="checkOut" action="orderConfirmation.php" method="POST">
            Fornavn: <input type="text" name="firstname">
            <br>
            Efternavn: <input type="text" name="lastname">
            <br>
            Adresse: <input type="text" name="adress">
            <br>
            Postnummer: <input type="text" name="zipCode">
            <br>
            Email: <input type="text" name="email">
            <br>
            <input type="submit" value="Gå til betaling">
        </form>
    </div>
</body>
</html>