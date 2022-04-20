<?php
    class CreateTeacherModel {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        // Test (database and table needs to exist before this works)
        public function getTeachers() {
            $this->db->query("SELECT * FROM Teachers");

            $result = $this->db->resultSet();

            return $result;
          }

        //Delete Teacher function
        public function deleteTeacher() {

            //Clean variables from form
            $shortname = $_POST["shortname"];

            //sql delete query execute

            $query = $this->db->query("DELETE FROM Teachers WHERE shortname='$shortname'");

            //return table
            header("location: ../Teacher/index");
            echo '<meta http-equiv="refresh" content="0; URL=../Teacher/index">';
            $result = $this->db->resultSet();

            return $result;

        }

        public function updateTeacher() {

            //Clean variables from form
            $shortname = $_POST["shortname"];
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $mail = $_POST["mail"];
            $phonenumber = $_POST["phonenumber"];
            $class = $_POST["class"];

            //sql update query execute
            $query = $this->db->query("UPDATE `teachers` SET `shortname` = '$shortname', `firstname` = '$firstname', `lastname` = '$lastname', `phonenumber` = '$phonenumber', `email` = '$mail', `tutorclass` = '$class' WHERE `Shortname` = '$shortname';");

            //return table
            header("location: ../Teacher/index");
            echo '<meta http-equiv="refresh" content="0; URL=../Teacher/index">';
            $result = $this->db->resultSet();

            return $result;

        }

        public function createTeacher(){

          //All creation variables from the form
          $shortname = $_POST["shortname"];
          $firstname = $_POST["firstname"];
          $lastname = $_POST["lastname"];
          $mail = $_POST["mail"];
          $phonenumber = $_POST["phonenumber"];
          $tutorclass = $_POST["class"];

          //sql create query for creating new Teacher
          $query = $this->db->query("INSERT INTO `teachers` (`teacherid`, `shortname`, `firstname`, `lastname`, `phonenumber`, `email`, `tutorclass`) VALUES (NULL, '$shortname', '$firstname', '$lastname', '$phonenumber', '$mail', '$tutorclass');");

          //send back to default fallback page
          header("location: ../Teacher/index");
          echo '<meta http-equiv="refresh" content="0; URL=../Teacher/index">';
          $result = $this->db->resultSet();

          return $result;
        }

        }
