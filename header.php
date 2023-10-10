
<header>
    <button onclick="document.location='index.php'">Home</button>
    <form name='form1' id='form1' method="post">
        <?php

            if (isset($_SESSION['status']) && $_SESSION['status'] == 'loggedin') {
            echo 'Welcome Back: ' . $_SESSION['name'] . ' ';
            echo '<input type="submit" value="Logout" formaction="logout.php">';
            }
            else {
            echo 'Email:   <input type="text" name="email">
                    Password: <input type="password" name="password">
                    <input type="submit" value="Login" formaction="login.php">
                    <input type="submit" value="Register" formaction="register.php"> ';
            } 
        ?>
    </form>
</header>