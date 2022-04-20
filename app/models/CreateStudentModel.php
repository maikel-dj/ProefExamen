<?php
    class CreateStudentModel {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        // Test (database and table needs to exist before this works)
        public function getStudents() {
            $this->db->query("SELECT * FROM students");

            $result = $this->db->resultSet();

            return $result;
          }
        
        //Delete student function
        public function deleteStudent() {

            //Clean variables from form
            $studentid = $_POST["studentid"];

            //sql delete query execute
            
            $query = $this->db->query("DELETE FROM students WHERE studentid='$studentid'");

            //return table
            header("location: ../student/index");
            $result = $this->db->resultSet();
            
            return $result;
            
        } 

        public function updateStudent() {

            //Clean variables from form
            $studentid = $_POST["studentid"];
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $mail = $_POST["mail"];
            $phonenumber = $_POST["phonenumber"];
            $class = $_POST["class"];

            //sql update query execute
            $query = $this->db->query("UPDATE `students` SET `studentid` = '$studentid', `firstname` = '$firstname', `lastname` = '$lastname', `email` = '$mail', `phonenumber` = '$phonenumber', `class` = '$class' WHERE `students`.`studentid` = $studentid;");

            //return table
            header("location: ../student/index");
            $result = $this->db->resultSet();

            return $result;

        }

        }
