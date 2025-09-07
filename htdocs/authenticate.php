<?php
session_start();
$dbhost= 'localhost';
$dbuser= 'root';
$dbpassword='';
$dbname='users';
$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if(mysqli_connect_errno()){
    exit('MySQL connection failed');
}
if(!isset($_POST['password'], $_POST['email'])){
    exit('The email and/or the password need to be filled.');
}
if($stmt = $con->prepare('SELECT id, password FROM details WHERE email = ?')){
    $stmt->bind_param('s', $_POST['email']);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows > 0){
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        if($password){ 
            session_regenerate_id();
            $_SESSION['loggedinaccount'] = TRUE;
            $_SESSION['accountid'] = $id;
            header('location: profile.php');
            exit;
        }
        else{ 
            echo 'Incorrect details';
        }
    }
    else{ 
        echo 'Incorrect details';
    }
    $stmt->close();
}
?>
