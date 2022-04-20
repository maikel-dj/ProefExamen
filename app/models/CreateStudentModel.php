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
        
        public function deleteStudent() {
             
            //sql delete query
            $this->db->query("DELETE FROM students WHERE firstname='$studentfirstname' AND lastname='$studentlastname'");

            $result = $this->db->resultSet();

            return $result;

        } 

        }
