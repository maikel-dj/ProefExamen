<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Item Name</th>
      <th scope="col">Category</th>
      <th scope="col">Description</th>
      <th scope="col">Brand</th>
      <th scope="col">Type Number</th>
      <th scope="col">Purchase Date</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  	<!-- form om de id te deleten -->
  <form action="" method="POST">
    <br><h3>Verwijder een item door de ID in te voeren in het veld hieronder</h3><br> 
    <input class="form-control" type="text" name="itemid" placeholder="voer item id in">
    <button class="btn btn-primary" type="submit" name="delete">Confirm</button>
</form>
<!-- form om te updaten -->
<form action="" method="POST">
    <br><h3>Update uw item:</h3><br> 
    <input class="form-control" type="text" name="itemid" placeholder="voer item id in">
    <input class="form-control" type="text" name="itemname" placeholder="voer item naam in">
    <input class="form-control" type="text" name="category" placeholder="voer item categorie in">
    <input class="form-control" type="text" name="description" placeholder="voer item beschrijving in">
    <input class="form-control" type="text" name="brand" placeholder="voer item merk in">
    <input class="form-control" type="text" name="typenumber" placeholder="voer type nummer in">
    <input class="form-control" type="text" name="price" placeholder="voer item prijs in">
    <button class="btn btn-primary" type="submit" name="update">Confirm</button>
</form>

  <tbody>   
        <?= $data["itemData"]; ?>
  </tbody>
</table>