<?php 
//1:connexion a la base de données
$servername="localhost";
$username="root";
$password="";
$databasename="ma_clothing";

$conn=new mysqli($servername,$username,$password,$databasename);
//test de connexion
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
$user_name_to_delete=$_POST['user_name_to_delete'];
if (isset($_POST['delete'])){
    $req="DELETE FROM users WHERE  user_name='$user_name_to_delete'";
    if($conn->query($req)===true){
        header("location: users.php");
        echo'done';
    }
    else{
        echo'error';
    }
    
}
$user_name_to_modify=$_POST['user_name_to_modify'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$user_name=$_POST['user_name'];
$pass=$_POST['password'];
$value=$_POST['value'];
if(isset($_POST['modify'])){
    $req1="DELETE FROM users WHERE  user_name='$user_name_to_modify'";
    $req2="INSERT INTO users VALUES ('','$first_name','$last_name','$phone','$email','$user_name','$pass','$value')";
    if(($conn->query($req1)===true)&&($conn->query($req2)===true)){
        header("location: users.php");
        echo'done';
    }
}
?>