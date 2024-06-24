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
                    <p id="name">Name:  </p>
                    <p id="email">Email:  </p>
                    <p id="position">Position: </p>
                    <p id="address">Address: </p>
                </div>
                <div class="card__img" id="image">
                </div>
            </div>
        </div>
    </div>  
    <script src="scripts/retrieveCardData.js"></script>  
</body>
</html>