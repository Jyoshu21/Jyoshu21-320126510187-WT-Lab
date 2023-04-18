<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
	<style>
		body {
			background-color: lightsteelblue;
			font-family: Arial, sans-serif;
			color: #fff;
		}
		form {
			background-color: lightyellow;
			border-radius: 5px;
			padding: 20px;
			width: 400px;
			margin: 0 auto;
			margin-top: 100px;
			color: black;
		}
		h2 {
			margin-top: 0;
		}
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type="text"], input[type="email"], input[type="password"], input[type="date"], input[type="file"] {
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			margin-bottom: 20px;
			box-sizing: border-box;
			font-size: 16px;
			border-color: #1877f2;
		}
		body
{
    margin: 0;
}
		input[type="submit"] {
			background-color: #1877f2;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			cursor: pointer;
			font-size: 16px;
		}
		input[type="submit"]:hover {
			background-color: #145da0;
		}
	</style>
</head>
<body>
	<form method="post" action="connectdb.php" enctype="multipart/form-data">
		<h2>Sign Up</h2>
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required>
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<label for="retype_password">Retype Password:</label>
		<input type="password" id="retype_password" name="retype_password" required>
		<label for="date_of_birth">Date of Birth:</label>
		<input type="date" id="date_of_birth" name="date_of_birth" required>
        <label for="phone">Phone No:</label>
		<input type="text" id="phone" name="phone" required>
		
		<input type="submit" value="Submit">
	</form>
</body>
</html>
