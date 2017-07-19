<?PHP
require_once('../../config.php');
if(isset($_SESSION['admin']) and isset($_GET['id'])){
	$_SESSION['con']->deleteData($table='housing',$where=$_GET);
	header("location:".$_SESSION['site']."/");
}