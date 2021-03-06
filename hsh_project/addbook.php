<?php require "includes/header.php"; ?>

<?php 
    $errors = array('buchtitel'=>'','kurzbeschreibung'=>'','year'=>'');

    if(isset($_GET['submit'])){
        $buchtitel =$_GET['buchtitel'];
        $kurzbeschreibung = $_GET['kurzbeschreibung'];
        $year = $_GET['year'];
        $pubid =$_GET['verlag'];
        
        if(!filter_var($year, FILTER_VALIDATE_INT)){
          $errors['year']= "Date Error";
        }

        
        if(array_filter($errors)){
          //echo "error";
        }
        else{
          $sql = "INSERT INTO books(title, description, publishing_year, publisher_id) VALUES('$buchtitel','$kurzbeschreibung','$year','$pubid')";
          if(mysqli_query($conn, $sql)){
            header('Location: books.php');
          }
          else{
            echo 'query error: '. mysqli_error($conn);
          }
        }
        
    }

?>

<form action="addbook.php" method="GET">
  <div class="mb-3">
    <label for="buchtitel" class="form-label">Buchtitel</label>
    <input required maxlength="50" placeholder="max. 50 character" type="text" class="form-control" id="buchtitel" name="buchtitel">
  </div>
  <div class="mb-3">
    <label for="kurzbeschreibung" class="form-label">Kurzbeschreibung</label>
    <textarea required maxlength="150" placeholder="max. 150 character" class="form-control" name="kurzbeschreibung" id="kurzbeschreibung" cols="15" rows="3"></textarea>
  </div>
  <div class="mb-3">
    <label for="year" class="form-label">Erscheinungsjahr</label>
    <input required type="text" class="form-control" id="year" name="year" >
    <div class="text-danger"><?php echo $errors['year']; ?></div>
  </div>
 
 <label for="year" class="form-label">Verlag auswählen</label>
  <select required name="verlag" class="form-select" aria-label="Default select example">
    <option value="1">Verlag1</option>
    <option value="2">Verlag2</option>
    <option value="3">Verlag3</option>
    <option value="4">Verlag4</option>
    <option value="5">Verlag5</option>
  </select>
  <br>
  <div class="mb-3 form-check">
    <input  required type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Die in diesem Formular eingegebene Daten
    werden verwendet, um ein neues Buch in unserer Datenbank anzulegen. Die Daten sind durch Absenden des Formular 
    fur die Offentlichkeit einsehbar
    </label>
  </div>
  <div class="d-grid gap-2">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>


<?php require "includes/footer.php"; ?>