<?php
class student extends Controller {
    public function __construct() {
        $this->CreateStudentModel = $this->model('CreateStudentModel');
    }


    public function index() {
        $rows = "";
        $scanner = $this->CreateStudentModel->getStudents();
        $scanName = "";

        // function GetScannerModel($scanName){
        //     foreach ($scanner as $value) {
        //         $rows .= $value->id . " " . $value->name . " " . $value->capitalCity . " " . $value->population;
        //         $rows .= "<br>";
        //     }
        // }

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
