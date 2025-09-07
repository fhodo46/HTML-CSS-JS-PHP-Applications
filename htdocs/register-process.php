<?php
$dbhost='localhost';
$dbuser='root';
$dbpassword='';
$dbname='users';
$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if(mysqli_connect_errno()){
    exit('MySQL connection failed'); }

if(!isset($_POST['name'], $_POST['surname'], $_POST['age'], $_POST['password'], $_POST['email'])){
    exit('One or more of those should be filled: name, surname, age, password, and/or email');
}
if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['age']) || empty($_POST['password']) || empty($_POST['email'])){
    exit('One or more of those should be filled: name, surname, age, password, and/or email');
}
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    exit('Email not valid');
}


if(preg_match('/^[a-zA-Z0-9]+$/', $_POST['name'])==0){
    exit('Name not valid');
}


if(preg_match('/^[a-zA-Z0-9]+$/', $_POST['surname'])==0){
    exit('Surname not valid');
}

if($_POST['age'] > 100){
    exit('Very old age');
}
if(strlen($_POST['password'])< 6 || strlen($_POST['password'])> 21){
    exit('The length of the password should be between 6 and 21 characters');
}


if($stmt = $con->prepare('SELECT id, name, surname, age, password FROM details WHERE email=?')){
    $stmt->bind_param('s', $_POST['email']);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows > 0){
        echo 'The account you are looking for exists, please try another.';
    }
    else{
        if($stmt = $con->prepare('INSERT INTO details (name, surname, age, password, email) VALUES (?,?,?,?,?)')){
            $stmt->bind_param('sssss', $_POST['name'], $_POST['surname'], $_POST['age'], $_POST['password'], $_POST['email']);
            $stmt->execute();  echo 'You have been successfully registered and can login now.';
        }





        else{
            echo 'Could not prepare the SQL statement';        }
        } 
    
    
    
$stmt->close();
       }
else{
        echo 'Could not prepare the SQL statement';        
    }
$con->close(); ?>
