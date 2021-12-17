<?php 

include 'productList.php'; 
include 'priceList.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="style.css">
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
        <!--creating the dropdown menu--->
        <div class="dropDownMenu">
            <button class="dropper">Kategorier</button>
            <div class="dropDown-items">
                <a href="#laenestole">Lænestole</a>
                <a href="#funktionsstole">Funktionsstole</a>
                <a href="#stabelstole">Stabelstole</a>
                <a href="#spisestole">Spisebordsstole</a>
                <a href="#sofa">Sofaer</a>
                <a href="#borde">Borde</a>
            </div>
        </div>
    </div>
    <!--creating the item grid for all the products--->
    <div class="shop-grid">
        <a class="shop-item shop-item1" href="./product.php">
            <img src="resources/Nobel_8900_Prod_miljo_923x923-450x550.jpg" alt="Nobel 8900">
            <p id="name"><?php echo $name1 ?></p>
            <p id="price"><?php echo $prices[array_rand($prices)] . ',-';?></p>
            <button><i class="fa fa-fw fa-shopping-cart"></i></button>
        </a>
        <a class="shop-item shop-item2">
            <img src="resources/Plus_5060_graa_compressed.jpg" alt="Plus 5060">
            <p id="name"><?php echo $name2 ?></p>
            <p id="price"><?php echo $prices[array_rand($prices)] . ',-';?></p>
            <button><i class="fa fa-fw fa-shopping-cart"></i></button>
        </a>
        <a class="shop-item shop-item3">
            <img src="resources/Fastoflex_5463-e1612257019153.jpg" alt="Fastoflex 5463">
            <p id="name">Fastoflex 5463</p>
            <p id="price"><?php echo $prices[array_rand($prices)] . ',-';?></p>
            <button><i class="fa fa-fw fa-shopping-cart"></i></button>
        </a>
        <a class="shop-item shop-item4">
            <img src="resources/placeholder.png" alt="placeholder">
            <p id="name">Vilkårlig vare 1</p>
            <p id="price"><?php echo $prices[array_rand($prices)] . ',-';?></p>
            <button><i class="fa fa-fw fa-shopping-cart"></i></button>
        </a>
        <a class="shop-item shop-item5">
            <img src="resources/placeholder.png" alt="placeholder">
            <p id="name">Vilkårlig vare 2</p>
            <p id="price"><?php echo $prices[array_rand($prices)] . ',-';?></p>
            <button><i class="fa fa-fw fa-shopping-cart"></i></button>
        </a>
        <a class="shop-item shop-item6">
            <img src="resources/placeholder.png" alt="placeholder">
            <p id="name">Vilkårlig vare 3</p>
            <p id="price"><?php echo $prices[array_rand($prices)] . ',-';?></p>
            <button><i class="fa fa-fw fa-shopping-cart"></i></button>
        </a>
        <a class="shop-item shop-item7">
            <img src="resources/placeholder.png" alt="placeholder">
            <p id="name"> Vilkårlig vare 4</p>
            <p id="price"><?php echo $prices[array_rand($prices)] . ',-';?></p>
            <button><i class="fa fa-fw fa-shopping-cart"></i></button>
        </a>
        <a class="shop-item shop-item8">
            <img src="resources/placeholder.png" alt="placeholder">
            <p id="name">Vilkårlig vare 5</p>
            <p id="price"><?php echo $prices[array_rand($prices)] . ',-';?></p>
            <button><i class="fa fa-fw fa-shopping-cart"></i></button>
        </a>
        <a class="shop-item shop-item9">
            <img src="resources/placeholder.png" alt="placeholder">
            <p id="name">Vilkårlig vare 6</p>
            <p id="price"><?php echo $prices[array_rand($prices)] . ',-';?></p>
            <button><i class="fa fa-fw fa-shopping-cart"></i></button>
        </a>
        <a class="shop-item shop-item10">
            <img src="resources/placeholder.png" alt="placeholder">
            <p id="name">Vilkårlig vare 7</p>
            <p id="price"><?php echo $prices[array_rand($prices)] . ',-';?></p>
            <button><i class="fa fa-fw fa-shopping-cart"></i></button>
        </a>
        <a class="shop-item shop-item11">
            <img src="resources/placeholder.png" alt="placeholder">
            <p id="name">Vilkårlig vare 8</p>
            <p id="price"><?php echo $prices[array_rand($prices)] . ',-';?></p>
            <button><i class="fa fa-fw fa-shopping-cart"></i></button>
        </a>
        <a class="shop-item shop-item12">
            <img src="resources/placeholder.png" alt="placeholder">
            <p id="name">Vilkårlig vare 9</p>
            <p id="price"><?php echo $prices[array_rand($prices)] . ',-';?></p>
            <button><i class="fa fa-fw fa-shopping-cart"></i></button>
        </a>
    </div>


</body>
</html>
