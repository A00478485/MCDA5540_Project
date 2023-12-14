<?php include '../header.php'; ?>

<?php

$sql = 'select concat(e.emp_id," - ", e.first_name, " ", e.last_name) as label, count(*) as y from employee e inner join job_posting j on e.emp_id=j.posted_by_emp group by 1 order by 2;';
$result = $conn->query($sql);
$dataPoints = array();

if ($result->num_rows > 0)
{
    while ($row = $result->fetch_assoc())
    {
        array_push($dataPoints, array("y" => $row["y"], "label" => $row["label"]));
    }
}

// $dataPoints = array( 
// 	array("y" => 7,"label" => "March" ),
// 	array("y" => 12,"label" => "April" ),
// 	array("y" => 28,"label" => "May" ),
// 	array("y" => 18,"label" => "June" ),
// 	array("y" => 41,"label" => "July" )
// );
 
?>

<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Job Postings by Recruiter"
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