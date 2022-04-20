<?php
class Baliemedewerker extends controller {
    public function __construct() {
        $this->CreateBaliemModel = $this->model('CreateBaliemModel');
    }

    public function index() {
        $CreateBaliemModel = $this->CreateBaliemModel->getBaliemedewerker();

        $rows = "";
        foreach ($CreateBaliemModel as $value) {
        
            $rows .= "<tr>
            <td>$value->studentid</td>
            <td>" . htmlentities($value->firstname, ENT_QUOTES, 'ISO-8859-1') . "</td>
            <td>" . htmlentities($value->lastname, ENT_QUOTES, 'ISO-8859-1') . "</td>
            <td>" . htmlentities($value->email, ENT_QUOTES, 'ISO-8859-1') . "</td>
            <td>" . htmlentities($value->class, ENT_QUOTES, 'ISO-8859-1') . "</td>
            <td><a href='" . URLROOT . "baliemedewerker/update/$value->studentid'>update</a></td>
            <td><a href='" . URLROOT . "baliemedewerker/delete/$value->studentid'>delete</a></td>
            </tr>";
            
        }
        $data = [
            'title' => 'Baliemedewerker',
            'baliemedewerkerData' => $rows
        ];

        $this->view('baliemedewerker/index', $data);
    }

    
    public function update($studentid = null) {
        // var_dump($id);exit();
        // var_dump($_SERVER);exit();
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
            $this->CreateBaliemModel->updateCreateBaliemModel($_POST);
            header("Location: " . URLROOT . "baliemedewerker/index");
        }else{
            $row = $this->CreateBaliemModel->getSingleBalie($studentid);
            $data = [
                'title' => '<h1>Update baliemedewerker</h1>',
                'row' => $row
            ];
            $this->view("baliemedewerker/update", $data); 
        }
    }

    public function delete($studentid) {
        //echo $studentid; exit();
         $this->CreateBaliemModel->deleteBaliemModel($studentid);
                
         $data = [
           'deleteStatus' => "Het record met id  = $studentid id verwijdert"  
         ];
        
         $this->view('baliemedewerker/delete', $data);
         header("Refresh:2, url=" . URLROOT . "baliemedewerker/index");
     }
}