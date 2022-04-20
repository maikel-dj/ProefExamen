  <title><?= $data["title"]?></title>
<h1>Scan je tag</h1>

<form action="post">
    <label for="scanName">Scan your tag</label>
    <input type="text" autofocus id="scanName" name="scanName"><br><br>
</form>

<h2>id  Land    hoofdstad   continent   aantalinwoners</h2>
<?= $data["scanner"] ?>

<?php
    // var_dump($data);
?>
