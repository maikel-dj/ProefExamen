  <title><?= $data["title"]?></title>

<!-- Show list of users with self made table -->

<div class="card">
  <div class="card-body">
    <h3 class="text-center">Alle studenten!</h3>
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
        <br><h3 class="text-center">Update een student uit het systeem!</h3><br>
        <input class="form-control mb-3" type="text" name="studentid" placeholder="ID Student">
        <input class="form-control mb-3" type="text" name="firstname" placeholder="Voornaam">
        <input class="form-control mb-3" type="text" name="lastname" placeholder="Achternaam">
        <input class="form-control mb-3" type="text" name="mail" placeholder="Mail">
        <input class="form-control mb-3" type="text" name="phonenumber" placeholder="Telefoon nummer">
        <input class="form-control mb-3" type="text" name="class" placeholder="Klas">
        <button class="btn btn-primary" type="submit" name="submitupdate">Confirm</button>
    </form>
  </div>
</div>
<br>


<!-- Delete student -->
<div class="card">
  <div class="card-body">
    <form action="" method="POST">
        <br><h3 class="text-center">Verwijder een student uit het systeem!.</h3><br>
        <input class="form-control mb-3" type="text" name="studentid" placeholder="ID Student">
        <button class="btn btn-primary mb-3" type="submit" name="submitdelete">Confirm</button>
    </form>
  </div>
</div>
