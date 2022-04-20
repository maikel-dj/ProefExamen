<title><?= $data["title"]?></title>
<h1>Item reserveren</h1>


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
