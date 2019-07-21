
<? php
<!DOCTYPE html><html><head><title>REGISTRATION SYTEM </title>
< link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="header">
<h2>Register</h2></div>
<form method="post" action="register.php">
<div class="input-group">
<label>Username</label>
<input type="text" name="username" value=""> </div>
<div class="input-group">
<label>Email</label>
<input type="email" name="email" value=""> </div>
<div class="input-group">
<label>Password</label>
<input type="password" name="password_1"> </div>
<div class="input-group">
<label>Confirm password</label>
<input type="password" name="password_2" > </div>
<p>Already a member?<a href="login.php">Sign in</a></p>
</form></html>
?>
