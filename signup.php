<?php


?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student Management</title>
</head>
<body>
    <div class="container">

      <div class="row mt-5">
        <form action="loginfunction.php" method="POST">
            <div class="form-control mb-3">
                  <label for="email" class="">Email</label>
                  <input type="email" class="form-control" name="email" id="email"  >
            </div>
            <div class="form-control mb-3">
                    <label for="password" class="">Password</label>
                    <input type="password" class="form-control" name="password" id="password" >
            </div>
            <div class="form-control mb-3">
                   <button type="submit" name="confirm" class="btn btn-primary mb-3">Confirm</button>
            </div>
        </form>
      </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>