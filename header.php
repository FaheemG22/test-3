<?php
// Start the session
session_start();
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="description"content="this is just a test login system all in the header">
<meta name="application-name" content="Login/Logout">
<meta name="theme-color" content="black">
<link rel="manifest" href="manifest.webmanifest">

<link href="assets/css/bootstrap.css" rel="preload" as="style" onload="this.rel='stylesheet'"><noscript><link rel="stylesheet" href="assets/css/bootstrap.css"></noscript>
<link rel="stylesheet" href="assets/css/custom.css">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="color:white;min-height:100px;height:20vw;max-height:150px;font-size:2vw;">
  <div class="container-fluid  bg-dark"> 
    <a class="navbar-brand" style="font-size:2vw;" href="index.php">Test-Signon - V0.4</a>


    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100%;font-size:1.5vw;">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="securePage.php">Secure</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="nonsecurePage.php">Unsecure</a>
        </li>
    </ul>

        <?php

          if(array_key_exists('reg', $_POST)) { 
              reg(); 
          } 
          else if(array_key_exists('unreg', $_POST)) { 
              unreg(); 
          } 
          function reg() { 
              $_SESSION['register'] ='y'; 
          } 
          function unreg() { 
              $_SESSION['register'] = 'n'; 
          } 
        ?>

          
          <?php if (isset($_SESSION['status']) && $_SESSION['status'] == 'loggedin') : ?>
            <?php echo 'Logged in as : ' . $_SESSION['name'] . '  |'; ?>
            <form name='form3' id='form1' method="post">
            <input class="btn btn-danger custom" type="submit" value="Logout" formaction="logout.php">
            </form>
          <?php else : ?>
            <div>
            <button class="btn btn-success custom" onclick="document.getElementById('login_form').style.display='block'"> Login </button>
            <button class="btn btn-danger custom" onclick="document.getElementById('sign_up_form').style.display='block'"> Register </button>
            </div>
            
            <?php endif ; ?>

        
      
  </div>
</nav>


<!-- Register -->
<div name='form1' id="sign_up_form" class="modal">
  <span onclick="document.getElementById('sign_up_form').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form autocomplete="on"  class="modal-content" method="post">
    <div class="container">
      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      
      <input type="text" name="userid" placeholder="Username" required>
      <input type="text" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('sign_up_form').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" formaction="submit.php">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<!-- Login -->

<div name='form2' id="login_form" class="modal">
  <span onclick="document.getElementById('login_form').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form autocomplete="on"  class="modal-content" method="post">
    <div class="container">
      <h1>Login</h1>
      <p>Please fill in this form to log into an account.</p>
      <hr>

      <input type="text" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('login_form').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" formaction="login.php">Login</button>
      </div>
    </div>
  </form>
</div>

<script>

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == document.getElementById('sign_up_form') || event.target == document.getElementById('login_form')) {
    document.getElementById('sign_up_form').style.display = "none";
    document.getElementById('login_form').style.display = "none";
  }
}

</script>