
<html>
  <?php
  session_start();
  ?>

  <head>
    <title>My Profile</title>
    <style>
nav {
    background-color: blue;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
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

img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
}
      
      table {
        border-collapse: collapse;
        width: 50%;
        margin: auto;
      }
      
      th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }
      
      th {
        background-color: #333;
        color: #fff;
      }
      
      tr:nth-child(even) {
        background-color: #f2f2f2;
      }
      body
{
    
    margin: 0;
    background-image: url(apr2.png);
    background-repeat: no-repeat;
    background-size: cover;

}
      tr:hover {
        background-color: #ddd;
      }
    </style>
  </head>
  <body>
  <nav>
    <ul>
        <li><a href="posts.php">Posts</a></li>
        <li><a href="addpost.php">Add Post</a></li>
        <li><a href="profile.php">Profile</a></li>
  
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>

  <?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myfb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the logged-in user's ID from the session or URL parameter

$sql="SELECT * FROM users WHERE email='".$_SESSION['login_user']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row['username'];
    $name = $row['name'];
    $email = $row['email'];
    $date_of_birth = $row['date_of_birth'];
}

// Close the database connection
$conn->close();
?>
    <h1>Welcome, <?php echo $username; ?></h1>
    <table>
        <tr>
            <td>Username:</td>
            <td><?php echo $username; ?></td>
        </tr>
        <tr>
            <td>Name:</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td>Date of Birth:</td>
            <td><?php echo $date_of_birth; ?></td>
        </tr>
    </table>
</body>
</html>

  </body>
</html>
