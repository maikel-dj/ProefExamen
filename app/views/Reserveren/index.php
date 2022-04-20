<title><?= $data["title"]?></title>
<h1>Item reserveren</h1>

<?php if(isset($_GET["message"])){
  echo '<div class="alert alert-success">' . $_GET["message"] . '</div>';
} ?>


  <form action="" method="POST">
    <label>
        Je volledige naam:
    <input class="form-control" type="text" name="fullname" placeholder="Volledige naam">
    </label>

    <label>
        Tijdstip:
    <input class="form-control" type="text" value="<?= date("d/m/Y H:i") ?>" name="time" placeholder="Current time">
    </label>

    <label>
        Type item:
    <select class="form-select" name="itemid" aria-label="Default select example">
      <option value="Overig" selected>Selecteer item</option>
      <?= $data['items'] ?>
    </select>
    </label>
    <br>
    <button class="btn btn-primary" type="submit" name="submit">Reserveren</button>
</form>

<h2>Gereserveerde items</h2>
<?= $data["scanner"] ?>

<!-- Delete function for reserveren -->

<form action="" method="POST">
    <br>
    <h3>Verwijder een reservering</h3>
    <br> 
    <input class="form-control" type="text" name="reserverenid" placeholder="Uw reserverings ID">
    <button class="btn btn-primary" type="submit" name="submitdelete">Bevestig</button>
</form>

<!-- Update function for reserveren -->

<form action="" method="POST">
    <br>
    <h4>Update een reservering</h4>
    <br> 
    <input class="form-control" type="text" name="reserverenid" placeholder="Uw reserverings ID">
    <input class="form-control" type="text" name="fullname" placeholder="Uw volledige naam">
    <select class="form-select" name="itemid" aria-label="Default select example">
      <option value="Overig" selected>Selecteer item</option>
      <?= $data['items'] ?>
    </select>
    <button class="btn btn-primary" type="submit" name="submitupdate">Bevestig</button>
</form>
