<style media="screen">

#snelmenu:hover {
  transition: 0.2s;
}

#snelmenubg:hover {
  background-color: #e0e4ff;
  transition: 0.2s;
  padding-bottom: 3px;
  padding-top: 3px;
  padding-left: 15px;
}

#snelmenubg{
  transition: 0.2s;
  padding-bottom: 3px;
  padding-top: 3px;
}

#snelmenu {
  transition: 0.2s;
}
</style>

<?php date_default_timezone_set('Europe/Amsterdam'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="text-center">Snelmenu</h5>
          <div id="snelmenubg"><a href="../student/index" id="snelmenu" style="text-decoration: none;"><i class="fas fa-globe"></i> Beheer studenten</a></div>
          <div id="snelmenubg"><a href="../" id="snelmenu" style="text-decoration: none;"><i class="fas fa-text-width"></i> Beheer baliemedewerkers</a></div>
          <div id="snelmenubg"><a href="../teacher/index" id="snelmenu" style="text-decoration: none;"><i class="fas fa-ticket-alt"></i> Beheer docenten</a></div>
          <div id="snelmenubg"><a href="../createitem/index" id="snelmenu" style="text-decoration: none;"><i class="fas fa-file-invoice"></i> Maak item</a></div>
          <div id="snelmenubg"><a href="../reserveren/index" id="snelmenu" style="text-decoration: none;"><i class="fas fa-file-invoice"></i> Reserveer item</a></div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="text-center">Het is vandaag</h5>
          <p class="text-center"><?= date("d/m/Y") ?></p>
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-body">
          <h5 class="text-center">De tijd momenteel:</h5>
          <p class="text-center"><?= date("h:i") ?></p>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="text-center">Welkom.</h5>
            <p class="text-center">Ook deze website heet je van harte welkom!</p>
        </div>
      </div>
    </div>


  </div>
</div>
