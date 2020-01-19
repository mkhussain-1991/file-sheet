<?php
session_start();
if(isset($_SESSION['login'])){
	header('Location: home.php');
}
if (isset($_POST['ok'])) {
    $username=array();
    $password=array();
    $file=fopen('images/user.csv', 'r');
    while ( $d=fgetcsv($file)) {
    	array_push($username, $d[0]);
    	array_push($password, $d[1]);
    }
    if (in_array($_POST['username'],$username) && in_array($_POST['password'], $password)) {
    	$_SESSION['login']='ok';
    	$_SESSION['username']=$_POST['username'];
    	header('Location: home.php');
    }else{
    	$_SESSION['msg']='Invalid username and password';
    	header('Location: index.php');
    }
}
?>
<?php
if (isset($_SESSION['msg'])) {
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
}
if (isset($_SESSION['logout'])) {
	echo "Logout successfully";
	unset($_SESSION['logout']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
	<link rel="stylesheet" href="images/style.css">
</head>
<body>
	<div class="main">
		<div class="logo">
			<img src="logo.png" alt="">
		</div>
		<form action="" class="fel" method="post">
			<input type="text" class="inp" name="username" placeholder="Username"><br>
			<input type="password" class="inp" name="password" placeholder="Password"><br>
			<button type="submit" class="btn" name="ok">Log In</button>
		</form>
	</div>
</body>
</html>