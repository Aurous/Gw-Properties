<?PHP
//view page
require('../../config.php');
$_SESSION['title'] = "Home";
if(isset($_GET['id'])){
	$select_data = $_SESSION['con']->selectData($table='housing', $select='*', $where=array("id"=>$_GET['id']), $or_where=null, $limit=1);
	if(is_numeric($select_data->numRows()) AND $select_data->numRows() == 1){
		$results = $select_data->result();
		foreach($results as $house){
			$id = $house->id;
			$name = $house->name;
			$address = $house->address;
			$description = $house->description;
			$date = $house->dataAvailable;
			$type = $house->type;
			$rent = $house->rent;
			$deposit = $house->deposit;
			$utilities = $house->utilities;
			$children = $house->children;
			$pets = $house->pets;
			$bedrooms = $house->bedrooms;
			$bedroomDescription = $house->bedroomDescription;
			$baths = $house->baths;
			$kitchen = $house->kitchen;
			$dining = $house->dining;
			$living = $house->living;
			$family = $house->family;
			$den = $house->den;
			$study = $house->study;
			$deck = $house->deck;
			$patio = $house->patio;
			$washer = $house->washer;
			$dish = $house->dish;
			$ranged = $house->ranged;
			$refrigerator = $house->refrigerator;
			$fireplace = $house->fireplace;
			$air = $house->air;
			$garage = $house->garage;
			$fence = $house->fence;
			$city = $house->city;
			$remarks = $house->remarks;
			$keywords = $house->keywords;
			$available = $house->available;
		}
	}else{
		$message = "House Not Found";
		
	}
}else{
	header('location:'. $_SESSION['site'] . "/properties");
}
if(isset($city)){
	if($city == "Leavenworth"){
		$state = "Kansas";
		$zip = "66048";
	}elseif($city == "Lansing"){
		$state = "Kansas";
		$zip = "66043";
	}elseif($city == "Weston"){
		$state = "Missouri";
		$zip = "64098";
	}elseif($city == "Pleasent Ridge"){
		$state = "Kansas";
		$zip = "48069";
	}
}
require('../../parts/head.php');
require('../../parts/navbar.php');
?>
<body>
	<div class="container">
	<?PHP
	if(isset($message)){
		echo "<h2>".$message."</h2><br /><hr style='border-color:red'>";
		require("../../parts/search.php");
	}else{
	?>
	
			<?PHP
			if(isset($_SESSION['admin'])){
			?>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<a href="<?PHP echo $_SESSION['site']."/properties/edit/?id=".$id ?>"><input type="button" name="edit" value="Edit" /></a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<input type="button" name="delete" value="Delete" onclick="deleteItem()" />
				</div>
				<script>
					function deleteItem(){
						if (confirm('Delete property?')) {
							window.location.href = "<?PHP echo $_SESSION['site']."/properties/delete/?id=".$id ?>";
						}
					}
				</script>
			</div><br />
			<?PHP
			}
			?>
	<div class="table-responsive">
		<table class="table table-condensed table-hover">
		<tbody>
			<tr><td><img class="img-responsive" src="<?PHP echo $_SESSION['site']."/images/properties/".$address."/main.jpg"; ?>" /></td><td>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<?PHP
					$dir = '../../images/properties/'.$address.'/';
					$dirfiles = glob($dir.'*.jpg');
					$num = count($dirfiles);
					$counts = count($dirfiles);

					?>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<?PHP 
						foreach($dirfiles as $file) {
						  $name = substr(str_replace($dir, '', $file),0,-4);
						  if($name != "main"){
						  if($counts == $num){
							echo '
							<div class="item active">
								<img src="'.$file.'"  style="width:100%;">
								<div class="carousel-caption">
									<h3>'.$name.'</h3>
								</div>
							</div>
							';
							$counts -= 1;
						  }else{
							echo '
							<div class="item">
								<img src="'.$file.'"  style="width:100%;">
								<div class="carousel-caption">
									<h3>'.$name.'</h3>
								</div>
							</div>
							';
						  }
						  }
						  
						}
						?>

					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					  <span class="glyphicon glyphicon-chevron-left"></span>
					  <span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
					  <span class="glyphicon glyphicon-chevron-right"></span>
					  <span class="sr-only">Next</span>
					</a>
				  </div>	
			</td></tr>
			<tr><td>Name:</td> <td><?PHP echo $name; ?></td><tr/>
			<tr><td>Address:</td> <td><?PHP echo $address; ?></td><tr/>
			<tr><td>Description:</td> <td><?PHP echo $description; ?></td><tr/>
			<tr><td>Date:</td> <td><?PHP echo $date; ?></td><tr/>
			<tr><td>Type:</td> <td><?PHP echo $type; ?></td><tr/>
			<tr><td>Rent:</td> <td><?PHP echo $rent; ?></td><tr/>
			<tr><td>Deposit:</td> <td><?PHP echo $deposit; ?></td><tr/>
			<tr><td>Utilities:</td> <td><?PHP echo $utilities; ?></td><tr/>
			<tr><td>Children:</td> <td><?PHP echo $children; ?></td><tr/>
			<tr><td>Pets:</td> <td><?PHP echo $pets; ?></td><tr/>
			<tr><td>Bedroom(s) Number:</td> <td><?PHP echo $bedrooms; ?></td><tr/>
			<tr><td>BedroomDescription:</td> <td><?PHP echo $bedroomDescription; ?></td><tr/>
			<tr><td>Baths:</td> <td><?PHP echo $baths; ?></td><tr/>
			<tr><td>Kitchen:</td> <td><?PHP echo $kitchen; ?></td><tr/>
			<tr><td>Dining:</td> <td><?PHP echo $dining; ?></td><tr/>
			<tr><td>Living:</td> <td><?PHP echo $living; ?></td><tr/>
			<tr><td>Family:</td> <td><?PHP echo $family; ?></td><tr/>
			<tr><td>Den:</td> <td><?PHP echo $den; ?></td><tr/>
			<tr><td>Study:</td> <td><?PHP echo $study; ?></td><tr/>
			<tr><td>Deck:</td> <td><?PHP echo $deck; ?></td><tr/>
			<tr><td>Patio:</td> <td><?PHP echo $patio; ?></td><tr/>
			<tr><td>Washer:</td> <td><?PHP echo $washer; ?></td><tr/>
			<tr><td>Dish:</td> <td><?PHP echo $dish; ?></td><tr/>
			<tr><td>Ranged:</td> <td><?PHP echo $ranged; ?></td><tr/>
			<tr><td>Refrigerator:</td> <td><?PHP echo $refrigerator; ?></td><tr/>
			<tr><td>Fireplace:</td> <td><?PHP echo $fireplace; ?></td><tr/>
			<tr><td>Air:</td> <td><?PHP echo $air; ?></td><tr/>
			<tr><td>Garage:</td> <td><?PHP echo $garage; ?></td><tr/>
			<tr><td>Fence:</td> <td><?PHP echo $fence; ?></td><tr/>
			<tr><td>City:</td> <td><?PHP echo $city; ?></td><tr/>
			<tr><td colspan="2" >
			<div class="embed-responsive embed-responsive-16by9"> <iframe class="embed-responsive-item" src="../../parts/map.php?address=<?PHP echo $address."+".$city."+".$state."+".$zip; ?>"></iframe></div>
			</td></tr>
		</tbody>
		</table>
	</div>

	<?PHP
	}
	?>
	</div>
</body>