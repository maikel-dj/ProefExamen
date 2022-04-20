<h1><a href="http://proefexamen.nl/countries/index">Landenoverzicht</a></h1>
<h1><a href="http://proefexamen.nl/student/index">Beheer studenten</a></h1>
<h1><a href="http://proefexamen.nl/createitem/index">Item aanmaken</a></h1>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="text-center">Snelmenu</h5>
          <div id="snelmenubg"><a href="../student/index" id="snelmenu" style="text-decoration: none;"><i class="fas fa-globe"></i> Beheer studenten</a></div>
          <div id="snelmenubg"><a href="../" id="snelmenu" style="text-decoration: none;"><i class="fas fa-text-width"></i> Beheer baliemedewerkers</a></div>
          <div id="snelmenubg"><a href="../" id="snelmenu" style="text-decoration: none;"><i class="fas fa-ticket-alt"></i> Beheer docenten</a></div>
          <div id="snelmenubg"><a href="../" id="snelmenu" style="text-decoration: none;"><i class="fas fa-file-invoice"></i> Maak item</a></div>
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
