<?php
require_once 'dbconnect.php';
require_once 'message.php';
session_start();

if(isset($_POST['confirm'])){
    if(isset($_POST['email']) && isset($_POST['password'])){
        // echo "hay";
        $email = textfilter($_POST['email']);
        $password = MD5(textfilter($_POST['password']));

        $sql = "SELECT * FROM students WHERE email='$email'";

        $result = $conn->query($sql);
        
        if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
             header("Location:userlist.php");
             $_SESSION['message'] = "You are successfully login";
          }
     
      }else{
         header("Location:index.php");
         $_SESSION['message'] = "Please first crate account";
      }
     

       $conn->close();

    }
}

function textfilter($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}
?>