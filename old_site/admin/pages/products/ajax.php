<?php
include "../../config/config.php";

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "select * from sub_cat where cat_id='$id'";
    ?>

    <select name="sub_cat" id="sub_cat" class="form-control">

        <option value="">select sub cat</option>
        <?php
        while ($row = mysqli_fetch_array($query)) {
            $id = $row['id'];
            $scname = $row['scname'];
            ?>
            <option value="<?php echo $id; ?>"><?php echo $scname; ?> </option>
            <?php
        }
        ?>
    </select>
    <?php
}
?>

