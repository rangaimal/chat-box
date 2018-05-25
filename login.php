<!-- <?php
    // session_start();
    // include 'dbh.php';
    // $uname='amith';
    // $pass='1234';
//  $uname=$_POST['uname'];
//   $pass=$_POST['pass'];

    // if(isset($_POST['login'])){

    //     $uname=$_POST['uname'];
    //     $pass=$_POST['pass'];

    // $sql="SELECT*FROM signup WHERE username='$uname' AND password='$pass'";
    // $result=$conn->query($sql);

//  print_r($uname);

    // $row=$result->fetch_assoc();

    //     // $_SESSION['name']=$row['uname'];
    //     header ("Location:home.php");
    
    // else{
    //     $_SESSION['name']=$_POST['uname'];


    //     header("Location:home.php");
    // }
    // }
?> -->

<?php

include 'dbh.php';




if (isset($_POST['uname']) && isset($_POST['pass'])) {
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    // echo "The email of the user is".$email;
    // echo "The passsword of the user is".$user_password;
    $query ="SELECT*FROM signup WHERE username='$uname' AND password='$pass'";
    $result = $conn->query($query);
    $rows = $result->num_rows;
    
    if ($rows > 0) {
      
        session_start();

        for ($i = 0; $i < $rows; $i++) {
            
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $result->data_seek($i);
            $_SESSION['uname'] = $row['username'];
            $_SESSION['pass'] = $row['password'];
            header("Location:home.php");
           
        }
        
    } 
}


// header("Location:home.php");



?>


