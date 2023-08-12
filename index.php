<?php
session_start();

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

        <?php include 'message.php'; ?>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Add
                            <a href="signup.php" class="btn btn-primary float-end">SignUp</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                             <div class="form-group mb-3">
                                <label for="name">Student Name</label>
                                <input type="text" name="name" id="name" class="form-control" />
                             </div>

                             <div class="form-group mb-3">
                                <label for="email">Student Email</label>
                                <input type="email" name="email" id="email" class="form-control" />
                             </div>

                             <div class="form-group mb-3">
                                <label for="password">Student Password</label>
                                <input type="text" name="password" id="password" class="form-control" />
                             </div>

                             <div class="form-group mb-3">
                                <label for="course">Student Course</label>
                                <input type="text" name="course" id="course" class="form-control" />
                             </div>

                             <div class="mb-3">
                                <button type="submit" name="create" class="btn btn-primary">Save Student</button>
                             </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<!-- CREATE TABLE students(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30),
    email VARCHAR(40) NOT NULL UNIQUE,
    password VARCHAR(20) NOT NULL,
    course VARCHAR(10)
); -->