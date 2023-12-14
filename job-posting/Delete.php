<?php include '../header.php'; ?>

<?php 

$parameterValue = $_GET['id'];

$sql = "DELETE FROM job_posting where job_id=".$parameterValue;
$result = $conn->query($sql);

if($result == TRUE){
    echo "Delete successfull!!!";
    header('Location: ./List.php');

} else {
    echo "Delete un successfull!!!";
    header('Location: ./List.php?error=1');
}

?>
<?php include '../footer.php'; ?>
