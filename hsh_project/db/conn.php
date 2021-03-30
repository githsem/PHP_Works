<?php 

$conn = mysqli_connect('localhost','hsh_hasan','hsh_hasan_123','hsh_hasan');

if(!$conn){
    echo 'Connection Error: ' . mysql_connect_error();
}
?>