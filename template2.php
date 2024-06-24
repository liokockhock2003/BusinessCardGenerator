<?php
    require_once "includes/config_session.inc.php";
    require_once "includes/getInfo.inc.php";
    require_once "includes/getInfo_view.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/template.css">
    <link rel="stylesheet" href="styles/template2.css">
</head>
<body>
    <div class="content">
        <div class="card">
            <div class="card__side card__side--front">
                <!-- Front Content -->
                <div class="card__cont">
                    <h2>Ahmad Saifudin</h2>
                </div>
            </div>
            <div class="card__side card__side--back">
                <!-- Back Content -->
                <div class="card__cta">
                    <h2>Contact</h2>
                    <p>Name: <?php displayName() ?></p>
                    <p>Email: <?php displayEmail() ?></p>
                    <p>Position: <?php displayPosition() ?></p>
                    <p>Address: <?php displayAddress() ?></p>
                </div>
                <div class="card__img">
                    <?php displayImage() ?>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>