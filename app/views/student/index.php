  <title><?= $data["title"]?></title>
<h1>Studenten beheer pagina</h1><br>

<!-- Show list of users with self made table -->

<h3>Alle studenten!</h3>
<?= $data["title"] ?>
<br>
<?= $data["scanner"] ?> 


<!-- Submit form with data -->

<form action="post">
    <br><h3>Update de gegevens van een student!</h3><br><br>
</form>


<?php
//Delete function

if(isset($_POST["submitdelete"])){

  // define variables for the query

  $studentfirstname = cleaning($_POST["studentfirstname"]);
  $studentlastname = cleaning($_POST["studentlastname"]);

  // execute query with cleaned variables
  $query = mysqli_query($conn, "DELETE FROM students WHERE firstname='$studentfirstname' AND lastname='$studentlastname'");

}

?>

<form action="post">
    <br><h3>Verwijder een student uit het systeem!</h3><br>
    <input class="form-control" type="text" name="studentfirstname" placeholder="Voornaam student">
    <input class="form-control" type="text" name="studentlastname" placeholder="Achternaam student"><br>
    <button class="btn btn-primary" type="submit" name="submitdelete">Confirm</button>
</form>
