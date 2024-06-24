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
    <link rel="stylesheet" href="styles/template.css">
    <link rel="stylesheet" href="styles/template1.css">

    <title>Business Card</title>
</head>
<body>
    <div class="content">
        <div class="card">
          <div class="card__side card__side--front">
            <!-- Front Content -->
            <div class="card__cont">
              <span class="blue">alert</span>
              <span>(<span class="green">'Hello World!'</span>)</span>
            </div>
          </div>
          <div class="card__side card__side--back">
            <!-- Back Content -->
            <div class="card__cta">
              <p><span class="purple">const</span> aboutMe <span class="cyan">=</span> {
                <br />
                <p id='name'><span class="space red">Name</span>
                <span class="cyan">:</span> <span class="green"></span></p>
                <span class="space red">email</span>
                <span class="cyan">:</span> <span class="green" id="email"></span>',
                <br/>
                <span class="space red">position</span>
                <span class="cyan">:</span>
                <span class="green" id="position"></span>,
                <br/>
                <span class="space red">address</span><span class="cyan">:</span> <span class="green" id="address"></span>
                <br/> 
                };
              </p>
            </div>
            <div class="card__img" id="image">
            </div>
          </div>
        </div>
        <script src="scripts/retrieveCardData.js"></script> 
</body>
</html>