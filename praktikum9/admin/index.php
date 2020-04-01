<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
<style type="text/css">
body{
background-color: black;
}.login{
background-color: white;
width: 370px;
padding: 20px;
margin: auto;
margin-top: 100px;
border: 2px solid black;
font-size: 18px;
}h1{
background-color: orange;
text-align: center;
color: white;
padding: 10px;
border-radius: 7px;
}input{
width: 100%;
padding: 12px 10px;
box-sizing: border-box;
font-size: 18px;
}input[type=reset]{
background-color: crimson;
border-radius:18px;
color: white;
}input[type=submit]{
background-color: green;
border-radius: 18px;
color: white;
}
	
</style>
</head>
<body>
<center>
	<h1>Login Sebagai Admin</h1>
	<hr>
	<form class="login" action="ceklgn.php" method="post">
		<table>
		<tr>
			<td>Username</td> 
			<td>:</td> 
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td> 
			<td>:</td> 
			<td><input type="password" name="pass"></td>
		</tr>
		</table>
		<p><input type="submit" name="login" value="Login"> <input type="reset" name="reset" value="Reset"></p>
	</form>
</center>
</body>
</html>