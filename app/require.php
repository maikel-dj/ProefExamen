<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="fixed-top"><a style="animation-name: loadbar;
animation-duration: 0.8s; background-color: #0A58CA; font-size: 2.5px;"></a></div>

<style media="screen">
@keyframes loadbar {
  0%{
    padding-left: 1%;
  }
  100%{
    padding-left: 100%;
    margin-left: 100%;
  }
}
</style>
<?php

    require_once 'views/sidebar.php';

    //Require libraries from folder libraries
    require_once 'libraries/Core.php';
    require_once 'libraries/Controller.php';
    require_once 'libraries/Database.php';
    require_once 'config/config.php';

    //Instantiate core class
    $init = new Core();
?>

  </div>
</div>
