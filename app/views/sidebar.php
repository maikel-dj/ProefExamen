<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style media="screen">
#wrapper {
    overflow-x: hidden;
 }

#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  -webkit-transition: margin .25s ease-out;
  -moz-transition: margin .25s ease-out;
  -o-transition: margin .25s ease-out;
  transition: margin .25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.2rem;
}

#sidebar-wrapper .list-group {
  width: 15rem;
}

#page-content-wrapper {
  min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}

@media (min-width: 769px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
}

.menuitem{
  font-size: 1.2vw;
  text-decoration: none;
  color: #0A58CA;
  transition: 0.3s;
  margin-top: 1rem;
  margin-bottom: 1rem;
  cursor: pointer;
}


.menuitem:hover{
  transition: 0.3s;
  font-size: 1.2vw;
  text-decoration: none;
  color: #0a6294;
}

.nav-edit{
  margin-left: -15px;
  margin-bottom: 0px;
  margin-top: 0px;
}

.nav-edit-item{
  color: #588CAA;
  text-decoration: none;
  transition: 0.3s;
}

.nav-edit-item:hover{
  color: #0a6294;
  text-decoration: none;
  transition: 0.3s;
}

.spacingitem{
  margin-bottom: 0.7rem;
}

.sidebar li .submenu{
	list-style: none;
	margin: 0;
	padding: 0;
	padding-left: 1rem;
	padding-right: 1rem;
}

</style>

<script type="text/javascript">

document.addEventListener("DOMContentLoaded", function(){
document.querySelectorAll('.sidebar .nav-link').forEach(function(element){

  element.addEventListener('click', function (e) {

    let nextEl = element.nextElementSibling;
    let parentEl  = element.parentElement;

      if(nextEl) {
          e.preventDefault();
          let mycollapse = new bootstrap.Collapse(nextEl);

          if(nextEl.classList.contains('show')){
            mycollapse.hide();
          } else {
              mycollapse.show();
              // find other submenus with class=show
              var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
              // if it exists, then close all of them
              if(opened_submenu){
                new bootstrap.Collapse(opened_submenu);
              }
          }
      }
  }); // addEventListener
}) // forEach
});
// DOMContentLoaded  end
</script>

<div class="d-flex" id="wrapper">
<!-- Sidebar -->
<div class="border-right" id="sidebar-wrapper" style=" z-index: 5; background-color: #FFFFFF;">
<img class="sidebar-heading" src="" style="max-width: 15rem; min-width: 15rem;">
  <div class="list-group list-group-flush fixed-top col" id="mobielhide">
  <nav class="sidebar card py-2 mb-4">
<ul class="nav flex-column" id="nav_accordion">
  <div class="row">
    <div class="col" style=" padding-left: 0;">
    <br>
    <div style="padding-left: 0.5rem;">
      <div class="row spacingitem" style="margin-left: 1vw;" >
        <div class="col">
          <!-- <hr style="margin-bottom: 0.5rem;"> -->
        <a href="../" class="menuitem" ><i class="fas fa-home"></i> Dashboard</a>
        </div>
      </div>
      <!-- <div class="row spacingitem" style="margin-left: 1vw;" >
        <div class="col">
        <a href="./stockread" class="menuitem" ><i class="fas fa-shopping-cart"></i> Voorraad</a>
        </div>
      </div> -->
      <!-- <div class="row spacingitem" style="margin-left: 1vw;" >
        <div class="col">
        <li class="nav-item has-submenu">
    		<a class="nav-link nav-edit menuitem"><i class="fas fa-box"></i> ArtikelBeheer</a>
    		<ul class="submenu collapse">
    			<li><a class="nav-link nav-edit-item" href="createproduct">Product aanmaken</a></li>
    			<li><a class="nav-link nav-edit-item" href="#">Opslag beheren </a> </li>
    		</ul>
    	</li>
        </div>
      </div> -->
      <div class="row spacingitem" style="margin-left: 1vw;" >
        <div class="col">
        <li class="nav-item has-submenu">
    		<a class="nav-link nav-edit menuitem"><i class="fas fa-briefcase"></i> Gebruikersbeheer</a>
    		<ul class="submenu collapse">
    			<li><a class="nav-link nav-edit-item" href="../student">Studenten</a></li>
    			<li><a class="nav-link nav-edit-item" href="../teacher">Docenten</a></li>
    			<li><a class="nav-link nav-edit-item" href="../baliemedewerker">Baliemedewerkers</a></li>
          <li><a class="nav-link nav-edit-item" href="../items">Items</a></li>
    		</ul>
    	</li>
        </div>
      </div>
      <div class="row spacingitem" style="margin-left: 1vw;" >
        <div class="col">
        <a href="../createitem/index" class="menuitem" ><i class="fas fa-shopping-cart"></i> Item aanmaken</a>
        </div>
      </div>
      <div class="row spacingitem" style="margin-left: 1vw;" >
        <div class="col">
        <a href="../reserveren/index" class="menuitem" ><i class="fas fa-list"></i> Resevering doen</a>
        </div>
      </div>
    </div>
    </div>
  </div>
</ul>
</nav>
</div>
</div>

    <div id="page-content-wrapper" style="background-color: #EDEDED;">
      <div style="margin: 10px;">
