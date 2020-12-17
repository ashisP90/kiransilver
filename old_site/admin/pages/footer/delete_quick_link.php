<?php
include "../../config/config.php";
$id=$_GET['id'];

    // sql to delete a record
    $sql = "DELETE FROM quick_link WHERE sr_no='$id' ";

    if ($conn->query($sql) === TRUE) {
       header("Location: quick_link.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();

?>