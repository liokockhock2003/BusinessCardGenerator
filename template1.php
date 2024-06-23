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
                <span class="space red">name</span>
                <span class="cyan">:</span> <span class="green">'ahmad saifudin'</span>,
                <br/>
                <span class="space red">email</span>
                <span class="cyan">:</span> <span class="green">'ahmadsaifudin@graduate.utm.my</span>',
                <br/>
                <span class="space red">position</span>
                <span class="cyan">:</span>
                <span class="green">'front-end developer'</span>,
                <br/>
                <span class="space red">address</span><span class="cyan">:</span> <span class="green">'kdse, utm'</span>
                <br/> 
                };
              </p>
            </div>
            <div class="card__img">
                <img src="https://th.bing.com/th/id/OIP.VjlQHztonZHjR9tdbmGegwHaHa?rs=1&pid=ImgDetMain" alt="Your Picture">
            </div>
          </div>
        </div>
</body>
</html>