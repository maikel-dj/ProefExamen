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

        //Form submit button to delete student entry
        if(isset($_POST["submitdelete"])){

            //Call function in Model class and give no arguments
            $this->CreateStudentModel->deleteStudent();

          }

        //Form submit button to update student information
        if(isset($_POST["submitupdate"])){

            //Call function in Model class and give no arguments
            $this->CreateStudentModel->updateStudent();

          }

        //The submitted form part for creating a new student
        if(isset($_POST["submitcreate"])){

            //Call function in Model class and give no arguments
            $this->CreateStudentModel->createStudent();

          }

        }

    }
