<?php include 'productList.php'?>
<?php include 'priceList.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="productstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo $name1 ?></title>
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
    <div class="product-view">
        <h1><?php echo $name1 ?></h1>
        <img src="resources/Nobel_8900_Prod_miljo_923x923-450x550.jpg" alt="Nobel 8900">
        <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br> 
            Ratione quis temporibus sunt eius iste a aperiam, ducimus <br>
            suscipit molestiae cum vero rem itaque tempore,<br> 
            architecto accusamus recusandae commodi quisquam quaerat!<br>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br> 
            Ratione quis temporibus sunt eius iste a aperiam, ducimus <br>
            suscipit molestiae cum vero rem itaque tempore,<br> 
            architecto accusamus recusandae commodi quisquam quaerat!<br>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br> 
            Ratione quis temporibus sunt eius iste a aperiam, ducimus <br>
            suscipit molestiae cum vero rem itaque tempore,<br> 
            architecto accusamus recusandae commodi quisquam quaerat!<br>
        </p>
        <p id="price"><?php echo $prices[array_rand($prices)] . ',-';?></p>
        <select class="woodPick" wood="wood">
            <option value="" disabled selected hidden>Vælg træsort</option>
            <option value="Eg">Eg</option>
            <option value="Birk">Birk</option>
            <option value="Kirsebær">Kirsebær</option>
            <option value="Mahoghi">Mahoghi</option>
        </select>
        <button class="addToCart">Læg i kurv <i class="fa fa-fw fa-shopping-cart"></i></button>
    </div>
</body>
</html>