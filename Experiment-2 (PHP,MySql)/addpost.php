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

form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
body
{
    margin: 0;
    background-image: url(apr6.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"], textarea, input[type="file"] {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #3e8e41;
}

</style>
</head>
<?php
session_start();
?>
<nav>
    <ul>
        <li><a href="posts.php">Posts</a></li>
        <li><a href="addpost.php">Add Post</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>

<form action="add_postdb.php" method="post" enctype="multipart/form-data">
    <tr><td>select photo:</td><td><input type="file" name="photo"></td></tr>
          <tr><td>click here:</td><td><input type="submit" value="Upload"></td></tr></form>
        </form>
        </table>
    </body>
</html>
