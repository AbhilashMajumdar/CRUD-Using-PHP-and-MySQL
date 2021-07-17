<?php
    include 'db_connect.php';

    if(isset($_POST['update']))
    {
        $sno = $_POST['usno'];
        $title = $_POST['utitle'];
        $description = $_POST['udescription'];

        $s = "SELECT * FROM `computer_science_notes` WHERE sno=$sno";
        $res = mysqli_query($conn, $s);

        $numrows = mysqli_num_rows($res);
        if($numrows>0)
        {
            $sql = "UPDATE `computer_science_notes` SET `title` = '$title', `description` = '$description' WHERE `computer_science_notes`.`sno` = $sno";

            $result = mysqli_query($conn, $sql);

            if($result)
            {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Notes has been updated successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
        }
        else
        {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Sorry!</strong> Notes has not been updated, please enter correct serial number.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        header('location: index.php');
    }
?>