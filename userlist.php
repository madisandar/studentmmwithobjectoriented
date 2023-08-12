<?php
require('dbconnect.php');
session_start();

?>

<!DOCTYPE html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student Management</title>
</head>
<body>
    <div class="container">

    <?php include('message.php'); ?>

     <div class="row mt-5">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Details
                      
                           <a href="index.php" class="btn btn-primary px-4 py-2 float-end">Add Student</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-border table-striped">
                             <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Course</th>
                                    <th>Action</th>
                                </tr>
                             </thead>
                             <tbody>
                                <?php
                                   $sql = "SELECT id,name,email,password,course FROM students";
                                   $result = $conn->query($sql);

                                   if($result->num_rows > 0){
                                     while($row = $result->fetch_assoc()){
                                        echo "<tr>
                                          <td>{$row['id']}</td>
                                          <td>{$row['name']}</td>
                                          <td>{$row['email']}</td>
                                          <td>{$row['password']}</td>
                                          <td>{$row['course']}</td>
                                          <td>
                                             <a href='student_info.php?id={$row['id']}' class='btn btn-info btn-sm'>Info</a>
                                             <a href='student_edit.php?id={$row['id']}' class='btn btn-success btn-sm'>Edit</a>
                                             <a href='code.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
                                          </td>
                                        </tr>";
                                        
                                     }
                                   }

                                ?>
                             </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


