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
$lastname=$firstname=$phone=$adress=$number=$list2=$list1="";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phone=$_POST['phone'];
$adress=$_POST['adress'];
if($_POST['choix1']){
    foreach($_POST['choix1'] as $choix1){
        $list1.="$choix1,";
    }
}
if($_POST['choix2']){
    foreach($_POST['choix2'] as $choix2){
        $list2.="$choix2,";
    }
}
$number=$_POST['number'];
//3: execution de la requete
if(isset($_POST['envoyer'])){
    if(!empty($lastname)&&(!empty($firstname))){
        $req="INSERT INTO commande_naruto VALUES ('','$firstname','$lastname','$phone','$adress','$list1','$list2','$number')";
    }
    if($conn->query($req)===true){
        echo"nouvel enregistrement crée avec succée";
        header('location: explore.html');
    }
    else{
        echo"erreur";
    }
}


?>

