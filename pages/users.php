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
        <center class="message">Welcome Sir! Explore your data base!<br>Users</center>
    </header>
    <?php
    $sql="SELECT * FROM users";
    $res=mysqli_query($conn,$sql);
    $conn->close();
    ?>
    <div class="contenue">
    <table border=1 class="tables">
        <thead>
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
                email
            </td>
            <td>
                user name
            </td>
            <td>
                password
            </td>
            <td>
                value
            </td>
        </thead>
        <?php
        foreach($res as $std){
        ?>
        <tr>
            <td><?php echo $std['first_name'];?></td>
            <td><?php echo $std['last_name'];?></td>
            <td><?php echo $std['phone'];?></td>
            <td><?php echo $std['email'];?></td>
            <td><?php echo $std['user_name'];?></td>
            <td><?php echo $std['password'];?></td>
            <td><?php echo $std['value'];?></td>
        </tr>
        <?php } ?>
    </table>
    <div>
        <form action="users_config.php" method="POST">
            <label>User Name To Delete</label><br><br>
            <input type="text" name="user_name_to_delete" class="inputuser"><br><br>
            <input type="submit" name="delete" value="Delete"><br><br>
            <label>User Name To Modify </label><br><br>
            <input type="text" name="user_name_to_modify" class="inputuser"><br><br>
            <table border=1 class="tables">
                <thead>
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
                        email
                    </td>
                    <td>
                        user name
                    </td>
                    <td>
                        password
                    </td>
                    <td>
                        value
                    </td>
                </thead>
                <tr>
                    <td><input type="text" name="first_name" class="in" ></td>
                    <td><input type="text" name="last_name" class="in" ></td>
                    <td><input type="number" name="phone" class="in" ></td>
                    <td><input type="text" name="email" class="in"></td>
                    <td><input type="text" name="user_name" class="in"></td>
                    <td><input type="text" name="password" class="in"></td>
                    <td><input type="text" name="value" class="in"></td>
                </tr>
            </table>
            <input type="submit" name="modify" value="Modify"><br><br>
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