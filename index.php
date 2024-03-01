<?php
include('connection.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">BERNANTE JEROME</a>
  </div>
</nav>


<?php 
    if (isset($_GET['edit'])) {
        echo $_GET['edit'];
    }
?>



<div class="container">
    <div class="card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">UserID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = mysqli_fetch_array($select_all))
                    {
                ?>
                    <tr>
                        <td scope="row"><?php echo $row['userid']?></td>
                        <td><?php echo $row['username']?></td>
                        <td><?php echo $row['password']?></td>
                        <td>
                            <a href="edit.php?edit=<?php echo $row['userid']?>" class="btn btn-primary">EDIT</a>
                            <a href="index.php?delete=<?php echo $row['userid']?>" class="btn btn-danger">DEL</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>