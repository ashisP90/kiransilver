<?php
include "../../config/config.php";
$id=$_GET['id'];

    // sql to delete a record
    $sql = "DELETE FROM sub_cat WHERE id='$id' ";

    if ($conn->query($sql) === TRUE) {
       header("Location: Sub_category.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();

?>