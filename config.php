<?PHP
session_start();
require('database/Database.php');
$_SESSION['site'] = "http://" . $_SERVER['SERVER_NAME'] . ":8080";
//mysql server information
$server = "localhost";
$username = "gw";
$password = "password";
$database = "gw";
$_SESSION['con'] = new Database($server,$username,$password,$database);
//--
if(isset($_SERVER['HTTP_REFERER'])){
	$ref = $_SERVER['HTTP_REFERER'];
}else{
	$ref = null;
}
$ip = $_SERVER['REMOTE_ADDR'];
$data = array('date'=>date('Y\.m\.d'), 'protocol'=>$_SERVER['SERVER_PROTOCOL'], 'ip'=>$_SERVER['REMOTE_ADDR'], 'port'=>$_SERVER['REMOTE_PORT'], 'agent'=>$_SERVER['HTTP_USER_AGENT'], 'ref'=>$ref, 'hostname'=>gethostbyaddr($_SERVER['REMOTE_ADDR']), 'time'=>date('G\:i'));
//print_r($data);
$select_data = $_SESSION['con']->selectData($table='logging', $select='*', $where=array('ip'=>$ip, 'date'=>date('Y\.m\.d')), $or_where=null, $limit=1);
if(is_numeric($select_data->numRows()) and !$select_data->numRows() == 1){
	$insert_data = $_SESSION['con']->insertData($table='logging',$data);
}




//print_r(array($_SERVER['SERVER_PROTOCOL'], $_SERVER['REMOTE_ADDR'], $_SERVER['REMOTE_PORT'], $_SERVER['HTTP_USER_AGENT'], $_SERVER['HTTP_REFERER'], gethostbyaddr($_SERVER['REMOTE_ADDR'])))
?>