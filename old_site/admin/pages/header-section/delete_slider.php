<?php
include "../../config/config.php";
$id=$_GET['id'];

    // sql to delete a record
    $sql = "DELETE FROM slider WHERE sr_no='$id' ";

    if ($conn->query($sql) === TRUE) {
       header("Location: slider_section.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();

?>