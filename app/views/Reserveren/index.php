<div class="col-sm-12 col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="text-center">Welkom.</h5>
            <p class="text-center">Ook deze website heet je van harte welkom!</p>
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-body">
          <h5 class="text-center">Reserveer een item</h5>
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
              <select class="form-select" name="item" aria-label="Default select example">
                <option value="Overig" selected>Selecteer item</option>
                <?= $data['items'] ?>
              </select>
              </label>
              <br>
              <button class="btn btn-primary" type="submit" name="submit">Reserveren</button>
          </form>
        </div>
      </div>
    </div>