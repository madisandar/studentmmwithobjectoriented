<?php

require_once 'dbconnect.php';
session_start();


if(isset($_GET['id'])){
    $student_id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE id='$student_id'";
    $result = $conn->query($sql);
    // echo $result->num_rows;

    $id = '';
    $name = '';
    $email = '';
    $course = '';

    while($row = $result->fetch_assoc()){
         $id = $row['id'];
         $name = $row['name'];
         $email = $row['email'];
         $course = $row['course'];

    }

        $_SESSION['message'] = "Student Read Only";
}

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
                        <h4>Student Details
                            <a href="userlist.php" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                             <div class="form-group mb-3">
                                <label for="name">Student ID</label>
                                <input type="text" class="form-control" value="<?= $id; ?>" readonly />
                             </div>

                             <div class="form-group mb-3">
                                <label for="name">Student Name</label>
                                <input type="text" class="form-control" value="<?= $name; ?>" readonly />
                             </div>

                             <div class="form-group mb-3">
                                <label for="email">Student Email</label>
                                <input type="text" class="form-control" value="<?= $email; ?>" readonly />
                             </div>

                             <div class="form-group mb-3">
                                <label for="password">Student Course</label>
                                <input type="text" class="form-control" value="<?= $course; ?>" readonly />
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