<?PHP
require_once('../config.php');
$_SESSION['title'] = "Maps";
require_once('../parts/head.php');
require_once('../parts/navbar.php');
?>
<body>
	<div class="container">
<div class="table-responsive">
<table class="table">
<tr>
	<th class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><h3>Leavenworth</h3></th>
	<th class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><h3>Lansing</h3></th>
</tr>
<tr>
	<td>
		<div class="embed-responsive embed-responsive-4by3"> <iframe class="embed-responsive-item" src="../parts/map.php?address=Leavenworth+Kansas"></iframe></div>
	</td>
	<td>
		<div class="embed-responsive embed-responsive-4by3"> <iframe class="embed-responsive-item" src="../parts/map.php?address=Lansing+Kansas"></iframe></div>
	</td>
</tr>
</table>
</div>
</div>
</body>