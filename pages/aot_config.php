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
$f_to_delete=$_POST['f_to_delete'];
$l_to_delete=$_POST['l_to_delete'];
if (isset($_POST['delete'])){
    $req="DELETE FROM commande_aot WHERE  firstname='$f_to_delete' AND lastname='$l_to_delete'";
    if($conn->query($req)===true){
        header("location: AOT_jobs.php");
        echo'done';
    }
    else{
        echo'error';
    }
    
}
?>