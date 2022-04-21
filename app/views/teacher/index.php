  <title><?= $data["title"]?></title>

<!-- Show list of users with self made table -->

<div class="card">
  <div class="card-body">
    <h3 class="text-center">Alle docenten</h3>
    <?= $data["title"] ?>
    <br>
    <?= $data["scanner"] ?>
  </div>
</div>
<br>
<!-- Submit form with data -->
<div class="card">
  <div class="card-body">
    <form action="" method="POST">
        <br><h3 class="text-center">Update een docent uit het systeem</h3><br>
        <input class="form-control mb-3" type="text" name="shortname" placeholder="Afkorting">
        <input class="form-control mb-3" type="text" name="firstname" placeholder="Voornaam">
        <input class="form-control mb-3" type="text" name="lastname" placeholder="Achternaam">
        <input class="form-control mb-3" type="text" name="mail" placeholder="Mail">
        <input class="form-control mb-3" type="text" name="phonenumber" placeholder="Telefoon nummer">
        <input class="form-control mb-3" type="text" name="class" placeholder="Tutor Klas">
        <button class="btn btn-primary" type="submit" name="submitupdate">Bijwerken</button>
    </form>
  </div>
</div>
<br>

<!-- create submit form with data for creating a new Teacher -->
<div class="card">
  <div class="card-body">
    <form action="" method="POST">
        <br><h3 class="text-center">Nieuwe docent toevoegen</h3><br>
        <input class="form-control mb-3" type="text" name="shortname" placeholder="Afkorting">
        <input class="form-control mb-3" type="text" name="firstname" placeholder="Voornaam">
        <input class="form-control mb-3" type="text" name="lastname" placeholder="Achternaam">
        <input class="form-control mb-3" type="text" name="mail" placeholder="Mail">
        <input class="form-control mb-3" type="text" name="phonenumber" placeholder="Telefoon nummer">
        <input class="form-control mb-3" type="text" name="class" placeholder="Tutor Klas">
        <button class="btn btn-primary" type="submit" name="submitcreate">Toevoegen</button>
    </form>
  </div>
</div>


<!-- Delete Teacher -->
<div class="card">
  <div class="card-body">
    <form action="" method="POST">
        <br><h3 class="text-center">Verwijder een docent uit het systeem</h3><br>
        <input class="form-control mb-3" type="text" name="shortname" placeholder="Afkorting">
        <button class="btn btn-primary mb-3" type="submit" name="submitdelete">Verwijderen</button>
    </form>
  </div>
</div>
