<?php
class student extends Controller {
    public function __construct() {
        $this->CreateStudentModel = $this->model('CreateStudentModel');
    }

    public function index() {
        $rows = "";
        $scanner = $this->CreateStudentModel->getStudents();

        foreach ($scanner as $value) {
            $rows .=  " " . $value->studentid . " " . $value->firstname . " " . $value->lastname . " " . $value->email . " " . $value->phonenumber . " " . $value->class;
            $rows .= "<br>";
        }

        $data = [
            'title' => 'ID | Voornaam | Achternaam | Email | Telefoonnummer | Klas',
            'scanner' => $rows
        ];

        $this->view('student/index', $data);

        //Form submit button to delete student
        if(isset($_POST["submitdelete"])){

            //Clean variables from form
            $studentfirstname = $_POST["studentfirstname"];
            $studentlastname =  $_POST["studentlastname"];

            //Call function in Model class and give first/last names argument
            $this->CreateStudentModel->deleteStudent($studentfirstname, $studentlastname);
          
          }

        } 
        
    }

