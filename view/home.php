<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/phpmotors/css/style.css" type="text/css" rel="stylesheet" media="screen">
    <title>Home | PHP Motors</title>
</head>
<body>
    <div id="wrapper">
    <header>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/common/header.php'?>
    </header>
    <nav>
        <?php 
        // require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/common/nav.php'
           echo $navList;
        ?>
    </nav>
    <main>
        <h1>Welcome to PHP Motors!</h1>
        
        <div class="product">
            <div class="product-description">
                <h2>DMC Delorean</h2>
                <p>3 Cup holders</p>
                <p>Superman Doors</p>
                <p>Fuzzy dice!</p>
            </div>

            <div class="car-img">
                <img src="/phpmotors/images/vehicles/delorean.jpg" alt="Delorean car" id="delorean">
            </div>
            
            <div class="button">
            <a href="#"><img src="/phpmotors/images/site/own_today.png" alt="button own today" id="button-own"></a>
            </div>
        </div>

        <div id="second-block">
            <div id="reviews">
                <h2>DMC Delorean Reviews</h2>
                <ul>
                    <li>"So fast its almost like traveling in time." (4/5)</li>
                    <li>"Coolest to the road." (4/5)</li>
                    <li>"I'm feeling Marty Mcfly!" (5/5)</li>
                    <li>"The most futuristic ride of our day." (4.5/5)</li>
                    <li>"80's living and I love it!" (5/5)</li>
                </ul>
            </div>

            <div id="upgrades">
                <h2>Delorean Upgrades</h2>
                <div id="cards">
                    <div class="card">
                        <div class="img-background">
                            <img src="/phpmotors/images/upgrades/flux-cap.png" alt="flux capacitor">
                        </div>
                        <a href="#">Flux Capacitor</a>
                    </div>
                    <div class="card">
                        <div class="img-background">
                            <img src="/phpmotors/images/upgrades/flame.jpg" alt="flame">
                        </div>
                        <a href="#">Flame Decals</a>
                    </div>
                    <div class="card">
                        <div class="img-background">
                            <img src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="bumper stickers<">
                        </div>
                        <a href="#">Bumper Stickers</a>
                    </div>
                    <div class="card">
                        <div class="img-background">
                            <img src="/phpmotors/images/upgrades/hub-cap.jpg" alt="hub cap">
                        </div>
                        <a href="#">Hub Caps</a>
                    </div>
                </div> <!-- Cards ends -->
            </div> <!-- Upgrades ends -->
        </div> <!-- second-block -->
        

    </main>
    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/common/footer.php'?>
    </footer>
    </div> <!-- Wrapper ends -->
</body>
</html>