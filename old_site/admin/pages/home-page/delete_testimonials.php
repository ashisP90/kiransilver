<?php
include "../../config/config.php";
$id=$_GET['id'];

    // sql to delete a record
    $sql = "DELETE FROM testimonials WHERE sr_no='$id' ";

    if ($conn->query($sql) === TRUE) {
       header("Location: testimonials.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();

?>