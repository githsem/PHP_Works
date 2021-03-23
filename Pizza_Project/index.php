<?php
    //connect to database
    $conn = mysqli_connect('localhost','hasan','hasan123','pizzadb');

    if(!$conn){
        echo 'Connection Error : '. mysqli_connect_error();
    } 

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>
<?php include('templates/footer.php'); ?>
    

</html>