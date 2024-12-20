<?php
include("../conn.php");
if(isset($_POST['id'])){
$query = mysqli_query($conn, "SELECT balance FROM supplier WHERE supp_id=$_POST[id]");
 $result = mysqli_fetch_assoc($query);

echo implode(",", $result);
}

?>