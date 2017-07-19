<?PHP
//login page
require_once('../config.php');
$_SESSION['title'] = "Login";
if(isset($_SESSION['user'])){
	header("location:".$_SESSION['site']."/");
}else{
if(isset($_POST['submit'])){
	if(isset($_POST['user']) AND isset($_POST['pass'])){
		$cred = array("username"=>$_SESSION['con']->cleanInput($_POST['user']),"email"=>$_SESSION['con']->cleanInput($_POST['user']));
		$pass = array("password"=>hash('sha256',$_SESSION['con']->cleanInput($_POST['pass'])));
		$select_data = $_SESSION['con']->selectData($table='users', $select='*', $where=$pass, $or_where=$cred, $limit=1);
		if(is_numeric($select_data->numRows()) and $select_data->numRows() == 1){
			$result = $select_data->result();
			foreach($result as $user){
				$_SESSION['user'] = $user->username;
				$_SESSION['admin'] = $user->admin;
				$_SESSION['email'] = $user->email;
				$_SESSION['id'] = $user->id;
				//header("location:".$_SESSION['site']."/");
			}
		}else{
			$message = "Failed Login";
		}
	}
}
require_once('../parts/head.php');
require_once('../parts/navbar.php');
?>
<body>

<div class="container" style="font-size:18px">
<?PHP
	if(isset($message)){
		echo $message;
	}
?>
	<h1>Login</h1><br />
	<form method="POST" action="">
		<label>Username: <input type="text" name="user" /></label><br /><br />
		<label>Password: <input type="password" name="pass" /></label><br /><br />
		<input type="submit" name="submit" />
	</form>
</div>
<?PHP
}
?>