<?php
    include 'db_connect.php';

    if(isset($_POST['delete']))
    {
        $dsno = $_POST['dsno'];

        $s = "SELECT * FROM `computer_science_notes` WHERE sno=$dsno";
        $res = mysqli_query($conn, $s);

        $numrows = mysqli_num_rows($res);

        if($numrows > 0)
        {
            $sql = "DELETE FROM `computer_science_notes` WHERE `computer_science_notes`.`sno` = $dsno";
            $result = mysqli_query($conn, $sql);

            if($result)
            {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Notes has been deleted successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
        }
        else
        {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Sorry!</strong> Notes has not been deleted, please enter correct serial number.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        header('location: index.php');
    }
?>