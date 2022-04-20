<?php
class items extends Controller {
    public function __construct() {
        $this->CreateStudentModel = $this->model('CreateItemModel');
    }


    public function index() {
        $rows = "";
        $scanner = $this->CreateItemModel->getStudents();

        foreach ($scanner as $value) {
            $rows .= $value->studentid . " " . $value->firstname . $value->lastname . " " . $value->email . " " . $value->phonenumber;
            $rows .= "<br>";
        }

        $data = [
            'title' => 'Scan site',
            'scanner' => $rows
        ];

        $this->view('student/index', $data);
    }
}
