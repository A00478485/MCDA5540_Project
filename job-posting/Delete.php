<?php include '../header.php'; ?>

<?php 

$parameterValue = $_GET['id'];

$sql = "DELETE FROM job_posting where job_id=".$parameterValue;
$result = $conn->query($sql);

if($result == TRUE){
    echo "Delete successfull!!!";

} else {
    echo "Delete un successfull!!!";

}

?>
<?php include '../footer.php'; ?>
