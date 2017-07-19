<?PHP
//drop page
require('config.php');
$_SESSION['title'] = "Home";
require('parts/head.php');
require('parts/navbar.php');
?>
<body>
	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" align="center">
			<img src="images/main.png" class="img-responsive" />
			<h1>Welcome to G & W Properties</h1><br />
			<p align="left" style="font-size:20px">G & W Properties, Inc., was founded in 1980 by Wayne Shehorn when he retired from service in the US Army.  the firm's operating officer is Larry Day, a retired E-9 with more than 20 years of service in the US Navy.  Prior to joining G & W, Larry worked for eight years as a housing specialist at Fort Leavenworth.

				<br /><br />Assisting both Wayne and Larry is Mrs. Gina Shehorn.  The entire G & W staff is involved in the company's day-to-day operations.  our professional answering service has been with us since the company was founded and is staffed by very capable Priscilla and Debbie.  To further support its clients, G & W employs maintenance and cleaning personnel, a seasonal staff, and numerous contact workers.  

				<br /><br />G & W is very proud of its rapid growth and is fully committed to first-rate service for both owners and tenants.  We believe it is this continuing commitment that has made G & W the first choice of so many people in the greater Leavenworth / Lansing area.

				<br /><br />Please email us and let us know how we can better serve your housing rental needs!  Your comments, suggestions, and questions are always welcome and will receive our personal attention.</p>

		</div>
		<div class="col-md-3 col-lg-3">
			<h2>Featured Links</h2>
			<a href="http://www.llchamber.com/"><image class="img-thumbnail" src="images/llcs.png" alt="Leavenworth lansing chamber of commerce"  /></a>
		</div>
	</div>
</body>
<?PHP
require('parts/foot.php');
?>