<?php
include("../conn.php");
if(isset($_POST['id'])){
$query = mysqli_query($conn, "SELECT fee FROM customer WHERE cust_id=$_POST[id]");
 $result = mysqli_fetch_assoc($query);

echo implode(",", $result);
}

?>