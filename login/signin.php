<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../jquery.mobile-1.4.4.min.css">
<link rel="stylesheet" href="../green.css" />
<link rel="stylesheet" href="../jquery.mobile.icons.min.css" />
<script src="../jquery.mobile-1.4.4.min.js"></script>
</head>
<body class="ui-mobile-viewport ui-overlay-a">

<div data-role="page" data-theme="a" style="padding:50px;">	
	<form action="action_page.php">
	  
	    <label for="uname"><b>Username</b></label>
	    <input type="text" placeholder="Enter Username" name="uname" required="" data-theme="a" style="margin:10px;"><br>

	    <label for="psw"><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="psw" required="">

	    <button type="submit" data-theme="a" class=" ui-btn ui-btn-a ui-shadow ui-corner-all">Login</button>
	    <label>
	       Remember me
	    </label>
	    <input type="checkbox" checked="checked" name="remember" data-theme="a">
	  

	  
	    <button type="button" class="cancelbtn ui-btn ui-btn-a ui-shadow ui-corner-all">Cancel</button>
	    <span class="psw" >Forgot <a href="#" class="ui-link">password?</a></span>
	  
	</form>
</div>
</body>