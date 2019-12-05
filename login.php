<html>

<head>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <title>Let me in</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Let me in</p>
    <form class="form1" id="login-submit-form">
      <div class="login-error"></div>
      <input class="un " id="login-username" name="login_username" type="text" align="center" placeholder="Username">
      <!-- username error here -->
      <div class="login-username-error error text-position"></div>

      <input class="pass" name="login_password" id="login-password" type="password" align="center" placeholder="Password">
      <!-- password error here -->
      <div class="login-password-error error text-position"></div>

      <button type="button" id="login-submit" class="btn btn-success btn-block form-btn">Check in</button>
      <!-- <p class="forgot" align="center"><a href="#">Forgot Password?</p> -->
    </form>
                
    </div>
     
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/login.js"></script>
</body>


</html>



