<form method="POST" action="<?PHP echo $_SESSION['site']."/properties/"?>">
<div class="col-lg-6">
Type: <select name="type" class="form-control col-lg-4" >
	<option value="">-- Select An Option --</option>
	<option value="House">House</option>
	<option value="Apartment">Apartment</option>
	<option value="Duplex">Duplex</option>
	<option value="Fourplex">Fourplex</option>
	<option value="Condo">Condo</option>
	<option value="Townhome">Townhome</option>
	<option value="Commercial">Commercial</option>
	<option value="Villa">Villa</option>
</select><br /><br />
Utilities: <select name="utilities" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Yes">Yes</option>
	<option value="No">No</option>
</select><br /><br />
Children: <select name="children" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Yes">Yes</option>
	<option value="No">No</option>
	<option value="Upon Approval">Upon Approval</option>
</select><br /><br />
Pets: <select name="pets" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Yes">Yes</option>
	<option value="No">No</option>
	<option value="Upon Approval">Upon Approval</option>
</select><br /><br />
Kitchen: <select name="kitchen" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Yes, Large">Yes, Large</option>
	<option value="Yes, Medium">Yes, Medium</option>
	<option value="Yes, Small">Yes, Small</option>
	<option value="No">No</option>
</select><br /><br />
Dining: <select name="dining" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Yes, Large">Yes, Large</option>
	<option value="Yes, Medium">Yes, Medium</option>
	<option value="Yes, Small">Yes, Small</option>
	<option value="No">No</option>
</select><br /><br />
Living: <select name="living" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Yes, Large">Yes, Large</option>
	<option value="Yes, Medium">Yes, Medium</option>
	<option value="Yes, Small">Yes, Small</option>
	<option value="No">No</option>
</select><br /><br />
Family: <select name="Family" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Yes, Large">Yes, Large</option>
	<option value="Yes, Medium">Yes, Medium</option>
	<option value="Yes, Small">Yes, Small</option>
	<option value="No">No</option>
</select><br /><br />
Den: <select name="Den" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Yes, Large">Yes, Large</option>
	<option value="Yes, Medium">Yes, Medium</option>
	<option value="Yes, Small">Yes, Small</option>
	<option value="No">No</option>
</select><br /><br />
Study: <select name="study" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Yes, Large">Yes, Large</option>
	<option value="Yes, Medium">Yes, Medium</option>
	<option value="Yes, Small">Yes, Small</option>
	<option value="No">No</option>
</select><br /><br />
Deck: <select name="deck" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Yes, Large">Yes, Large</option>
	<option value="Yes, Medium">Yes, Medium</option>
	<option value="Yes, Small">Yes, Small</option>
	<option value="No">No</option>
</select><br /><br />
</div>
<div class="col-lg-6">
Patio: <select name="patio" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Yes, Large">Yes, Large</option>
	<option value="Yes, Medium">Yes, Medium</option>
	<option value="Yes, Small">Yes, Small</option>
	<option value="No">No</option>
</select><br /><br />
Washer: <select name="washer" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Yes">Yes</option>
	<option value="No">No</option>
	<option value="Yes, in basement">Yes, in basement</option>
</select><br /><br />
Dish: <select name="dish" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Yes">Yes</option>
	<option value="No">No</option>
</select><br /><br />
Ranged: <select name="ranged" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Yes, Electric">Yes, Electric</option>
</select><br /><br />
Refrigerator: <select name="refrigerator" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Yes">Yes</option>
	<option value="No">No</option>
</select><br /><br />
Fireplace: <select name="fireplace" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Yes">Yes</option>
	<option value="No">No</option>
</select><br /><br />
Air: <select name="air" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Yes, Central">Yes, Central</option>
	<option value="Yes, Wall">Yes, Wall</option>
	<option value="No">No</option>
</select><br /><br />
Garage: <select name="garage" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Yes">Yes</option>
	<option value="No">No</option>
</select><br /><br />
Fence: <select name="fence" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Yes, Privacy">Yes, Privacy</option>
	<option value="Yes, Chainlink">Yes, Chainlink</option>
	<option value="No">No</option>
</select><br /><br />
City: <select name="city" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Leavenworth">Leavenworth</option>
	<option value="Lansing">Lansing</option>
	<option value="Weston">Weston</option>
	<option value="Pleasant Ridge">Pleasant Ridge</option>
</select><br /><br />
Available: <select name="available" class="form-control col-lg-4">
	<option value="">-- Select An Option --</option>
	<option value="Yes">Yes</option>
	<option value="No">No</option>
</select><br /><br /><br />
<button type="submit" name="submit" class="btn btn-default">Submit</button>
</div>
</form>
