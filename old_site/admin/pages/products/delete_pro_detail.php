<?php
include "../../config/config.php";
$id=$_GET['id'];

    // sql to delete a record
    $sql = "DELETE FROM producst_detail WHERE id='$id' ";

    if ($conn->query($sql) === TRUE) {
       header("Location: product-details.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();

?>