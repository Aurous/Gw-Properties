<?PHP
//user page
require('../config.php');
$_SESSION['title'] = "User";
if(!isset($_SESSION['user'])){
	header("location:".$_SESSION['site']."/login/");
}elseif(!isset($_GET['value'])){
require('../parts/head.php');
require('../parts/navbar.php');

?>
	<body>
		<div class="container">
		<?PHP require('../parts/graph.php'); ?>
			<h1>User Page</h1>
			<form action="" method="GET">
				<h3><?PHP if(isset($message)){ echo $message;} ?></h3>
				<div class="col-lg-12"><h4 class="col-lg-6">Username: <?PHP echo $_SESSION['user']; ?></h4><input class="col-lg-3" type="submit" name="value" value="Change Username" /></div>
				<div class="col-lg-12"><h4 class="col-lg-6">Email: <?PHP echo $_SESSION['email']; ?></h4><input class="col-lg-3" type="submit" name="value" value="Change Email" /></div>
				<div class="col-lg-12"><h4 class="col-lg-6">Password: **********</h4><input class="col-lg-3" type="submit" name="value" value="Change Password" /></div>
			</form>
		</div>
	</body>
<?PHP
}elseif(isset($_POST['submit'])){
	if($_POST['submit'] == "Change Username"){
		if($_SESSION['user'] == $_POST['user']){
			$message = "This is your username";
		}else{
			$select_data = $_SESSION['con']->selectData($table='users', $select='*', $where=array('username'=>$_POST['user']), $or_where=null, $orderby='id', $limit=10);
			$number = $select_data->numRows();//$select_data->numRows();
			if(is_numeric($number) and $number == 1){
				$message = "Username Taken";
			}else{
				$change = $_SESSION['con']->updateData($table='users',$data=array('username'=>$_SESSION['con']->cleanInput($_POST['user'])), $where=array('username'=>$_SESSION['user']),$or_where=null, $limit='1');
				if($change){
					$_SESSION['user'] = $_SESSION['con']->cleanInput($_POST['user']);
					header("location:".$_SERVER['PHP_SELF']);
				}else{
					$message = "Failed to Change";
				}
			}
		}
	}elseif($_POST['submit'] == "Change Email"){
		if($_SESSION['email'] == $_POST['email']){
			$message = "This is your email";
		}else{
			$select_data = $_SESSION['con']->selectData($table='users', $select='*', $where=array('email'=>$_POST['email']), $or_where=null, $orderby='id', $limit=10);
			$number = $select_data->numRows();//$select_data->numRows();
			if(is_numeric($number) and $number == 1){
				$message = "Email Taken";
			}else{
				$change = $_SESSION['con']->updateData($table='users',$data=array('email'=>$_SESSION['con']->cleanInput($_POST['email'])), $where=array('email'=>$_SESSION['email']),$or_where=null, $limit='1');
				if($change){
					$_SESSION['email'] = $_SESSION['con']->cleanInput($_POST['email']);
					header("location:".$_SERVER['PHP_SELF']);
				}else{
					$message = "Failed to Change";
				}
			}
		}
	}elseif($_POST['submit'] == "Change Password"){
		if(isset($_POST['pass']) AND isset($_POST['password']) AND isset($_POST['passwd'])){
				$pass = md5($_POST['pass']);
				$passwd = md5($_POST['passwd']);
				$password = md5($_POST['password']);
			if($passwd == $password){
				
				$select_data = $_SESSION['con']->selectData($table='users', $select='*', $where=array('password'=>$pass,'id'=>$_SESSION['id']), $or_where=null, $orderby='id', $limit=10);
				$number = $select_data->numRows();
				if(is_numeric($number) and $number == 1){
					
				}else{
					$message = "Old password is incorrect";
				}
			}else{
				$message = "New passwords do not match.";
			}
		}
	}
	require('../parts/head.php');
	require('../parts/navbar.php');
	?>
	<div class="container">
		<h1>User Edit Page</h1><br />
			<form action="" method="POST">
				<h3 style="color:red"><?PHP if(isset($message)){ echo $message;} ?></h3>
				<?PHP
				if($_GET['value'] == "Change Username"){
				?>
					New Username: <input type="text" name="user" required /><br /><br />
					<input type="submit" name="submit" value="Change Username" />
				<?PHP
				}elseif($_GET['value'] == "Change Email"){
				?>
					New Email: <input type="text" name="email" required /><br /><br />
					<input type="submit" name="submit" value="Change Email" />
				<?PHP
				}elseif($_GET['value'] == "Change Password"){
				?>
					Old Password: <input type="text" name="pass" required /><br /><br />
					New Password: <input type="text" name="password" required /><br /><br />
					New Password Re-typed: <input type="text" name="passwd" required /><br /><br />
					<input type="submit" name="submit" value="Change Password" />
				<?PHP
				}
				?>
			</form>
	<?PHP
}else{
require('../parts/head.php');
require('../parts/navbar.php');
?>
	<body>
		<div class="container">
			<h1>User Edit Page</h1><br />
				<form action="" method="POST">
					<?PHP
					if($_GET['value'] == "Change Username"){
					?>
						New Username: <input type="text" name="user" required /><br /><br />
						<input type="submit" name="submit" value="Change Username" />
					<?PHP
					}elseif($_GET['value'] == "Change Email"){
					?>
						New Email: <input type="text" name="email" required /><br /><br />
						<input type="submit" name="submit" value="Change Email" />
					<?PHP
					}elseif($_GET['value'] == "Change Password"){
					?>
						Old Password: <input type="text" name="pass" required /><br /><br />
						New Password: <input type="text" name="password" required /><br /><br />
						New Password Re-typed: <input type="text" name="passwd" required /><br /><br />
						<input type="submit" name="submit" value="Change Password" />
					<?PHP
					}
					?>
				</form>
		</div>
	</body>
<?PHP
}
?>	