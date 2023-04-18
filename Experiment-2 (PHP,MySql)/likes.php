<?php
session_start();
// Check if the form has been submitted and the image ID has been sent via POST
if (isset($_POST['image'])) {
    // Retrieve the image ID from the POST request
    $image_id = $_POST['image'];

    // Create a database connection
    $conn = mysqli_connect('localhost', 'root', '', 'myfb');
    if (mysqli_connect_error()) {
        die('connection failed');
    }

    // Update the number of likes for the corresponding image in the database
    $res="SELECT * FROM users WHERE email='".$_SESSION['login_user']."'";
        $result=mysqli_query($conn,$res);
        $result=mysqli_fetch_array($result);
        $result=$result['username'];
    $sql = "UPDATE posts SET likes = likes + 1 WHERE image = '$image_id' and user_name!='$result'";
    mysqli_query($conn, $sql);

    // Close the database connection
    mysqli_close($conn);
    
}
header("location: posts.php");
?>
