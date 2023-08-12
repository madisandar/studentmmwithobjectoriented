<?php

ini_set('display_errors',1);
session_start();
require_once('dbconnect.php');


if(isset($_POST['create'])){

   if(empty($_POST['name'] & $_POST['email'] & $_POST['password'] & $_POST['course'])){
       header("Location:error.php");
       exit();
   }else{
    $name = textfilter($_POST['name']);
    $email = textfilter($_POST['email']);
    $password = MD5(textfilter($_POST['password']));
    $course = textfilter($_POST['course']);
 
    // echo $name."<br/>";
    // echo $email."<br/>";
    // echo $password."<br/>";
    // echo $course."<br/>";

    // echo "Connect Successfully <br/>";
   $stmt = $conn->prepare("INSERT INTO students(name,email,password,course) VALUES(?,?,?,?)");
   $stmt->bind_param('ssss',$name,$email,$password,$course);

   $name = $name;
   $email = $email;
   $password = $password;
   $course = $course;



    if($stmt->execute()){

     $_SESSION['email'] = $email;
     $_SESSION['password'] = $password;


        $_SESSION['message'] = "Student Created Successfully";
        header("Location:userlist.php");
        exit;
    }
       
   }
   
}




function textfilter($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}


if(isset($_GET['id'])){
   $id = $_GET['id'];
   $sql = "DELETE FROM students WHERE id='$id'";
   $conn->query($sql);

   $_SESSION['message'] = "Student Deleted Successfully";
   header("Location:userlist.php");
   exit;

}


if(isset($_POST['update'])){

    $id = $_POST['id'];
    $name = textfilter($_POST['name']);
    $email = textfilter($_POST['email']);
    $course = textfilter($_POST['course']);
   
    $stmt = $conn->prepare("UPDATE students SET name='$name',email='$email',course='$course' WHERE id='$id'");

    if($stmt->execute()){
        header("Location:userlist.php");

    }

    $_SESSION['message'] = "Student Updated Successfully";
    header("Location:userlist.php");
    exit;

    // echo "Updated Successfully ";
    
    $stmt->close();
    $conn->close();

   
}



?>