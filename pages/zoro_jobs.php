<!DOCTYPE html>
<?php
$servername="localhost";
$username="root";
$password="";
$databasename="ma_clothing";

$conn=new mysqli($servername,$username,$password,$databasename);
//test de connexion
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' href="../css/style_tables.css">
    <title>Admin</title>
</head>
<body>
    <header>
        <center class="message">Welcome Sir! Explore your data base!<br>Zoro Hoodies jobs</center>
    </header>
    <?php
    $sql="SELECT * FROM commande_zoro";
    $res=mysqli_query($conn,$sql);
    $conn->close();
    ?>
    <div class="contenue">
    <table border=1 class="tables">
        <thead>
            <td>
                id
            </td>
            <td>
                first name
            </td>
            <td>
                last name
            </td>
            <td>
                phone
            </td>
            <td>
               adress
            </td>
            <td>
                size
            </td>
            <td>
                color
            </td>
            <td>
                number
            </td>
        </thead>
        <?php
        foreach($res as $std){
        ?>
        <tr>
            <td><?php echo $std['id'];?></td>
            <td><?php echo $std['firstname'];?></td>
            <td><?php echo $std['lastname'];?></td>
            <td><?php echo $std['phone'];?></td>
            <td><?php echo $std['adress'];?></td>
            <td><?php echo $std['size'];?></td>
            <td><?php echo $std['color'];?></td>
            <td><?php echo $std['number'];?></td>
        </tr>
        <?php } ?>
    </table>
    <div>
        <form action="zoro_config.php" method="POST">
            <label>first name</label><br><br>
            <input type="text" name="f_to_delete" class="inputuser"><br><br>
            <label>last name</label><br><br>
            <input type="text" name="l_to_delete" class="inputuser"><br><br>
            <input type="submit" name="delete" value="Delete"><br><br>
        </form>
        
    </div>
    </div>
    <footer>
        <center class="logout">
            <a class="a1" href="index.html"></a>
        </center>
    </footer>
</body>
</html>