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
      <th>Update</th>
      <th>Delete</th>
    </tr>
  </thead>

  <form action="" method="POST">
    <br><h3>Verwijder een item door de ID in te voeren in het veld hieronder</h3><br> 
    <input class="form-control" type="text" name="itemid" placeholder="voer item id in">
    <button class="btn btn-primary" type="submit" name="delete">Confirm</button>
</form>

  <tbody>   
        <?= $data["itemData"]; ?>
  </tbody>
</table>