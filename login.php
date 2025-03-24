<?php include_once ("controller.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login Page in HTML with CSS Code Example</title>
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans"
      rel="stylesheet"
    />

    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/login.css" />
  </head>
<body>
    <!-- partial:index.partial.html -->
    <div class="box-form">
      <div class="left">
        <div class="overlay">
          <h1>Hello World</h1>
          <p>
            SUCCESS IS NO ACCDENT. 
            It is Hardwork, Perseverance, Learning, Studying, Sacrifice and most of all Love of what you are doing..! 
          </p>
          <!-- <span>
            <p>login with social media</p>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"
              ><i class="fa fa-twitter" aria-hidden="true"></i> Login with
              Twitter</a
            >
          </span> -->
        </div>
      </div>

      <div class="right">
        <h5>Login</h5>
        <p>
          Don't have an account?
          <a href="registration.php">Create Your Account</a> it takes less than a
          minute
        </p>
        <form action="login.php" method="POST" autocomplete="off">
        <?php
            if($errors > 0){
                foreach($errors AS $displayErrors){
                ?>
                <div id="alert"><?php echo $displayErrors; ?></div>
                <?php
                }
            }
            ?>
            <input type="email" name="email" placeholder="Email"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="submit" name="login" value="Login">
           
        </form> 
        <br /><br />

        <div class="remember-me--forget-password">
          <!-- Angular -->
          <label>
            <input type="checkbox" name="item" checked />
            <span class="text-checkbox">Remember me</span>
          </label>
          <a href="forgot.php"><p>forget password?</p></a>
        </div>

        <br />
        <button>Login</button>
      </div>
    </div>
    <!-- partial -->
  </body>
</html>