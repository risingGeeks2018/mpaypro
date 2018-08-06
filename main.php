<!DOCTYPE html>
<html>
<head>
<title>Accounting login</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>

<script type="text/javascript">
history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});</script>
	
<link rel="stylesheet" type="text/css" href="../accountingptasystem/assets/css/acc_login_css.css">
	
</head>
<body>
<div class="container">

<div class="container-header">
<div class="content-header">
<hr/>
	<h2>   HELLO </h2>

</div>	
</div>

<div class="container-login">
<div class="content-login">
	<h3>CREDENTIALS</h3> </br>
 <form method="post" action="../accountingptasystem/classes/acc_login.php" autocomplete="off">
			
				<center>
					<label>Username: </label><input type="text" name="username" placeholder="Please enter username" required autocomplete="off"/><br />
					<label>Password:</label><input type="password" name="password" placeholder="Please enter password" autocomplete="off"/><br /><br/>	
				<input type="submit" name="submit" value="Login"/>
				<input type="reset" name="reset" value="clear"/>
						</center>
</form>

</div>	
</div>
</div>




</body>
</html>