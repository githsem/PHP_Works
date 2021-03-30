<?php require "includes/header.php"; ?>
<?php 

$id = $_GET['id'];
$sql = "DELETE FROM books WHERE  ID = $id ";

if(mysqli_query($conn,$sql)){
    header("Location: books.php");
}
else{
    echo 'query error: '.mysql_error($conn);
}

?>
<?php require "includes/footer.php"; ?>