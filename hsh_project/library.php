<?php require "includes/header.php"; ?>

<h1 class="display-4 text-center">Bibliothek</h1><br>

<table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Publishing Year</th>
            <th>Publisher ID</th>
            <th>Publisher Title</th>
        </tr>
<?php 
$sql = "SELECT b.ID,b.title AS btitle, b.description, b.publishing_year, b.publisher_id, p.title As ptitle  FROM books  b INNER JOIN publisher p ON b.publisher_id = p.ID ORDER BY id";
$result = mysqli_query($conn, $sql);

$books = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);

foreach($books as $row){
    
    echo "<tr>";
    echo "<td>".$row["ID"]."</td>";
    echo "<td>".$row["btitle"]."</td>";
    echo "<td>".$row["description"]."</td>";
    echo "<td>".$row["publishing_year"]."</td>";
    echo "<td>".$row["publisher_id"]."</td>";
    echo "<td>".$row["ptitle"]."</td>";
    echo"</tr>";
 
} 

?>        


<?php require "includes/footer.php"; ?>