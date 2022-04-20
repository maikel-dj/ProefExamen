<?php
class CreateItem extends Controller {
    public function __construct() {
        $this->CreateStudentModel = $this->model('CreateItemModel');
    }


    public function index() {
        $rows = "";
        $scanner = $this->CreateStudentModel->getStudents();

        foreach ($scanner as $value) {
            $rows .= $value->studentid . " " . $value->firstname . $value->lastname . " " . $value->email . " " . $value->phonenumber;
            $rows .= "<br>";
        }

        $data = [
            'title' => 'Scan site',
            'scanner' => $rows
        ];

        $this->view('createitem/index', $data);
    }
}
