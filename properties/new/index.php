<?PHP
//New page
require('../../config.php');
$_SESSION['title'] = "New";
if(!isset($_SESSION['admin'])){
	header("location:".$_SESSION['site']."/");
}elseif(isset($_SESSION['admin']) and isset($_POST['finish'])){
	unset($_POST['finish']);
	print_r($_POST);
	$id = $_SESSION['con']->insertData($table="housing",$data=array_filter($_POST))->insertId();
	if(is_numeric($id)){
		mkdir('../../images/properties/'.$_POST['address']);
		//header("location:".$_SESSION['site']."/properties/view/?id=".$id);
	}
}
require('../../parts/head.php');
require('../../parts/navbar.php');
?>
<body>
	<div class="container">
		<div class="table-responsive">
			<form method="POST" action="">
				<table class="table table-condensed table-hover">
				<tbody>
					<tr><td>Name:</td> <td>
						<input type="text" name="name"  class="form-control"/>
					</td><tr/>
					<tr><td>Address:</td> <td>
						<input type="text" name="address"  class="form-control" required />
					</td><tr/>
					<tr><td>Description:</td> <td>
						<textarea name="description"  class="form-control"></textarea>
					</td><tr/>
					<tr><td>Date:</td> <td>
						<input type="text" name="dataAvailable"  class="form-control" required />
					</td><tr/>
					<tr><td>Type:</td><td>
						<select name="type"  class="form-control" required>
							<option value="House" >House</option>
							<option value="Apartment" >Apartment</option>
							<option value="Duplex" >Duplex</option>
							<option value="Fourplex" >Fourplex</option>
							<option value="Condo">Condo</option>
							<option value="Townhome" >Townhome</option>
							<option value="Commercial" >Commercial</option>
							<option value="Villa">Villa</option>
						</select>
					</td><tr/>
					<tr><td>Rent:</td> <td>
						<input type="text" name="rent"  class="form-control" required />
					</td><tr/>
					<tr><td>Deposit:</td> <td>
						<input type="text" name="deposit"  class="form-control" required />
					</td><tr/>
					<tr><td>Utilities:</td> <td>
						<select name="utilities"  class="form-control" required>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</td><tr/>
					<tr><td>Children:</td> <td>
						<select name="children"  class="form-control" required>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
							<option value="Upon Approval">Upon Approval</option>
						</select>
					</td><tr/>
					<tr><td>Pets:</td> <td>
						<select name="pets"  class="form-control" required>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
							<option value="Upon Approval">Upon Approval</option>
						</select>
					</td><tr/>
					<tr><td>Bedroom(s) Number:</td> <td>
						<input type="text" name="bedrooms"  class="form-control" required />
					</td><tr/>
					<tr><td>BedroomDescription:</td> <td>
						<textarea name="bedroomDescription"  class="form-control" required></textarea>
					</td><tr/>
					<tr><td>Baths:</td> <td>
						<input type="text" name="baths"  class="form-control" required />
					</td><tr/>
					<tr><td>Kitchen:</td> <td>
						<select name="kitchen"  class="form-control" required>
							<option value="Yes, Large">Yes, Large</option>
							<option value="Yes, Medium">Yes, Medium</option>
							<option value="Yes, Small">Yes, Small</option>
							<option value="No">No</option>
						</select>
					</td><tr/>
					<tr><td>Dining:</td> <td>
						<select name="dining"  class="form-control" required>
							<option value="Yes, Large">Yes, Large</option>
							<option value="Yes, Medium">Yes, Medium</option>
							<option value="Yes, Small">Yes, Small</option>
							<option value="No">No</option>
						</select>
					</td><tr/>
					<tr><td>Living:</td> <td>
						<select name="living"  class="form-control" required>
							<option value="Yes, Large">Yes, Large</option>
							<option value="Yes, Medium">Yes, Medium</option>
							<option value="Yes, Small">Yes, Small</option>
							<option value="No">No</option>
						</select>
						
					</td><tr/>
					<tr><td>Family:</td> <td>
						<select name="family"  class="form-control" required>
							<option value="Yes, Large">Yes, Large</option>
							<option value="Yes, Medium">Yes, Medium</option>
							<option value="Yes, Small">Yes, Small</option>
							<option value="No">No</option>
						</select>
					</td><tr/>
					<tr><td>Den:</td> <td>
						<select name="den"  class="form-control" required>
							<option value="Yes, Large">Yes, Large</option>
							<option value="Yes, Medium">Yes, Medium</option>
							<option value="Yes, Small">Yes, Small</option>
							<option value="No">No</option>
						</select>
					</td><tr/>
					<tr><td>Study:</td> <td>
						<select name="study"  class="form-control" required>
							<option value="Yes, Large">Yes, Large</option>
							<option value="Yes, Medium">Yes, Medium</option>
							<option value="Yes, Small">Yes, Small</option>
							<option value="No">No</option>
						</select>
					</td><tr/>
					<tr><td>Deck:</td> <td>
						<select name="deck"  class="form-control" required>
							<option value="Yes, Large">Yes, Large</option>
							<option value="Yes, Medium">Yes, Medium</option>
							<option value="Yes, Small">Yes, Small</option>
							<option value="No">No</option>
						</select>
					</td><tr/>
					<tr><td>Patio:</td> <td>
						<select name="patio"  class="form-control" required>
							<option value="Yes, Large">Yes, Large</option>
							<option value="Yes, Medium">Yes, Medium</option>
							<option value="Yes, Small">Yes, Small</option>
							<option value="No">No</option>
						</select>
					</td><tr/>
					<tr><td>Washer:</td> <td>
						<select name="washer"  class="form-control" required>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
							<option value="Yes, in basement">Yes, in basement</option>
						</select>
					</td><tr/>
					<tr><td>Dish:</td> <td>
						<select name="dish"  class="form-control" required>
							<option value="Yes">Yes</option>
							<option value="No">>No</option>
						</select>
					</td><tr/>
					<tr><td>Range:</td> <td>
						<select name="ranged"  class="form-control" required>
							<option value="Yes, Electric">Yes, Electric</option>
						</select>
					</td><tr/>
					<tr><td>Refrigerator:</td> <td>
						<select name="refrigerator"  class="form-control" required>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</td><tr/>
					<tr><td>Fireplace:</td> <td>
						<select name="fireplace"  class="form-control" required>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</td><tr/>
					<tr><td>Air:</td> <td>
						<select name="air"  class="form-control" required>
							<option value="Yes, Central">Yes, Central</option>
							<option value="Yes, Wall">Yes, Wall</option>
							<option value="No">No</option>
						</select>
					</td><tr/>
					<tr><td>Garage:</td> <td>
						<select name="garage"  class="form-control" required>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</td><tr/>
					<tr><td>Fence:</td> <td>
						<select name="fence"  class="form-control" required>
							<option value="Yes, Chainlink">Yes, Chainlink</option>
							<option value="Yes, Privacy">Yes, Privacy</option>
							<option value="No">No</option>
						</select>
					</td><tr/>
					<tr><td>City:</td> <td>
						<select name="city"  class="form-control" required>
							<option value="Leavenworth">Leavenworth</option>
							<option value="Lansing">Lansing</option>
							<option value="Weston">Weston</option>
							<option value="Pleasant Ridge">Pleasant Ridge</option>
						</select>
					</td><tr/>
					<tr><td>Available:</td> <td>
						<select name="available"  class="form-control" required>
							<option value="Yes">Yes</option>
							<option value="No" >No</option>
						</select>
					</td><tr/>
					<tr>
						<td><br /></td>
						<td><br /><input type="submit" name="finish" value="Add property"  class="form-control" /></td>
						<td align="right"><br /><input align="right" type="submit" name="cancel" Value="Cancel"  class="form-control" /></td>
					</tr>
				</tbody>
				</table>
			</form>
		</div>
	</div>
</body>