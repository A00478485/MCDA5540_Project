<?php include '../header.php'; ?>
<table>
<thead>
<th>Object No</th>
<th>First Name</th>
<th>Last Name</th>
<th>Phone No</th>
<th>Email</th>
<th>Edit</th>
</thead>

<?php

function goToUpdate() {

    #echo "hello from the hood";

    #header("Location: candidateUpdate.php");
    #exit();
}

$sql = "SELECT * FROM candidate";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row

    #echo "<div"." style="."cursor:pointer; display:flex; font-size: 14px; width:100%;>"." <span> Cadidate ID </span> | <span> First Name </span> | <span> Last Name </span> | <span> Phone number </span> | <span> Email </span> | <span> City </span> | <span> Province </span> | <span> Country </span> | <span> ZipCode </span> </div> <form action="."../redirect.php"."method="."post".">";

    #echo "<input style="."visibility:none;"." "."name="."selectedTuple"." "."value="."candidateUpdate.php"."/>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["candidate_id"]."</td>";
        echo "<td>".$row["first_name"]."</td>";
        echo "<td>".$row["last_name"]."</td>";
        echo "<td>".$row["phone_number"]."</td>";
        echo "<td>".$row["email_id"]."</td>";
        echo "<td><a href='./candidateUpdate.php?id=".$row["candidate_id"]."'>Edit</a></td>";
        echo "</tr>";
        #echo "<td>".$row["candidate_id"]."</td>";
        #echo "<div"." onclick="."this.form.submit()"." style="."cursor:pointer; font-size: 14px;>". $row["candidate_id"] ." ". $row["first_name"] ." ".$row["last_name"] ." ".$row["phone_number"] ." ".$row["email_id"] ." ".$row["city"] ." ".$row["province"] ." ".$row["country"] ." ".$row["zipcode"]. "</div><br />";
        // Use the data as needed
    }
#echo "</form></div>";

} else {
    echo "0 results";
}


// echo "i am alive papa";

// echo "<div>";
// for($i = 0 ; $i<10 ;$i++){
//        echo "<div>"; echo $i ; echo "  </div>";
// }

    

// echo "</div>"
?>
</table>

<?php include '../footer.php'; ?>

