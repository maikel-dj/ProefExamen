<?php
class Reserveren extends Controller {
    public function __construct() {
        $this->CreateReserverenModel = $this->model('CreateReserverenModel');
    }


    public function index() {
        $rows = "";
        $scanner = $this->CreateReserverenModel->getReserveringen();

        foreach ($scanner as $value) {
            $rows .= $value->id . " " . $value->fullname . $value->time . " " . $value->itemid;
            $rows .= "<br>";
        }

        if(isset($_POST["submit"])){
            // Call function insertReservering in model CreateItemModel.php
            $x = $this->CreateReserverenModel->insertReservering();
            var_dump($x);
            echo '<meta http-equiv="refresh" content="0; URL=../reserveren/index">';
          }
        
          $itemOptions = $this->CreateReserverenModel->getItemOptions();

        $this->view('reserveren/index', $data = [
            'title' => 'Scan site',
            'scanner' => $rows,
            'items' => $itemOptions
        ]);
    }
    
}