<?php
class Teacher extends Controller {
    public function __construct() {
        $this->CreateTeacherModel = $this->model('CreateTeacherModel');
    }

    public function index() {
        $rows = "";
        $scanner = $this->CreateTeacherModel->getTeachers();

        foreach ($scanner as $value) {
            $rows .=  " " . $value->shortname . " " . $value->firstname . " " . $value->lastname . " " . $value->email . " " . $value->phonenumber . " " . $value->tutorclass;
            $rows .= "<br>";
        }

        $data = [
            'title' => 'Shortname | Voornaam | Achternaam | Email | Telefoonnummer | Tutorclass',
            'scanner' => $rows
        ];

        $this->view('Teacher/index', $data);

        //Form submit button to delete Teacher entry
        if(isset($_POST["submitdelete"])){

            //Call function in Model class and give no arguments
            $this->CreateTeacherModel->deleteTeacher();

          }

        //Form submit button to update Teacher information
        if(isset($_POST["submitupdate"])){

            //Call function in Model class and give no arguments
            $this->CreateTeacherModel->updateTeacher();

          }

        //The submitted form part for creating a new Teacher
        if(isset($_POST["submitcreate"])){

            //Call function in Model class and give no arguments
            $this->CreateTeacherModel->createTeacher();

          }

        }

    }
