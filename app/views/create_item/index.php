<title><?= $data["title"]?></title>
<h1>Student Toevoegen</h1>

<form action="" method="POST">
    <input class="form-control" type="text" name="name" placeholder="Itemname">
    <input class="form-control" type="text" name="stock" placeholder="Totalstock">
    <input class="form-control" type="text" name="stock" placeholder="Totalstock">
    <input class="form-control" type="text" name="stock" placeholder="Totalstock">
    <br>
    <button class="btn btn-primary" type="submit" name="submit">Confirm</button>
</form>

<h2>items</h2>
<?= $data["scanner"] ?>

<?php
    // var_dump($data);
?>