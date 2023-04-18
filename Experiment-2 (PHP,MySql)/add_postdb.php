<?php 
    session_start();
    $lk=0;
    $con=mysqli_connect("localhost","root","","myfb");
    $imtemp=$_FILES['photo']['tmp_name'];
    $imname=$_FILES['photo']['name'];
    $imtype=$_FILES['photo']['type'];
    $file_sep=explode('.',$imname);
    $file_ext=strtolower($file_sep[1]);
    $ext=array('jpeg','jpg','png','gif');

    if(in_array($file_ext,$ext)){
        $uploadimg='images/'.$imname;
        $res="SELECT * FROM users WHERE email='".$_SESSION['login_user']."'";
        $result=mysqli_query($con,$res);
        $result=mysqli_fetch_array($result);
        $result=$result['username'];
        $sql="INSERT INTO posts (content, image, likes, comments, user_name) VALUES('Check out my new photo!', '$uploadimg', 0, 0, '$result')";
        $res=mysqli_query($con,$sql);
    
        if(move_uploaded_file($imtemp, $uploadimg)) {
            echo "File uploaded successfully.";
        } 
    }
?>
