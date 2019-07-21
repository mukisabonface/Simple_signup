<?php 
session_start();
//inializing variables
$username="";
$email="";
$errors=array();
//connect to db
$db=mysqli_connect('localhost', 'root','registration');
//registration is the name of the database connecting to
//register users
if(isset($_POST['reg_users']))
{
//receive all values from the form
$username=mysqli_real_escape_string($db,$_POST['username']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$password_1=mysqli_real_escape_string($db, $_POST['password_1']);
$password_2=mysqli_real_escape_string($db,$_POST['pasword_2']);
//form validation
if(empty($username)){array_push($errors,"Username is required");}
if(empty($email)){array_push($errors,"Email is required");}
if(empty($password)){array_push($errors,"Password is required");}
if($password_1!=$password_2){array_push($errors,"The two passwords do not match");}
//first check the db to make sure that a user does not exist in the db

$result=mysqli_query($db,$user_check_query);
$user=mysqli_fetch_assoc($result);
if ($user){
    //if user exists
    if($user['username']==$username)
    {array_push($errors,"username already exists");}
    if($user['email']==$email){array_push($errors,"Email already exists");}
}
//register users
if (count($errors)==0){
    $password=md5($password_1);
    $query="INSERT INTO users (username,email,password)values('$username','$email','$password')";
    mysqli_query($db,$query);
    $_SESSION['username']=$username;
    $_SESSION['success']="You are now logged in";
    header('location:index.php');}}
?>




