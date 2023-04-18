<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <style>
        body {
            background-image: url("apr1.jpg");
            
    background-repeat: no-repeat;
    background-size: cover;
        }
        .left {
            float: left;
            width: 50%;
            padding: 20px;
            background-color: lightcoral;

        }
        .right {
            float: right;
            width: 50%;
            padding: 20px;
        }
        .container {
            padding: 20px;
            border-radius: 10px;
            margin: auto;
            display: grid;
            grid-template-columns: 50% 50%;
            grid-gap: 10px;
            
        }
        form {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input[type="text"], input[type="email"], input[type="password"], textarea {
  display: block;
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type="submit"] {
  background-color: palevioletred;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: palevioletred;
}

input[type="file"] {
  margin-bottom: 20px;
}
#like {
    background-color: hotpink;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    margin-left: 10px;
}
body
{
    margin: 0;
}
#like:hover {
    background-color: red;
}
#b {
    display: none;
    border: none;
    border-color: transparent;
}

        #postpic {
            width: 300px;
            height: 300px;
            border-radius: 10px;
            display: cover;
        }
        h1{
            text-align: center;
        }
        #im {
            text-align: center;
        }
        a{
            color: blue;
            text-decoration: none;

        }
        #f1{
            display: flex;
            align-items: center;
            margin-left: auto;
            border: none;
        }
        #f2{
            background-color: lightgoldenrodyellow;
            
        }
    </style>
</head>
<body>
    <?php
    // Connect to MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myfb";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get most liked post from database
    $sql = "SELECT * FROM posts ORDER BY likes DESC LIMIT 3";
    $result = $conn->query($sql);
        ?>
    <div class="container">
    <div class="left">
        <h1>Most Likes</h1>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            
        <div id="im"><h2><?php echo $row['user_name']; ?></h2> <img  id="postpic" src="<?php echo $row['image']; ?>" alt="User Image"></div>
                    <form action="" method="post" id="f1">
                        <input type="hidden"  id="b" name="photo" value="<?php echo $row['image']; ?>">
                        <button type="submit" id="like"> &#10084  <?php echo $row['likes']; ?></button>
                    </form>
        <?php } ?>
    </table>
    </div>
<?php

    

    $conn->close();
    ?>
    <div class="right">
        <h1>Login</h1>
        <form action="verify.php" method="post" id="f2">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" placeholder="username" required><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" placeholder="password" required><br>

            <br>
            <a href="signup.php">Create an account?</a>
            <input type="submit" value="Login">
        </form>
    </div>
    </div>
</body>
</html>
