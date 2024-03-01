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
<?php 
    if (isset($_GET['edit'])) {
        $userid = $_GET['edit'];
        $username = $_GET['username'];
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $userid = $_POST['userid'];
        $username = $_POST['username'];
        $sql = "UPDATE tbl_user SET username = '$username' WHERE userid = $userid";
        mysqli_query($conn, $sql);
        header('Location: index.php');
    }
?>
<body>
    <div class="container">
        <header class="d-flex align-items-center">
            <h1>EDIT</h1>
            <div class="ms-auto">
                <a href="index.php" class="btn btn-secondary">HOME</a>
            </div>
        </header>
        <main>
            <form method="POST">
                <input type="hidden" name="userid" value="<?php echo $userid?>">
                <div class="mb-3">
                    <label for="" class="form-label">Username</label>
                    <input name="username" type="text" class="form-control" id="" value="<?php echo $username?>">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </main>
    </div>
</body>
</html>
