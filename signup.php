<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Business Card Generator">
    <link rel="icon" href="img/B Letter.png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/styleFooter.css">
    <link rel="stylesheet" href="styles/styleNavbar.css">
    <link rel="stylesheet" href="styles/styleIndex.css">
    <title>
        Business Card Generator
    </title>

</head>

<body>

<nav class="navbar navbar-default">

    <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">

                <li><a href="index.php" class="BorderRight">Home</a></li>

                <li><a href="#" class="BorderRight">About</a></li>

                <li><a href="#" class="BorderRight">Contact Us</a></li>

                <form action="" method="post" class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </form>

            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div class="container"> <!-- Start Of The Container Class -->

    <div class="row"> <!-- Start Of The Row Class -->

        <div class="col-md-12 col-sm-12 hero-feature"> <!-- Start Of The Col Class -->

            <p class="about"> <!-- Start Of The P About Class -->

            <h1>Business Cards</h1>
            <p>Create a Business Cards in minutes. Try it now!</p>

            </p> <!-- End Of The P About Class --> <br>

            <form action="" method="post" class="formsize" id="signupForm">
                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name"> <br>
                <input type="text" name="web" id="web" class="form-control" placeholder="Your Position"> <br>
                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email"> <br>
                <input type="text" name="web" id="location" class="form-control" placeholder="Your Address"> <br>
                <input type="file" id="upload" class="form-control-file" name="file_img" aria-describedby="fileHelp"> 
                <label for="upload"><i class="fa fa-upload"></i>  Upload Logo</label><br><br><br>
                <input type="submit" name="submit" value="Generate Business Card" class="btn btn-primary"> <br><br>
            </form>
        </div> <!-- End Of The Col Class -->

        <div class="frontImage">
            <img class="tw-object-contain tw-block tw-w-full" src="https://bcassetcdn.com/assets/images/designcom/hero-banner-background/hero-feature-spage-business-card.webp" alt="hero collage" loading="false">
        </div>
        
    </div> <!-- End Of The Row Class -->

</div> <!-- End Of The Container Class -->

<script type="text/javascript">
    $(document).ready(function () {
        $.getScript("validation.js", function () {
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>


    <div id="footer">
        <p class="copyright">

            <div class="col-md-6 col-sm-6 hero-feature">
                <div class="caption">
        <p>
            Copyright &copy; 2018 <a class="sn" href="index.php" target="_blank">Business Card Generator</a>
        </p>
    </div>
    </div>

    <div class="col-md-6 col-sm-6 hero-feature">
        <div class="caption">
            <p>
                Designed & Developed By <a class="sn" >Team Xerox</a>
            </p>
        </div>
    </div>
    <br>

    </div>
</body>

</html>