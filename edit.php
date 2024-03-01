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
            <form>
                <div class="mb-3">
                    <label for="" class="form-label">Username</label>
                    <input type="email" class="form-control" id="" value="<?php echo $username?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </main>
    </div>
</body>
</html>
