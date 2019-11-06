<?php
// Start the session
session_start();
?>
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="style.css">

<!doctype html>
<html lang="en">
<head>
<style type="text/css">
   P.link1 { text-indent: 570px;line-height: 40px;}
   P.link2 { text-indent: 1220px;}
   A { font-size: 20px;}
   A.link1 { font-size: 20px;font-family: "MS Sans Serif"; text-indent: 120px;}
   A.link2 { font-size: 20px;font-family: "MS Sans Serif"; text-indent: 140px;}
 </style>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <style>
       .container {
           width: 400px;
       }
   </style>
</head>
<body style="padding-top: 3rem;">
<div class="container">
   <form method="post">
       First Name: <input type="text" name="first_name"><br>
       Last Name: <input type="text" name="last_name"><br>
	   Email: <input type="text" name="email"><br>
	   Password: <input type="password" name="password" minlength="6"><br>

	   <input type="file" name="fileToUpload" id="fileToUpload" value="select img"> 
	    <p><select  required  name="role">
		<option >Выберите роль</option>
		<option value="1">Admin</option>
		<option value="2">User</option>
		</select></p>
       <p><input type="submit" class="btn" value="Registration"></p>
   </form>
</div>
</body>
</html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb"; //повинна бути створена в субд
// Встановлення з'єднання 
$conn = new mysqli($servername, $username, $password, $database);

// Перевірка з'єднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
require_once 'connection.php'; //підключення скрипту
if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password'])&& isset($_POST['role'])){
	$sql = "INSERT INTO users (first_name, last_name, email, password, photo, id_role) VALUES ('{$_POST['first_name']}', '{$_POST['last_name']}','{$_POST['email']}','{$_POST['password']}','{$_POST['fileToUpload']}','{$_POST['role']}')";
	$result = $conn->query($sql);
}
	
?>
<p class="link1"><a href="logindb.php">Login page</a> | <a href="nonreg.php">User page</a></p>
</body>
</html>
