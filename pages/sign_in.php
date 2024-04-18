<?php
$servername="localhost";
$username="root";
$password="";
$databasename="ma_clothing";

$conn=new mysqli($servername,$username,$password,$databasename);

if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
$user_name=$pwd='';
$user_name=$_POST['user_name'];
$pwd=$_POST['pass_word'];
if(isset($_POST['envoyer'])){
    if ((!empty($user_name))&&(!empty($pwd))){
        $query = "SELECT * FROM users WHERE user_name='$user_name' and password='$pwd'";
        $result = mysqli_query($conn,$query) or die(mysql_error());
        $rows=mysqli_num_rows($result);
        if($rows==1){
            foreach($result as $std){
                if($std['value']==='admin'){
                    header("Location: admin.html");
                }
                else{
                    header("Location: explore.html");
                }
            }
        }
        else{
            header("Location: sign-in.html");
        }
    }
    else{
        echo'123456';
    }
}

?>