<?php
    require_once "includes/config_session.inc.php";
    require_once "includes/getInfo.inc.php";
    require_once "includes/info_view.inc.php";
    require_once "includes/login_view.inc.php";
?>

<!--html head-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Profile</title>
        <link rel="stylesheet" href="styles/styleHomepage.css">
        <link rel="stylesheet" href="styles/styleProfilepage.css">
        <link rel="stylesheet" href="styles/button.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

        <!--Header and hero text-->
        <div class="top-website">
            <div class="header">
                <li class="logo"><img src="images/logo.png"></li>
                <ul>
                    <a href="homepage.php"><li class="link">Home</li></a>
                    <a href="profilepage.php"><li class="link">Profile</li></a>
                </ul>
            </div>

            <div class="description">
                <div class="description-left">
                    <h1>Welcome to your profile page!</h1>
                    <p id="username"><?php getUsername() ?></p>
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
            <p id="count"></p>
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
                    <p class="secondary-text">Create Your Business Card Now!</p>
                </div>
                <div class="action-right">
                    <a href="homepage.php"><button class="action-button">Start Now</button></a>
                </div>
            </div>
        </div>

        <!-- Overlay Upate Form -->
        <div id="update-overlay" class="update-overlay">
            <div class="warp">
                <h1>Business Cards</h1>
                <p>Update new information about your card!</p>
                <form action="includes/edit.inc.php" method="post" class="formsize" id="signupForm" enctype="multipart/form-data">

                    <input style="display: none" type="text" name="card_id" id="card_id" class="form-control" value="1"> <br>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Name"> <br>
                    <input type="text" name="position" id="position" class="form-control" placeholder="Your Position"> <br>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Your Email"> <br>
                    <input type="text" name="address" id="address" class="form-control" placeholder="Your Address"> <br>
                    <input type="file" name="image" id="upload" class="form-control-file"  aria-describedby="fileHelp">
                    <label for="upload"> <i class="fa fa-cloud-upload"></i></i>Upload Picture</label><br><br>

                    <div class="btn-div">
                        <button id="cancelButton" name="cancel" class="btn btn-cancel">
                            <a style="text-decoration: none; color: white;" href="profilepage.php">Cancel</a>
                        </button>
                        <button type="submit" name="submit" value="Update Now" class="btn btn-primary"> 
                            Submit 
                        </button>
                    </div>
                </form>
            </div>    
        </div>

        <!--footer-->
        <div class="footer">
            <p class="footer-text">Copyright © 2024 Xerox. All Rights Reserved</p>
        </div>

        <script type="module" src="scripts/displayTemplate.js"></script>
        
    </body>
</html>