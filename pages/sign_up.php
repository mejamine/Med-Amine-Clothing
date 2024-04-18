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
else{
    echo'succées';
}
//2:declaration et recuperation des variable
$lastname=$firstname=$email=$user_name=$pwd="";
$phone=0;
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];

//3: execution de la requete
if(isset($_POST['envoyer'])){
    if(!empty($lastname)&&(!empty($firstname))){
        $req="INSERT INTO users VALUES ('','$firstname','$lastname','$phone','$email','$uname','$pwd','client')";
    }
    if($conn->query($req)===true){
        echo"nouvel enregistrement crée avec succée";
        header('location: sign-in.html');
    }
    else{
        echo"erreur";
    }
}


?>

