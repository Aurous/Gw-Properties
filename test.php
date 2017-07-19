<?PHP
if(isset($_GET['info'])){
phpinfo();
}else{
	if(function_exists("get_magic_quotes_gpc")){
		echo "get_magic_quotes_gpc<br />";
	}
	if(function_exists("trim")){
		echo "trim";
	}
}
?>