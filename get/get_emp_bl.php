<?php
include("../conn.php");
if(isset($_POST['id'])){
$query = mysqli_query($conn, "SELECT salary FROM employees WHERE emp_id=$_POST[id]");
 $result = mysqli_fetch_assoc($query);

echo implode(",", $result);
}

?>