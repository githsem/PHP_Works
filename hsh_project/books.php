<?php require "includes/header.php"; ?>
<h1 class="display-4 text-center">Bücher</h1><br>

<?php 
    $sql = "SELECT b.ID,b.title AS btitle, b.description, b.publishing_year, b.publisher_id, p.title As ptitle  FROM books  b INNER JOIN publisher p ON b.publisher_id = p.ID ORDER BY id";
    $result = mysqli_query($conn, $sql);

    $books = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
    mysqli_close($conn);
?>
<?php if($books) { foreach($books as $row){ ?>
    
    <div class="card" style="width: 15rem; float:left;">
        <img src="img/book.png" class="card-img-top" alt="book">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row["btitle"] ?></h5>
            <p class="card-text"><?php echo $row["description"] ?></p>
            <a href="edit.php?id=<?php echo $row["ID"] ?>" class="btn btn-outline-primary">Bearbeten</a>
            
            <a href="delete.php?id=<?php  echo $row["ID"] ?>" class="btn btn-outline-danger">Loschen  </a>  
        </div>
    </div>
    

    
<?php }} ?>

<?php require "includes/footer.php"; ?>