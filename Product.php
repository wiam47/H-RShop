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
    
    <div class="contain">
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
                <div class="pdct-price">
                    <div class="old-price">699$</div>
                    <div class="discount">-35%</div>
                    <div class="new-price">499$</div>
                </div>
                <div class="pdct-descr">
                    <div class="descr">
                        <div class="descr-key">
                            brand:
                        </div>
                        <div id="brand" class="descr-value">
                            Rolex
                        </div>
                    </div>
                    <div class="descr">
                        <div class="descr-key">
                            Model:
                        </div>
                        <div class="descr-value">
                            fasdfad
                        </div>
                    </div>
                    <div class="descr">
                        <div class="descr-key">
                        Box:
                        </div>
                        <div class="descr-value">
                            Diameter : 36mm,<br>
                            Stainless steel<br>
                            Golden, Grey
                        </div>
                    </div>
                    <div class="descr">
                        <div class="descr-key">
                        Cadre:
                        </div>
                        <div class="descr-value">
                            Glass : mineral<br>
                            Blue
                        </div>
                    </div>
                    <div class="descr">
                        <div class="descr-key">
                        Bracelet:
                        </div>
                        <div class="descr-value">
                            Stainless steel<br>
                            Golden
                        </div>
                    </div>
                    <div class="descr last-descr">
                        <div class="descr-key">
                            Gender:
                        </div>
                        <div class="descr-value">
                            Men
                        </div>
                    </div>
                </div>
                <div class="pdct-quantity">
                    <div class="lbl-quantity">Quantity :</div>
                    <div onclick="pdctQuantity('minus')"><i class="fa fa-minus add-pdct"></i></div>
                    <div id="quantity">1</div>
                    <div onclick="pdctQuantity('add')"><i  class="fa fa-plus add-pdct"></i></div>
                </div>
                <div class="buy-section">
                    <div id="buy-btn" onclick="buy()">Add To Cart <i class="fa fa-cart-plus"></i></div>
                </div>
            </div>
        </div>
        
        <div class="idk">
            <div class="most-sold">
                <div class="most-sold-pic">
                    <img src="Photos/montre1.jpg" alt="Most bought product">
                </div>
                <div class="most-sold-info">
                    <div class="most-sold-name">Rolex</div>
                    <div class="most-sold-descr">Stainless steel bracelet, blue cadre. For men..</div>
                    <div class="most-sold-price">
                        <div class="old-price">699$</div>
                        <div class="discount">-35%</div>
                        <div class="new-price">499$</div>
                    </div>
                </div>
            </div>
            <div class="most-sold">
                <div class="most-sold-pic">
                    <img src="Photos/montre1.jpg" alt="Most bought product">
                </div>
                <div class="most-sold-info">
                    <div class="most-sold-name">Rolex</div>
                    <div class="most-sold-descr">Stainless steel bracelet, blue cadre. For men..</div>
                    <div class="most-sold-price">
                        <div class="old-price">699$</div>
                        <div class="discount">-35%</div>
                        <div class="new-price">499$</div>
                    </div>
                </div>
            </div>
            <div class="most-sold">
                <div class="most-sold-pic">
                    <img src="Photos/montre1.jpg" alt="Most bought product">
                </div>
                <div class="most-sold-info">
                    <div class="most-sold-name">Rolex</div>
                    <div class="most-sold-descr">Stainless steel bracelet, blue cadre. For men..</div>
                    <div class="most-sold-price">
                        <div class="old-price">699$</div>
                        <div class="discount">-35%</div>
                        <div class="new-price">499$</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="login">
            <form action="">
                <label for="">Login</label>
                <input type="text" name="email" id="email" placeholder="Email">
                <input type="text" name="password" id="password" placeholder="Password">
                <input type="submit" name="submit-login" id="submit-login">
            </form>
        </div>
    </div>

    <div class="footer">
        <div class="section">
            <h2>Contact</h2>
            <div>
                Facebook
            </div>
            <div>
                Whatsapp
            </div>
            <div>
                Instagram
            </div>
        </div>
        <div class="section">
            <h2>Adress</h2>
            <div>
                <p>42 dfkj, fasdlk 2, JA, Belgium</p> 
            </div>
        </div>
        <div class="section">
            <h2>About Us</h2>
            <div>
                <p>H-R store where you can find good quality watches and accessories with good prices.</p> 
            </div>
        </div>
    </div>



    <script src="ProductJs.js"></script>
</body>

</html>