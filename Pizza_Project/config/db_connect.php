<?php 
//connect to database
$conn = mysqli_connect('localhost','hasan','hasan123','pizzadb');

//check connection
if(!$conn){
    echo 'Connection Error : '. mysqli_connect_error();
} 

?>