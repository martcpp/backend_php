<?php
function create_users(){
    
    if(isset($_POST['submit'])){
        $name = $_POST['username'];
        $password = $_POST['password'];

        global $connection;

        $query = "INSERT INTO users(username,password) " ;
        $query .= "VALUES ('$name', '$password')";
 
 
        $result = mysqli_query($connection, $query);

    if($result){
        echo("record created ");
}
    else{
        echo("not created". mysqli_query($connection));
}
    
}
    
}



function read_data() {
    
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }
    
    
        
while($row = mysqli_fetch_assoc($result)) {
        
        print_r($row);
    }  
}


function readID() {
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
       $id = $row['id'];
     echo ("<option value='$id'>$id</option>");
    
    }
}
    

function UpdateUsers() {
    if(isset($_POST['submit'])) {
    
global $connection;
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];
    
$query = "UPDATE users SET ";
$query .= "username = '$username', ";
$query .= "password = '$password' ";
$query .= "WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    if(!$result) {
    
     die("QUERY FAILED" . mysqli_error($connection));    
    }else {
    
    echo "Record Updated"; 
    
    }
        
    }
    

}

?>