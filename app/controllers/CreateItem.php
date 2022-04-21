<?php
class CreateItem extends Controller {
    public function __construct() {
        $this->CreateItemModel = $this->model('CreateItemModel');
    }


    public function index() {
        $rows = "";
        $scanner = $this->CreateItemModel->getItems();

        foreach ($scanner as $value) {
            $rows .= $value->id . " " . $value->itemname . $value->category . " " . $value->description . " " . $value->brand . " " . $value->typenumber . " " . $value->purchasedate . " " . $value->price;
            $rows .= "<br>";
        }

        if(isset($_POST["submit"])){
            // Call function insertItem in model CreateItemModel.php
            $x = $this->CreateItemModel->insertItem();
            var_dump($x);
            echo '<meta http-equiv="refresh" content="0; URL=../reserveren/index?message=Aanmaken%20gelukt">';
          }
        
          $catOptions = $this->CreateItemModel->getCategoryOptions();

        $this->view('createitem/index', $data = [
            'title' => 'Scan site',
            'scanner' => $rows,
            'categories' => $catOptions
        ]);
    }
    
}