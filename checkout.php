<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="checkOutStyle.css">
    <title>Check ud</title>
</head>
<body>
    <div class="form">
        <form class="checkOut" action="orderConfirmation.php" method="POST">
            Fornavn: <input type="text" name="firstname" required>
            <br>
            Efternavn: <input type="text" name="lastname" required>
            <br>
            Adresse: <input type="text" name="adress" required>
            <br>
            Postnummer: <input type="text" name="zipCode" required>
            <br>
            Email: <input type="text" name="email" required>
            <br>
            <input type="submit" value="Gå til betaling" required>
            
        </form>
    </div>
</body>
</html>