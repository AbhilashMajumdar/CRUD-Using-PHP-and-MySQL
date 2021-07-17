<?php
    include 'db_connect.php';

    if(isset($_POST['submit']))
    {
        $sno = $_POST["sno"];
        $title = $_POST["title"];
        $description = $_POST["description"];
        
        $sql = "INSERT INTO `computer_science_notes` (`sno`, `title`, `description`, `time`) VALUES ($sno, '$title', '$description', current_timestamp())";

        $result = mysqli_query($conn, $sql);

        if($result)
        {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Notes has been inserted successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            header('location: index.php');
        }
    }
?>