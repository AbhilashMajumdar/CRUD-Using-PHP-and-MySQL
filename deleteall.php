<?php
    include 'db_connect.php';

    if(isset($_POST['done']))
    {
        $sql = "DELETE FROM `computer_science_notes`";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> All Notes has been deleted successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            header('location: index.php');
        }
    }
?>