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


<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="color:white;min-height:100px;height:20vw;max-height:150px">
  <div class="container-fluid  bg-dark"> 
    <a class="navbar-brand" href="index.php">Test-Signon - V0.4</a>


    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100%;">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="securePage.php">Secure</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="nonsecurePage.php">Unsecure</a>
        </li>
    </ul>

      <form name='form1' id='form1' method="post">
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

          //Logged in
          if (isset($_SESSION['status']) && $_SESSION['status'] == 'loggedin') {
          echo 'Logged in as : ' . $_SESSION['name'] . ' ';
          echo '<input class="btn btn-outline-danger" type="submit" value="Logout" formaction="logout.php">';
          }
          //Registry
          elseif (isset($_SESSION['register']) && $_SESSION['register'] == 'y') {
          echo '
          <input class="input-header" type="text" name="userid" id="userid" placeholder="Username" required>
          <input class="input-header" type="text" name="email" id="email" placeholder="Email" required>
          <input class="input-header" type="password" name="password" id="password" placeholder="Password" required>
          <div>
          <input class="btn btn-success custom" type="submit" value="Register" formaction="submit.php">
          </form>
          <form method="post">
          <button class="btn btn-outline-danger custom" type="submit" name="unreg"> Cancel </button>
          </form>
          </div>
          ';
          }
          // Login
          else {
          echo '
          <input class="input-header" type="text" name="email" id="email" placeholder="Email" required>
          <input class="input-header" type="password" name="password" id="password" placeholder="Password" required>
          <div>
          <input style="margin-right:10px;" class="btn btn-success custom" type="submit" value="Login" formaction="login.php">
          </form> 
          <form method="post">
          <input class="btn btn-danger custom" type="submit" value="Register" name="reg">
          </form>
          </div>
          ';
          } 
        ?>
      </form>
  </div>
</nav>