<?PHP
//property page
require('../config.php');
$_SESSION['title'] = "Properties Search";
if(isset($_POST['submit'])){
	unset($_POST['submit']);
	$_SESSION['search'] = '<input type="button" onclick="window.history.go(-1); return false;" value="Go Back"/><br /><br />';
	header("location:" . $_SESSION['site'] ."/properties/?". http_build_query(array_filter($_POST)));
}else{
	if(isset($_SESSION['search'])){
		$search = $_SESSION['search'];
		unset($_SESSION['search']);
	}
}
require('../parts/head.php');
require('../parts/navbar.php');
?>
<body>
	<div class="container" style="">
	<?PHP
	if(isset($search) and !isset($_SESSION['search'])){
		echo $search;
	}
	?>
		<?PHP
			if(!empty($_GET)){
				$select_data = $_SESSION['con']->selectData($table='housing', $select='*', $where=array_filter($_GET), $or_where=null, $orderby='id', $limit=100, $offset=null);
				if(is_numeric($select_data->numRows()) and $select_data->numRows() >= 1){
					$result = $select_data->result();
					function buttons($name, $admin){
						if($admin == true){
							return "<a href='".$_SESSION['site']."/properties/view/?id=".$name."' class='btn btn-primary' role='button'>View</a>&nbsp;&nbsp;&nbsp;<a href='".$_SESSION['site']."/properties/edit/?id=".$name."' class='btn btn-default' role='button'>Edit</a>";
						}else{ 
							return "<a href='".$_SESSION['site']."/properties/view/?id=".$name."' class='btn btn-primary' role='button'>View</a>";
						}
					}
					if(isset($_SESSION['admin'])){
						$admin = $_SESSION['admin'];
					}else{
						$admin = null;
					}
					foreach($result as $house){
						echo "
							<div class='col-sm-6 col-md-4 col-lg-4'>
								<div class='thumbnail'>
								<div class='caption'>
									<h3>$house->address</h3>
									<p>$house->description</p>
									<p>".buttons($house->id, $admin)."</p>
								</div>
								</div>
							</div>
						";
					}
				}else{
					echo "Nothing found, please try a different search.";
					?><hr style="border-color:red"><?PHP
					require('../parts/search.php');
				}
			}else{
				require('../parts/search.php');
			}
		?>
		
	
	</div>
</body>