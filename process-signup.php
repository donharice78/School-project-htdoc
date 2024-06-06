<?php
if (empty($_POST["name"])) {
    die("Name is required");
}

if(! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Email is required");

}

if(strlen($_POST["password"]) < 8){
    die("Password must be at least 8 characters");
}

if ( !preg_match("/[a-z]/i", $_POST["password"])){
die("Password must contain at least one letter");
}

if ( !preg_match("/[0-9]/i", $_POST["password"])){
    die("Password must contain at least one number");
    }

if ($_POST["password"] !== $_POST["password_confirmation"]){
    die("Password must match");
}

$password_hash= password_hash($_POST["password"], PASSWORD_DEFAULT);


$mysqli = require("database.php");



$sql = "INSERT INTO user (name, email, password) VALUES (?,?,?) ";


$stmt=$mysqli->stmt_init();
if(!$stmt->prepare($sql)) {
    die("SQL Error" .$mysqli->error);
} 

$stmt->bind_param("sss", 
$_POST["name"],
$_POST["email"],
$password_hash);


if($stmt->execute()) {
header("Location: signup-success.html");
exit;

}else{
    
    if ($stmt->errno ===1062) {
        die("Email Already Taken");
    } else{
       die($mysqli->error ."".$mysqli->errno); 
    }
    
}

// $query=$database->prepare($sql);

// $query->bindValue(":name", $_POST["name"], PDO::PARAM_STR);
// $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
// $query->bindValue(":password_hash", $_POST["password"], PDO::PARAM_STR);

// $result= $query->execute();
// if ( $result){
// echo"signup succesful";
// }else{
//     if($mysqli->errno === 1062){
//         die("email already taken");
//     } else{
//          die($mysqli->error ."". $mysqli->errno);
//     }
   

// }



// require_once ("database_close.php");





//print_r($_POST);
//var_dump($password_hash);