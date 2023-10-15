<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
.modal input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #d2d2e0;
  font-size:100%;
}

/* Add a background color when the inputs get focus */
.modal input[type=text]:focus, input[type=password], input[type=email]:focus {
  background-color: #D2D2D2;
  outline: none;
}

/* Set a style for all buttons */
.acceptbutton {
  background-color: #04AA6D;
  border-radius: 10px;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  font-size:100%;
}

.modal button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  border-radius: 10px;
  color: white;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  font-size:100%;
  padding: 14px 20px;
  background-color: #f44336;
}

.signupbtn {
  border-radius: 10px;
  color: white;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  font-size:100%;
  padding: 14px 20px;
 background-color: #04AA6D;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  max-width: 1200px;
  color:#d2d2e0;
  background-color: #212529;
  border-radius:20px;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
  font-size:100%;
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #444B5A;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<h2>Modal Signup Form</h2>

<button onclick="document.getElementById('sign_up_form').style.display='block'" style="width:auto;">Register</button>
<button onclick="document.getElementById('login_form').style.display='block'" style="width:auto;">Login</button>



<!-- Sign up -->
<div id="sign_up_form" class="modal">
  <span onclick="document.getElementById('sign_up_form').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form autocomplete="off" class="modal-content" action="register.php" action="post">
    <div class="container">
      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      
      <b>Username</b>
      <input type="text" placeholder="Enter Username" name="userid" required id="text">
      
      <b>Email</b>
      <input type="email" placeholder="Enter Email" name="email" autocomplete="off" required id="email">
      

      <b>Password</b>
      <input type="password" placeholder="Enter Password" name="password" required id="password">

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('sign_up_form').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" formaction="submit.php">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<!-- Register -->

<div id="login_form" class="modal">
  <span onclick="document.getElementById('login_form').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form autocomplete="off" class="modal-content" action="submit.php" action="post">
    <div class="container">
      <h1>Login</h1>
      <p>Please fill in this form to Login.</p>
      <hr>
      
      <b>Email</b>
      <input type="email" placeholder="Enter Email" name="Email" autocomplete="off" required id="email">
      

      <b>Password</b>
      <input type="password" placeholder="Enter Password" name="password" required id="password">

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

</body>
</html>