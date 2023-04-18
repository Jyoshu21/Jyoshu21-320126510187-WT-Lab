<?php
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
    $res="SELECT user_name FROM posts WHERE image='$image_id'";
    $sql = "UPDATE posts SET likes = likes + 1 WHERE image = '$image_id' and user_name!='$res'";
    mysqli_query($conn, $sql);

    // Close the database connection
    mysqli_close($conn);
}


// Display the images and like buttons
$conn=mysqli_connect('localhost',"root","","myfb");
$sql = "SELECT * FROM posts";
$files=glob("img/.");
$result = mysqli_query($conn, $sql);
if (mysqli_connect_error()){
    die('connection failed');
}
mysqli_close($conn);
?>

<html>
<head>
    <style>
        div {
            color: darkblue;
            font-size: 30px;
            align-content: center;
            text-align: center;
                }
        img {
            width: 300px;
            height: 300px;
            border-radius: 10px;
            display: cover;
        }
        body
{
    margin: 0;
}
        body{
            background:url("apr6.jpg");
            background-size:cover;
                }
                h2{
                    margin-bottom: -5px;
                }
                nav {
    background-color: blue;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
}
#like {
    background-color: blue;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    margin-left: 10px;
}
#like:hover {
    background-color: red;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    margin-left: auto;
}

li {
    margin-right: 20px;
}

a {
    color: #fff;
    text-decoration: none;
}

#post {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 10px;
    margin-left: 500px;
    margin-right: 500px;
    padding: 10px;
    background-color: white;
    border-radius: 5%;
    box-shadow: 5px 5px 5px 5px grey;
}
    </style>
</head>
<body >
<?php
session_start()
?>
<nav>
    <ul>
        <li><a href="posts.php">Posts</a></li>
        <li><a href="addpost.php">Add Post</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>
 <div>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div id="post">
            <h2><?php echo $row['user_name']; ?></h2>
                    <img src="<?php echo $row['image']; ?>" alt="User Image">
                    <form action="likes.php" method="post">
                        
                        <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                        <button type="submit" id="like">&#10084 <?php echo $row['likes']; ?></button>
                    </form>
                </div>
        <?php } ?>
    </body>
</html>