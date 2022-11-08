<?php
function connect($db, $sql)
{
    $host = '127.0.0.1';
    $user = 'root';
    $password = 'root';
    $name = 'root';
    $charset = 'utf8mb4';
    $conn = mysqli_connect($host, $user, $password, $name);
    if(mysqli_connect_errno($conn)) 
    { 
        die("Connect Fail: %s\n" . mysqli_connect_error()); 
    }
    mysqli_query($conn, "set names " . $charset);
    $query = mysqli_query($conn, $sql);
    if(!$query) 
    {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    mysqli_close($conn);
    return $query;
}