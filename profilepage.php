<?php
    require_once "includes/config_session.inc.php";
    require_once "includes/info_view.inc.php";
?>

<!--html head-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Profile</title>
        <link rel="stylesheet" href="styles/styleHomepage.css">
        <link rel="stylesheet" href="styles/styleProfilepage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

        <!--Header and hero text-->
        <div class="top-website">
            <div class="header">
                <li class="logo"><img src="images/logo.png"></li>
                <ul>
                    <li class="link">Home</li>
                    <li class="link">Profile</li>
                    <li class="link">About</li>
                </ul>
            </div>

            <div class="description">
                <div class="description-left">
                    <h1>Welcome to your profile page!</h1>
                    <p id="username">INSERT USERNAME HERE</p>
                    <p>Below are your business cards.</p>
                </div>

                <div class="description-right">
                    <img src="https://bcassetcdn.com/assets/images/designcom/hero-banner-background/hero-feature-spage-business-card.webp">
                </div>
            </div>    
        </div>

        <!--Information panels-->
        <div class="info-container">
            <h2>Your business card collections!</h2>
            <div class="grid-container" id="grid-container">
                <!-- Dynamic content will be injected here -->
            </div>  
        </div>

        <!--quote panel-->
        <div class="quote">
            <p class="quote-text"><em>"Your satisfaction is our priority."</em></p>
        </div>


        <!--action panel-->
        <div class="action">
            <div class="action-container">
                <div class="action-left">
                    <p class="action-text">Call to action! It's time!</p>
                    <p class="secondary-text">Sign up for our product by clicking that button right over there!</p>
                </div>
                <div class="action-right">
                    <button class="action-button">Sign Up</button>
                </div>
            </div>
        </div>

        <!--footer-->
        <div class="footer">
            <p class="footer-text">Copyright © </p>
        </div>

        <script src="scripts/script.js"></script>

    </body>
</html>