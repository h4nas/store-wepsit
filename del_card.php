<?php
include('config.php');
$ID= $_GET['id'];
mysqli_query($con, "DELETE FROM addcard where id=$ID");
header('location:card.php')

?>