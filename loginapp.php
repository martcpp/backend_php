<?php

if (isset($_POST['submit']))
{
 echo("we are connected"."<br/>");
    $name = $_POST['username'];
    $password = $_POST['password'];
    $connect = mysqli_connect('localhost',  'root', '', 'loginapp');
    if ($connect)
    {
        echo("we are connect");
    }
    else{
        die("not connected");
    }

    $query = "INSERT INTO users(username,password) ";
    $query .= "VALUES ('$name', '$password')";
    $result = mysqli_query($connect,$query);
if($result)
{
    echo("<br/>"."record has been created");
}
else{
    die("not working". mysqli_error);
}
    
    

}


?>