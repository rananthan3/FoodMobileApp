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
	<form action="authenticate.php" method="post"  data-ajax="false">

	<div data-role="content" data-theme="a">
	  
	    <label for="uname"><b>Username</b></label>
	    <input type="text" placeholder="Enter Username" name="username"><br>

	    <label for="psw"><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="password" required="">

	    <button type="submit" name="submit">Login</button>
	    <label>
	       Remember me
	    </label>
	    <input type="checkbox" checked="checked" name="remember" data-theme="a">

	</div>    
	  

	  
	    <button type="button" class="cancelbtn ui-btn ui-btn-a ui-shadow ui-corner-all">Cancel</button>
	    <span class="psw" >Forgot <a href="#" class="ui-link">password?</a></span>
	  
	</form>
</div>
</body>
</html> 	