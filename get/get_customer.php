<?php
include("../conn.php");
if(isset($_POST['u_id'])){
$query = mysqli_query($conn, "SELECT * FROM customer WHERE cust_id=$_POST[u_id]");
 $result = mysqli_fetch_assoc($query);

echo implode(",", $result);
}
?>