<!-- html document  -->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Crud Project</title>

  <!-- css atached -->
  <link rel="stylesheet" href="style.css">

  <!-- datatable css  -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

</head>

<body>
  <!-- Delete Modal -->
  <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="deletemodalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deletemodalLabel">Delete Note</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="delete.php" method="POST">
          <div class="modal-body">
            <div class="mb-3">
              <label for="dsno" class="form-label">Enter the serial number of the note which you want to delete : </label>
              <input type="number" class="form-control" id="dsno" name="dsno">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" name="delete">Delete</button>
          </div>
        </form>
      </div>
    </div>
  </div>



  <!-- Update Modal -->
  <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateModalLabel">Update Note</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="update.php" method="POST">
          <div class="modal-body">
            <div class="mb-3">
              <label for="usno" class="form-label">Enter the serial number of the note which you want to update : </label>
              <input type="number" class="form-control" id="usno" name="usno">
            </div>
            <div class="mb-3">
              <label for="utitle" class="form-label">Enter Note title : </label>
              <input type="title" class="form-control" id="utitle" name="utitle">
            </div>

            <div class="mb-3">
              <label for="udescription" class="form-label">Enter Note Description : </label>
              <textarea class="form-control" id="udescription" name="udescription" rows="3"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>

    <!-- delete all modal  -->
  <div class="modal fade" id="deleteAllModal" tabindex="-1" aria-labelledby="deleteAllModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteAllModalLabel">Delete All Notes</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="deleteall.php" method="POST">
          <div class="modal-body">
              <p>Are you sure, want to delete all records?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" name="done">Delete All</button>
          </div>
        </form>
      </div>
    </div>
  </div>
 
  <!-- col-md-8  -->

  <!-- <div class="container my-4 bgclass"> -->
  <div class="container my-4 col-lg-12 pb-5 bgclass pt-1 col-12" id="topbar">
    <!-- heading  -->
    <div id="heading" class="mt-5">
      <h2><ul id="under">Computer Science Notes :-</ul></h2>  ( Created by Abhilash Majumdar )
    </div>
    <div id="formbar">
      <!-- form  -->
      <form action="insert.php" method="POST">
        <div class="mb-3">
          <label for="sno" class="form-label">Note Serial Number</label>
          <input type="number" class="form-control" id="sno" name="sno">
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Note title</label>
          <input type="title" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Note Description</label>
          <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mx-4" name="submit">Add Note</button>
        <button type="button" class="btn btn-danger mx-4" data-bs-toggle="modal"
          data-bs-target="#deletemodal">Delete Note</button>
        <button type="button" class="btn btn-warning mx-4 text-white yelbtn" data-bs-toggle="modal"
          data-bs-target="#updateModal">Update Note</button>
        <button type="button" class="btn btn-success mx-4" data-bs-toggle="modal"  data-bs-target="#deleteAllModal">Delete All Notes</button>
        <!-- <button type="submit" class="btn btn-dark mx-4 text-white" name="display"><a href="read.php" style="text-decoration: none;">Display Notes</a></button> -->
      </form>
    </div>
  </div>
  <div class="container" id="displaycolor">
    <div class="col-lg-12">
      <br><br>
      <h1 class="text-dark text-center"> Display Table Data </h1>
      <br>
      <table id="myTable" class="table table-striped table-hover table-bordered">

        <tr class="bg-dark text-white text-center">

          <th>Serial Number</th>
          <th>Title</th>
          <th>Description</th>
          <th>Date & Time</th>

        </tr>

        <?php

 include 'db_connect.php'; 
 $q = "SELECT * FROM `computer_science_notes`";

 $query = mysqli_query($conn, $q);

 while($res = mysqli_fetch_array($query)){
 ?>
        <tr class="text-center">
          <td>
            <?php echo $res['sno'];  ?>
          </td>
          <td>
            <?php echo $res['title'];  ?>
          </td>
          <td>
            <?php echo $res['description'];  ?>
          </td>
          <td>
            <?php echo $res['time'];  ?>
          </td>

        </tr>

        <?php 
  }
  ?>

      </table>

    </div>
</div>
    <br>
  

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>