<?php 

    $hostname = 'localhost';
    $USERNAME = 'root' ;
    $PASSWORD = '';
    $database = 'bibiju';

    $con = mysqli_connect($hostname,$USERNAME,$PASSWORD,$database);

    if(!$con){
        die(mysqli_error($con));
    }

?>