<?php require "includes/header.php"; ?>
<h1 class="display-4 text-center">Bearbeiten</h1>

<?php 
    $errors = array('buchtitel'=>'','kurzbeschreibung'=>'','year'=>'');
    if(isset($_GET['submit'])){
        $buchtitel =$_GET['buchtitel'];
        $kurzbeschreibung = $_GET['kurzbeschreibung'];
        $year = $_GET['year'];
        $pubid =$_GET['verlag'];
        $id=$_GET['id'];

        if(!filter_var($year, FILTER_VALIDATE_INT)){
          $errors['year']= "Date Error";
        }

        if(array_filter($errors)){
          //echo "error";
        }
        else{
          $sql = "UPDATE books SET title = '$buchtitel', description = '$kurzbeschreibung', publishing_year = '$year', publisher_id='$pubid' 
          WHERE ID = $id";
  
          if(mysqli_query($conn, $sql)){
            header('Location: books.php');
          }
          else{
            echo 'query error: '. mysqli_error($conn);
          }
        }

    }    

?>

<?php 
    $id=$_GET['id'];
    $sql = "SELECT * FROM books WHERE ID = $id ";
    $result = mysqli_query($conn, $sql);

    $books = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
    mysqli_close($conn);
    foreach($books as $row){
      $buchtitel =$row["title"];
      $kurzbeschreibung = $row["description"];
      $year = $row["publishing_year"];
    }
    
?>
<form action="edit.php" method="GET">
  <div class="mb-3">
    <label for="buchtitel" class="form-label">Buchtitel</label>
    <input required maxlength="50" placeholder="max. 50 character" type="text" class="form-control" id="buchtitel" name="buchtitel" value="<?php echo $buchtitel?>">
  </div>
  <div class="mb-3">
    <label for="kurzbeschreibung" class="form-label">Kurzbeschreibung</label>
    <textarea required maxlength="150" placeholder="max. 150 character" class="form-control" name="kurzbeschreibung" id="kurzbeschreibung" cols="15" rows="3" ><?php echo $kurzbeschreibung?></textarea>
  </div>
  <div class="mb-3">
    <label for="year" class="form-label">Erscheinungsjahr</label>
    <input required  type="text" class="form-control" id="year" name="year" value="<?php echo $year?>">
    <div class="text-danger"><?php echo $errors['year']; ?></div>
  </div>
  <input type="hidden" name="id" value="<?php echo $id=$_GET['id']; ?>">
  <label for="year" class="form-label">Verlag auswählen</label>
  <select required name="verlag" class="form-select" aria-label="Default select example">
    <option value="1">Verlag1</option>
    <option value="2">Verlag2</option>
    <option value="3">Verlag3</option>
    <option value="4">Verlag4</option>
    <option value="5">Verlag5</option>
  </select>

<br>
  <div class="d-grid gap-2">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

<?php require "includes/footer.php"; ?>