<?php include 'productList.php'?>
<?php include 'priceList.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurv</title>
    <link rel="stylesheet" href="cartStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header-top">
        <div class="header-text">
            <!--creating the topnav--->
                <a href="#shop">Shop</a>
                <a href="#Forhandlere">Forhandlere</a>
                <a href="#about">Om os</a>
                <a href="#kontakt">Kontakt</a>
                <a href="#kurv"> <i class="fa fa-fw fa-shopping-cart"></i></a>  
    </div>
    <div class="Kurv">
        <p id="basketLabel">Din kurv</p>
        <img src="resources/Nobel_8900_Prod_miljo_923x923-450x550.jpg" alt="Nobel 8900">
        <p id="itemName"><?php echo $name1 ?></p>
        <p id="selectionLabel">Træsort: Mahogni</p>
        <p id="priceLabel"><?php echo $prices[array_rand($prices)] . ',-'?></p>
        <a href="./checkout.php">Gå videre -></a>
    </div>
</body>
</html>