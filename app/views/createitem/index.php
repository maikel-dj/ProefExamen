<title><?= $data["title"]?></title>
<h1>Item aanmaken</h1>

<?php if(isset($_GET["message"])){
  echo '<div class="alert alert-success">' . $_GET["message"] . '</div>';
} ?>

<form action="" method="POST">
    <label>
        Naam item:
    <input class="form-control" type="text" name="itemname" placeholder="Item naam">
    </label>

    <label>
        Categorie item:
    <select class="form-select" name="cat" aria-label="Default select example">
      <option value="Overig" selected>Selecteer categorie</option>
      <?= $data['categories'] ?>
    </select>
    </label>

    <label>
        Description item:
    <input class="form-control" type="text" name="description" placeholder="Beschrijving item">
    </label>

    <label>
        Merk item:
    <input class="form-control" type="text" name="brand" placeholder="Merk Item">
    </label>

    <label>
        Typenummer item:
    <input class="form-control" type="text" name="typenumber" placeholder="Typenummer item">
    </label>

    <label>
        Aankoopdatum item:
    <input class="form-control" type="date" name="purchasedate" placeholder="Aankoopdatum Item">
    </label>

    <label>
        Prijs item:
    <input class="form-control" type="number" name="price" placeholder="Prijs Item">
    </label>

    <br>
    <button class="btn btn-primary" type="submit" name="submit">Confirm</button>
</form>


<h2>Toegevoegde items</h2>
<?= $data["scanner"] ?>

<?php
    // var_dump($data);
?>
