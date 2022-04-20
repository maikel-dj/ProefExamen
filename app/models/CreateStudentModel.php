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


        }
