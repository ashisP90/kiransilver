<?php
include "../../config/config.php";
$id=$_GET['id'];

    // sql to delete a record
    $sql = "DELETE FROM associate_member WHERE sr_no='$id' ";

    if ($conn->query($sql) === TRUE) {
       header("Location: associate-members.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();

?>