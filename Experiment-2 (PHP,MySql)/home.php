<?php
session_start();
if(!isset($_SESSION['login_user']))
{
    header("Location: login.php");
}
?>
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
</style>
<nav>
    <ul>
        <li><a href="posts.php">Posts</a></li>
        <li><a href="addpost.php">Add Post</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>
