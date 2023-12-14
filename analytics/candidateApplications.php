<?php include '../header.php'; ?>

<?php

$sql = 'select concat(c.candidate_id," - ", c.first_name, " ", c.last_name) as label, count(*) as y from candidate c inner join application a on c.candidate_id=a.candidate_id group by 1 order by 2;';
$result = $conn->query($sql);
$dataPoints = array();

if ($result->num_rows > 0)
{
    while ($row = $result->fetch_assoc())
    {
        array_push($dataPoints, array("y" => $row["y"], "label" => $row["label"]));
    }
}
 
?>

<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Number of Applications by Candidate"
	},
	axisY: {
		title: "No of Jobs",
		includeZero: true,
	},
	data: [{
		type: "bar",
		yValueFormatString: "#,###",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

<?php include '../footer.php'; ?>