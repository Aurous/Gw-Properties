<?PHP
echo "<h1>Website Hits</h1>";
$date = new DateTime(date('d\.m\.Y'));
$dates = array();
for($day=1; $day<=7; $day++)
{
    array_push($dates, date('Y\.m\.d', strtotime(date('Y')."W".$date->format("W").$day))."\n");
}
echo "<div class='table-responsive'><table class='table' style='border-width:1px;border-style: solid;'><tr>";
foreach($dates as $days){
	$select_data = $_SESSION['con']->selectData($table='logging', $select='*', $where=array("date"=>$days), $or_where=null,$orderby=null, $limit=1000);
	echo("<td><br />".str_replace(".","/",$days).": <b>".$select_data->numRows()." Hits</b></td>");
}
echo "</tr></table></div>";
?>