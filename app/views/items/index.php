<?php
echo $data["itemData"];
?>
<div class="card">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!--Op dzez plek komt de tabel -->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ItemID</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Description</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Type Number</th>
                            <th scope="col">Purchase Date</th>
                            <th scope="col">Price</th>
                            <!-- I added a iItam price row, You can see the prices from the database -->
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //So you can see the database info, with out this you will not see the information
              ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>