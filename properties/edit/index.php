<?PHP
//edit page
require('../../config.php');
$_SESSION['title'] = "Edit";
if(isset($_POST['submit']) or isset($_POST['finish']) and isset($_GET['id']) and $_SESSION['admin']){
		$data=array("name"=>$_SESSION['con']->cleanInput($_POST['name']),
					"address"=>$_SESSION['con']->cleanInput($_POST['address']),
					"description"=>$_SESSION['con']->cleanInput($_POST['description']),
					"dataAvailable"=>$_SESSION['con']->cleanInput($_POST['dataAvailable']),
					"type"=>$_SESSION['con']->cleanInput($_POST['type']),
					"rent"=>$_SESSION['con']->cleanInput($_POST['rent']),
					"deposit"=>$_SESSION['con']->cleanInput($_POST['deposit']),
					"utilities"=>$_SESSION['con']->cleanInput($_POST['utilities']),
					"children"=>$_SESSION['con']->cleanInput($_POST['children']),
					"pets"=>$_SESSION['con']->cleanInput($_POST['pets']),
					"bedrooms"=>$_SESSION['con']->cleanInput($_POST['bedrooms']),
					"bedroomDescription"=>$_SESSION['con']->cleanInput($_POST['bedroomDescription']),
					"baths"=>$_SESSION['con']->cleanInput($_POST['baths']),
					"kitchen"=>$_SESSION['con']->cleanInput($_POST['kitchen']),
					"dining"=>$_SESSION['con']->cleanInput($_POST['dining']),
					"living"=>$_SESSION['con']->cleanInput($_POST['living']),
					"family"=>$_SESSION['con']->cleanInput($_POST['family']),
					"den"=>$_SESSION['con']->cleanInput($_POST['den']),
					"study"=>$_SESSION['con']->cleanInput($_POST['study']),
					"deck"=>$_SESSION['con']->cleanInput($_POST['deck']),
					"patio"=>$_SESSION['con']->cleanInput($_POST['patio']),
					"washer"=>$_SESSION['con']->cleanInput($_POST['washer']),
					"dish"=>$_SESSION['con']->cleanInput($_POST['dish']),
					"ranged"=>$_SESSION['con']->cleanInput($_POST['ranged']),
					"refrigerator"=>$_SESSION['con']->cleanInput($_POST['refrigerator']),
					"fireplace"=>$_SESSION['con']->cleanInput($_POST['fireplace']),
					"air"=>$_SESSION['con']->cleanInput($_POST['air']),
					"garage"=>$_SESSION['con']->cleanInput($_POST['garage']),
					"fence"=>$_SESSION['con']->cleanInput($_POST['fence']),
					"city"=>$_SESSION['con']->cleanInput($_POST['city']),
					"available"=>$_SESSION['con']->cleanInput($_POST['available'])	
		);
			
	$test = $_SESSION['con']->updateData($table="housing",$data,$where=$_GET,$or_where=null);
	if(isset($_POST['finish'])){
		header('location:'.$_SESSION['site']."/properties/view/?id=".$_GET['id']);
	}
}
if(isset($_POST['cancel']) and isset($_GET['id'])){
	header("location:".$_SESSION['site']."/properties/view/?id=".$_GET['id']);
}
if(isset($_GET['id']) and $_SESSION['admin']){
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
	<div class="table-responsive">
	<form method="POST" action="">
		<table class="table table-condensed table-hover">
		<tbody>
			<tr><td>Name:</td> <td>
				<input type="text" name="name" value="<?PHP echo $name; ?>" />
			</td><tr/>
			<tr><td>Address:</td> <td>
				<input type="text" name="address" value="<?PHP echo $address; ?>" disabled />
			</td><tr/>
			<tr><td>Description:</td> <td>
				<textarea name="description"><?PHP echo $description; ?></textarea>
			</td><tr/>
			<tr><td>Date:</td> <td>
				<input type="text" name="dataAvailable" value="<?PHP echo $date; ?>" />
			</td><tr/>
			<tr><td>Type:</td><td>
				<?PHP
					if($type == "House"){
						$type1 = "selected";
					}elseif($type == "Apartment"){
						$type2 = "selected";
					}elseif($type == "Duplex"){
						$type3 = "selected";
					}elseif($type == "Fourplex"){
						$type4 = "selected";
					}elseif($type == "Condo"){
						$type5 = "selected";
					}elseif($type == "Townhome"){
						$type6 = "selected";
					}elseif($type == "Commercial"){
						$type7 = "selected";
					}elseif($type == "Villa"){
						$type8 = "selected";
					}
				?>
				<select name="type">
					<option value="House" <?PHP if(isset($type1)){echo $type1;} ?>>House</option>
					<option value="Apartment" <?PHP if(isset($type2)){echo $type2;} ?>>Apartment</option>
					<option value="Duplex" <?PHP if(isset($type3)){echo $type3;} ?>>Duplex</option>
					<option value="Fourplex" <?PHP if(isset($type4)){echo $type4;} ?>>Fourplex</option>
					<option value="Condo" <?PHP if(isset($type5)){echo $type5;} ?>>Condo</option>
					<option value="Townhome" <?PHP if(isset($type6)){echo $type6;} ?>>Townhome</option>
					<option value="Commercial" <?PHP if(isset($type7)){echo $type7;} ?>>Commercial</option>
					<option value="Villa" <?PHP if(isset($type8)){echo $type8;} ?>>Villa</option>
				</select>
			</td><tr/>
			<tr><td>Rent:</td> <td>
				<input type="text" name="rent" value="<?PHP echo $rent; ?>" />
			</td><tr/>
			<tr><td>Deposit:</td> <td>
				<input type="text" name="deposit" value="<?PHP echo $deposit; ?>" />
			</td><tr/>
			<tr><td>Utilities:</td> <td>
				<?PHP
					if($utilities == "Yes"){
						$utilities1 = "selected";
					}elseif($utilities == "No"){
						$utilities2 = "selected";
					}
				?>
				<select name="utilities">
					<option value="Yes" <?PHP if(isset($utilities1)){echo $utilities1;} ?>>Yes</option>
					<option value="No" <?PHP if(isset($utilities2)){echo $utilities2;} ?>>No</option>
				</select>
			</td><tr/>
			<tr><td>Children:</td> <td>
				<?PHP
					if($children == "Yes"){
						$children1 = "selected";
					}elseif($children == "No"){
						$children2 = "selected";
					}elseif($children == "Upon Approval"){
						$children3 = "selected";
					}
				?>
				<select name="children">
					<option value="Yes" <?PHP if(isset($children1)){echo $children1;} ?>>Yes</option>
					<option value="No" <?PHP if(isset($children2)){echo $children2;} ?>>No</option>
					<option value="Upon Approval" <?PHP if(isset($children3)){echo $children3;} ?>>Upon Approval</option>
				</select>
			</td><tr/>
			<tr><td>Pets:</td> <td>
				<?PHP
					if($pets == "Yes"){
						$pets1 = "selected";
					}elseif($pets == "No"){
						$pets2 = "selected";
					}elseif($pets == "Upon Approval"){
						$pets3 = "selected";
					}
				?>
				<select name="pets">
					<option value="Yes" <?PHP if(isset($pets1)){echo $pets1;} ?>>Yes</option>
					<option value="No" <?PHP if(isset($pets2)){echo $pets2;} ?>>No</option>
					<option value="Upon Approval" <?PHP if(isset($pets3)){echo $pets3;} ?>>Upon Approval</option>
				</select>
			</td><tr/>
			<tr><td>Bedroom(s) Number:</td> <td>
				<input type="text" name="bedrooms" value="<?PHP echo $bedrooms; ?>" />
			</td><tr/>
			<tr><td>BedroomDescription:</td> <td>
				<textarea name="bedroomDescription"><?PHP echo $bedroomDescription; ?></textarea>
			</td><tr/>
			<tr><td>Baths:</td> <td>
				<input type="text" name="baths" value="<?PHP echo $baths; ?>" />
			</td><tr/>
			<tr><td>Kitchen:</td> <td>
				<?PHP
					if($kitchen == "Yes, Large"){
						$kitchen1 = "selected";
					}elseif($kitchen == "Yes, Medium"){
						$kitchen2 = "selected";
					}elseif($kitchen == "Yes, Small"){
						$kitchen3 = "selected";
					}elseif($kitchen == "No"){
						$kitchen4 = "selected";
					}
				?>
				<select name="kitchen">
					<option value="Yes, Large" <?PHP if(isset($kitchen1)){echo $kitchen1;} ?>>Yes, Large</option>
					<option value="Yes, Medium" <?PHP if(isset($kitchen2)){echo $kitchen2;} ?>>Yes, Medium</option>
					<option value="Yes, Small" <?PHP if(isset($kitchen3)){echo $kitchen3;} ?>>Yes, Small</option>
					<option value="No" <?PHP if(isset($kitchen4)){echo $kitchen4;} ?>>No</option>
				</select>
			</td><tr/>
			<tr><td>Dining:</td> <td>
				<?PHP
					if($dining == "Yes, Large"){
						$dining1 = "selected";
					}elseif($dining == "Yes, Medium"){
						$dining2 = "selected";
					}elseif($dining == "Yes, Small"){
						$dining3 = "selected";
					}elseif($dining == "No"){
						$dining4 = "selected";
					}
				?>
				<select name="dining">
					<option value="Yes, Large" <?PHP if(isset($dining1)){echo $dining1;} ?>>Yes, Large</option>
					<option value="Yes, Medium" <?PHP if(isset($dining2)){echo $dining2;} ?>>Yes, Medium</option>
					<option value="Yes, Small" <?PHP if(isset($dining3)){echo $dining3;} ?>>Yes, Small</option>
					<option value="No" <?PHP if(isset($dining4)){echo $dining4;} ?>>No</option>
				</select>
			</td><tr/>
			<tr><td>Living:</td> <td>
				<?PHP
					if($living == "Yes, Large"){
						$living1 = "selected";
					}elseif($living == "Yes, Medium"){
						$living2 = "selected";
					}elseif($living == "Yes, Small"){
						$living3 = "selected";
					}elseif($living == "No"){
						$living4 = "selected";
					}
				?>
				<select name="living">
					<option value="Yes, Large" <?PHP if(isset($living1)){echo $living1;} ?>>Yes, Large</option>
					<option value="Yes, Medium" <?PHP if(isset($living2)){echo $living2;} ?>>Yes, Medium</option>
					<option value="Yes, Small" <?PHP if(isset($living3)){echo $living3;} ?>>Yes, Small</option>
					<option value="No" <?PHP if(isset($living4)){echo $living4;} ?>>No</option>
				</select>
				
			</td><tr/>
			<tr><td>Family:</td> <td>
				<?PHP
					if($family == "Yes, Large"){
						$family1 = "selected";
					}elseif($family == "Yes, Medium"){
						$family2 = "selected";
					}elseif($family == "Yes, Small"){
						$family3 = "selected";
					}elseif($family == "No"){
						$family4 = "selected";
					}
				?>
				<select name="family">
					<option value="Yes, Large" <?PHP if(isset($family1)){echo $family1;} ?>>Yes, Large</option>
					<option value="Yes, Medium" <?PHP if(isset($family2)){echo $family2;} ?>>Yes, Medium</option>
					<option value="Yes, Small" <?PHP if(isset($family3)){echo $family3;} ?>>Yes, Small</option>
					<option value="No" <?PHP if(isset($family4)){echo $family4;} ?>>No</option>
				</select>
			</td><tr/>
			<tr><td>Den:</td> <td>
				<?PHP
					if($den == "Yes, Large"){
						$den1 = "selected";
					}elseif($den == "Yes, Medium"){
						$den2 = "selected";
					}elseif($den == "Yes, Small"){
						$den3 = "selected";
					}elseif($den == "No"){
						$den4 = "selected";
					}
				?>
				<select name="den">
					<option value="Yes, Large" <?PHP if(isset($den1)){echo $den1;} ?>>Yes, Large</option>
					<option value="Yes, Medium" <?PHP if(isset($den2)){echo $den2;} ?>>Yes, Medium</option>
					<option value="Yes, Small" <?PHP if(isset($den3)){echo $den3;} ?>>Yes, Small</option>
					<option value="No" <?PHP if(isset($den4)){echo $den4;} ?>>No</option>
				</select>
			</td><tr/>
			<tr><td>Study:</td> <td>
				<?PHP
					if($study == "Yes, Large"){
						$study1 = "selected";
					}elseif($study == "Yes, Medium"){
						$study2 = "selected";
					}elseif($study == "Yes, Small"){
						$study3 = "selected";
					}elseif($study == "No"){
						$study4 = "selected";
					}
				?>
				<select name="study">
					<option value="Yes, Large" <?PHP if(isset($study1)){echo $study1;} ?>>Yes, Large</option>
					<option value="Yes, Medium" <?PHP if(isset($study2)){echo $study2;} ?>>Yes, Medium</option>
					<option value="Yes, Small" <?PHP if(isset($study3)){echo $study3;} ?>>Yes, Small</option>
					<option value="No" <?PHP if(isset($study4)){echo $study4;} ?>>No</option>
				</select>
			</td><tr/>
			<tr><td>Deck:</td> <td>
				<?PHP
					if($deck == "Yes, Large"){
						$deck1 = "selected";
					}elseif($deck == "Yes, Medium"){
						$deck2 = "selected";
					}elseif($deck == "Yes, Small"){
						$deck3 = "selected";
					}elseif($deck == "No"){
						$deck4 = "selected";
					}
				?>
				<select name="deck">
					<option value="Yes, Large" <?PHP if(isset($deck1)){echo $deck1;} ?>>Yes, Large</option>
					<option value="Yes, Medium" <?PHP if(isset($deck2)){echo $deck2;} ?>>Yes, Medium</option>
					<option value="Yes, Small" <?PHP if(isset($deck3)){echo $deck3;} ?>>Yes, Small</option>
					<option value="No" <?PHP if(isset($deck4)){echo $deck4;} ?>>No</option>
				</select>
			</td><tr/>
			<tr><td>Patio:</td> <td>
				<?PHP
					if($patio == "Yes, Large"){
						$patio1 = "selected";
					}elseif($patio == "Yes, Medium"){
						$patio2 = "selected";
					}elseif($patio == "Yes, Small"){
						$patio3 = "selected";
					}elseif($patio == "No"){
						$patio4 = "selected";
					}
				?>
				<select name="patio">
					<option value="Yes, Large" <?PHP if(isset($patio1)){echo $patio1;} ?>>Yes, Large</option>
					<option value="Yes, Medium" <?PHP if(isset($patio2)){echo $patio2;} ?>>Yes, Medium</option>
					<option value="Yes, Small" <?PHP if(isset($patio3)){echo $patio3;} ?>>Yes, Small</option>
					<option value="No" <?PHP if(isset($patio4)){echo $patio4;} ?>>No</option>
				</select>
			</td><tr/>
			<tr><td>Washer:</td> <td>
			<?PHP
				if($washer == "Yes"){
					$washer1 = "selected";
				}elseif($washer == "No"){
					$washer2 = "selected";
				}elseif($washer == "Yes, in basement"){
					$washer3 = "selected";
				}
			?>
				<select name="washer">
					<option value="Yes" <?PHP if(isset($washer1)){echo $washer1;} ?>>Yes</option>
					<option value="No" <?PHP if(isset($washer2)){echo $washer2;} ?>>No</option>
					<option value="Yes, in basement" <?PHP if(isset($washer3)){echo $washer3;} ?>>Yes, in basement</option>
				</select>
			</td><tr/>
			<tr><td>Dish:</td> <td>
			<?PHP
				if($dish == "Yes"){
					$dish1 = "selected";
				}elseif($dish == "No"){
					$dish2 = "selected";
				}
			?>
				<select name="dish">
					<option value="Yes" <?PHP if(isset($dish1)){echo $dish1;} ?>>Yes</option>
					<option value="No" <?PHP if(isset($dish2)){echo $dish2;} ?>>No</option>
				</select>
			</td><tr/>
			<tr><td>Range:</td> <td>
			<?PHP
				if($ranged == "Yes, Electric"){
					$ranged1 = "selected";
				}
			?>
				<select name="ranged">
					<option value="Yes, Electric" <?PHP if(isset($ranged1)){echo $ranged1;} ?>>Yes, Electric</option>
				</select>
			</td><tr/>
			<tr><td>Refrigerator:</td> <td>
			<?PHP
				if($refrigerator == "Yes"){
					$refrigerator1 = "selected";
				}elseif($refrigerator == "No"){
					$refrigerator2 = "selected";
				}
			?>
				<select name="refrigerator">
					<option value="Yes" <?PHP if(isset($refrigerator1)){echo $refrigerator1;} ?>>Yes</option>
					<option value="No" <?PHP if(isset($refrigerator2)){echo $refrigerator2;} ?>>No</option>
				</select>
			</td><tr/>
			<tr><td>Fireplace:</td> <td>
			<?PHP
				if($fireplace  == "Yes"){
					$fireplace1 = "selected";
				}elseif($fireplace == "No"){
					$fireplace2 = "selected";
				}
			?>
				<select name="fireplace">
					<option value="Yes" <?PHP if(isset($fireplace1)){echo $fireplace1;} ?>>Yes</option>
					<option value="No" <?PHP if(isset($fireplace2)){echo $fireplace2;} ?>>No</option>
				</select>
			</td><tr/>
			<tr><td>Air:</td> <td>
			<?PHP
				if($air == "Yes, Central"){
					$air1 = "selected";
				}elseif($air == "Yes, Wall"){
					$air2 = "selected";
				}elseif($air == "No"){
					$air3 = "selected";
				}
			?>
				<select name="air">
					<option value="Yes, Central" <?PHP if(isset($air1)){echo $air1;} ?>>Yes, Central</option>
					<option value="Yes, Wall" <?PHP if(isset($air2)){echo $air2;} ?>>Yes, Wall</option>
					<option value="No" <?PHP if(isset($air3)){echo $air3;} ?>>No</option>
				</select>
			</td><tr/>
			<tr><td>Garage:</td> <td>
			<?PHP
				if($garage == "Yes"){
					$garage1 = "selected";
				}elseif($garage == "No"){
					$garage2 = "selected";
				}
			?>
				<select name="garage">
					<option value="Yes" <?PHP if(isset($garage1)){echo $garage1;} ?>>Yes</option>
					<option value="No" <?PHP if(isset($garage2)){echo $garage2;} ?>>No</option>
				</select>
			</td><tr/>
			<tr><td>Fence:</td> <td>
			<?PHP
				if($fence == "Yes, Chainlink"){
					$fence1 = "selected";
				}elseif($fence == "Yes, Privacy"){
					$fence2 = "selected";
				}elseif($fence == "No"){
					$fence3 = "selected";
				}
			?>
				<select name="fence">
					<option value="Yes, Chainlink" <?PHP if(isset($fence1)){echo $fence1;} ?>>Yes, Chainlink</option>
					<option value="Yes, Privacy" <?PHP if(isset($fence2)){echo $fence2;} ?>>Yes, Privacy</option>
					<option value="No" <?PHP if(isset($fence3)){echo $fence3;} ?>>No</option>
				</select>
			</td><tr/>
			<tr><td>City:</td> <td>
			<?PHP
				if($city == "Leavenworth"){
					$city1 = "selected";
				}elseif($city == "Lansing"){
					$city2 = "selected";
				}elseif($city == "Weston"){
					$city3 = "selected";
				}elseif($city == "Pleasant Ridge"){
					$city4 = "selected";
				}
			?>	
				<select name="city">
					<option value="Leavenworth" <?PHP if(isset($city1)){echo $city1;} ?>>Leavenworth</option>
					<option value="Lansing" <?PHP if(isset($city2)){echo $city2;} ?>>Lansing</option>
					<option value="Weston" <?PHP if(isset($city3)){echo $city3;} ?>>Weston</option>
					<option value="Pleasant Ridge" <?PHP if(isset($city4)){echo $city4;} ?>>Pleasant Ridge</option>
				</select>
			</td><tr/>
			<tr><td>Available:</td> <td>
			<?PHP
				if($available == "Yes"){
					$available1 = "selected";
				}elseif($available == "No"){
					$available2 = "selected";
				}
			?>	
				<select name="available">
					<option value="Yes" <?PHP if(isset($available1)){echo $available1;} ?>>Yes</option>
					<option value="No" <?PHP if(isset($available2)){echo $available2;} ?>>No</option>
				</select>
			</td><tr/>
			<tr>
				<td><br /><input type="submit" name="submit" value="Save" /></td>
				<td><br /><input type="submit" name="finish" value="Finished" /></td>
				<td align="right"><br /><input align="right" type="submit" name="cancel" Value="Cancel" /></td>
			</tr>
		</tbody>
		</table>
	</form>
	</div>
	<?PHP
	}
	?>
	</div>
</body>