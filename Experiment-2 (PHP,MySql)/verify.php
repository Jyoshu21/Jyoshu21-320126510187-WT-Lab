<?php
 session_start();
 $conn=mysqli_connect("localhost","root","","myfb");
    if(!$conn)
    {
        die("Connection failed: ".mysqli_connect_error());
    }
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
    $res=mysqli_query($conn,$sql);
    if($res->num_rows>0)
    {
        while($row = mysqli_fetch_array($res))
        {
            $username=$row['username'];
            $name=$row['name'];
            $_SESSION['username']=$username;
            $_SESSION['login_user']=$row['email'];
            $_SESSION['dob']=$row['date_of_birth'];
            header("Location: posts.php");
        } 
    }
    else
    {
        header("Location: loginpage.php");
    }
    
?>