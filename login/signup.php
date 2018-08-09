<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"> 

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body class="ui-mobile-viewport ui-overlay-a">


<div data-role="page" data-theme="a" style="padding:50px;"> 
  <form method="post" action="register.php" data-ajax="false" style="border:1px solid #ccc">
      <div data-role="header">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
      </div>

      <div data-role="content" data-theme="a">
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

        <label for="phone"><b>Phone</b></label>
        <input type="text" placeholder="Phone Number" name="phone" required>

        <label for="address"><b>Address</b></label>
        <input type="text" placeholder="Address" name="address" required>

        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>


        <button type="button" class="cancelbtn">Cancel</button>
      	<button type="submit" class="signupbtn" name="submit">Sign Up</button>

      </div>

      <div data-role="footer"
        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      </div>
          
  </form>
</div>

</body>
</html>