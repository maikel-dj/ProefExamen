  <title><?= $data["title"]?></title>
<h1>Studenten beheer pagina</h1><br>

<!-- Show list of users with self made table -->

<h3>Alle studenten!</h3>
<?= $data["title"] ?>
<br>
<?= $data["scanner"] ?> 


<!-- Submit form with data -->

<form action="" method="POST">
    <br><h3>Update de gegevens van een student!</h3><br><br>
</form>


<!-- Delete student -->

<form action="" method="POST">
    <br><h3>Verwijder een student uit het systeem!</h3><br>
    <input class="form-control" type="text" name="studentfirstname" placeholder="Voornaam student">
    <input class="form-control" type="text" name="studentlastname" placeholder="Achternaam student"><br>
    <button class="btn btn-primary" type="submit" name="submitdelete">Confirm</button>
</form>
