<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR-Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="ProductStyle.css">
</head>

<body>
    <div class="header">
        <div class="logo">
            <a href="index.php"><img id="logo" src="photos/logo2.png"></a>
        </div>
        <div class="icons">
            <div class="icon searchBox">

                <input class="searchInput" type="text" name="" placeholder="Search..">
                <button type="submit" class="searchButton" href="#">
                    <i class="material-icons fa fa-search"></i>
                </button>
            </div>
            <div class="icon">
                <a href="#"><i class="fa fa-user"></i></a>
            </div>
            <div class="icon">
                <a href="#"><i class="fa fa-shopping-basket"></i></a>
            </div>
            <div class="icon">
                <a href="#"><i class="fa fa-globe"></i></a>
            </div>
        </div>
    </div>

    <div class="navbar">
        <a href="#">HOME</a>
        <a href="#">WATCH</a>
        <a href="#">ACCESSORIES</a>
        <a href="#">OFFER</a>
        <a href="#">SUMMER OFFER</a>
    </div>

    <div class="product-view">
        <div class="pdct-pics">
            <div class="main-pic">
                <img id="main-pdct-pic" src="Photos/montre1.jpg" alt="product">
                <i id="magnify" class="fa fa-search-plus"></i>
            </div>
            <div class="small-pics">
                <img src="Photos/montre1.jpg" alt="product">
                <img src="Photos/montre1.jpg" alt="product">
                <img src="Photos/montre1.jpg" alt="product">
            </div>
        </div>
        <div class="pdct-info">
            <div class="pdct-name">
                Rolex
            </div>
            <div class="pdct-descr">
                <ul class="descr-list">
                    <li class="descr">Male</li>
                    <li class="descr">Silver</li>
                    <li class="descr">Water</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>