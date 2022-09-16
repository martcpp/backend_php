<?php

$connection = mysqli_connect('localhost','root','','loginform');
    if(!$connection){
        die("we are connected".mysqli_error($connection));
    }