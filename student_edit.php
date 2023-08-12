<?php

require('dbconnect.php');

session_start();

$student='';


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE id = '$id'";
    $result = $conn->query($sql);
    
    // echo "$result->num_rows";
    
     if($result->num_rows > 0){
         while($row = $result->fetch_assoc()){
             $student = $row;
         }
        }
    //   print_r($student);

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
                        <h4>Student Update
                            <a href="userlist.php" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                             <div class="form-group mb-3">
                                <label for="id">Student ID</label>
                                <input type="text" name="id" class="form-control" readonly value="<?= $student['id']; ?>" />
                             </div>

                             <div class="form-group mb-3">
                                <label for="name">Student Name</label>
                                <input type="text" name="name" id="name" value="<?= $student['name']; ?>" class="form-control" />
                             </div>

                             <div class="form-group mb-3">
                                <label for="email">Student Email</label>
                                <input type="text" name="email" id="email" value="<?= $student['email']; ?>" class="form-control" />
                             </div>

                             <div class="form-group mb-3">
                                <label for="course">Student Course</label>
                                <input type="text" name="course" id="course" value="<?= $student['course']; ?>" class="form-control" />
                             </div>

                             <div class="mb-3">
                                <button type="submit" name="update" class="btn btn-primary">Update Student</button>
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