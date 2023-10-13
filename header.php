<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/custom.css">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="color:white;">
  <div class="container-fluid" style="height:50%;"> 
    <a class="navbar-brand" href="index.php">Test-Signon - V0.4</a>


    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="securePage.php">Secure</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="nonsecurePage.php">Unsecure</a>
        </li>
      </ul>

      <form name='form1' id='form1' method="post">
        <?php
function writeMsg() {
    echo "Hello world!";
  }
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
            <input class="input-header" type="text" name="userid" placeholder="Username" required>
            <input class="input-header" type="text" name="email" placeholder="Email" required>
            <input class="input-header" type="password" name="password" placeholder="Password">
            <input class="btn btn-outline-success" type="submit" value="Register" formaction="submit.php">
            </form>
            <form method="post">
            <button style="margin-left:5px;" class="btn btn-outline-danger" type="submit" name="unreg"> Cancel </button>
            </form>
            ';
            }
            // Login
            else {
            echo '
            <input class="input-header" type="text" name="email" placeholder="Email" required>
            <input class="input-header" type="password" name="password" placeholder="Password">
            <input class="btn btn-outline-success" type="submit" value="Login" formaction="login.php">
            </form> 
            <form method="post">
            <input style="margin-left:5px;" class="btn btn-outline-danger" type="submit" value="Register" name="reg">
            </form>
            ';
            } 
        ?>
    </div>
  </div>
</nav>

