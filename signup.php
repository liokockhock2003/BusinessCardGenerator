<?php
  require_once 'includes/config_session.inc.php';
  require_once 'includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="fonts/icomoon/style.css" />

    <link rel="stylesheet" href="styles/css/owl.carousel.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles/css/bootstrap.min.css" />

    <!-- Style -->
    <link rel="stylesheet" href="styles/css/style.css" />

    <title>Sign Up</title>
  </head>


  <body>
    <div class="d-lg-flex half">
      <div
        class="bg order-1 order-md-2"
        style="background-image: url('images/bg_2.png')"
      ></div>

      
      <div class="contents order-2 order-md-1">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
              <h3>Sign Up</h3>
              <p class="mb-4">
                Sign up an Account!
              </p>



              <form action="includes/signup.inc.php" method="post">
              
                <div class="form-group first">
                  <label for="username">Email</label>
                  <input
                    id="username"
                    type="text"
                    class="form-control"
                    placeholder="your-email@gmail.com"
                    name="username"
                  />
                </div>


                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input
                    id="password"
                    type="password"
                    class="form-control"
                    placeholder="Your Password"
                    name="password"
                  />
                </div>
        

                <input
                  type="submit"
                  value="Sign up"
                  class="btn btn-block btn-primary"
                />

                <div class="d-flex mb-5 align-items-center">
                  <label style="padding-left:0px;cursor:default;" class="control control--checkbox mb-0">
                    <span class="caption">Already have an account?</span>
                  </label>
                  <span style="margin-left:6px !important;" class="ml-auto">
                    <a href="login.php" class="forgot-pass">Log in</a>
                  </span>
                </div>
                
              </form>

              <?php
                check_signup_errors();
              ?>


            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>