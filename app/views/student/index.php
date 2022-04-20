  <title><?= $data["title"]?></title>
<h1>Studenten beheer pagina</h1><br>

<!-- Show list of users with self made table -->

<h3>Alle studenten!</h3>
<?= $data["title"] ?>
<br>
<?= $data["scanner"] ?> 


<!-- Submit form with data -->

<form action="" method="POST">
    <br><h3>Update een student uit het systeem!</h3><br> 
    <input class="form-control" type="text" name="studentid" placeholder="ID Student">
    <input class="form-control" type="text" name="firstname" placeholder="Voornaam">
    <input class="form-control" type="text" name="lastname" placeholder="Achternaam">
    <input class="form-control" type="text" name="mail" placeholder="Mail">
    <input class="form-control" type="text" name="phonenumber" placeholder="Telefoon nummer">
    <input class="form-control" type="text" name="class" placeholder="Klas">

    <button class="btn btn-primary" type="submit" name="submitupdate">Confirm</button>

</form>



<!-- Delete student -->

<form action="" method="POST">
    <br><h3>Verwijder een student uit het systeem!</h3><br> 
    <input class="form-control" type="text" name="studentid" placeholder="ID Student">
    <button class="btn btn-primary" type="submit" name="submitdelete">Confirm</button>
</form>

