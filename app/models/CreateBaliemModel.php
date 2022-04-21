<?php
    class CreateBaliemModel {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        // Test (database and table needs to exist before this works)
        public function getBaliemedewerker() {
            $this->db->query("SELECT * FROM baliemedewerker");

            $result = $this->db->resultSet();

            return $result;
          }
          
          public function getSingleBalie($studentid){
             //echo $studentid;exit();
            $this->db->query("SELECT * FROM baliemedewerker WHERE studentid = :studentid");
            $this->db->bind(':studentid', $studentid, PDO::PARAM_INT);
            return $this->db->single();
            // var_dump($this->db->single());exit();
        }

        public function updateCreateBaliemModel($post) {
          // var_dump($post);exit();
          $this->db->query("UPDATE `baliemedewerker`
                            SET `firstname` = :firstname,
                            `lastname` = :lastname,
                            `email` = :email,
                            `class` = :class
                            WHERE `studentid` = :studentid");
       
       $this->db->bind(':studentid', $post["studentid"], PDO::PARAM_INT);
       $this->db->bind(':firstname', $post["firstname"], PDO::PARAM_STR);
       $this->db->bind(':lastname', $post["lastname"], PDO::PARAM_STR);
       $this->db->bind(':email', $post["email"], PDO::PARAM_STR);
       $this->db->bind(':class', $post["class"], PDO::PARAM_INT);
       
       return $this->db->execute();
      }

        
          public function deleteBaliemModel($studentid){
            // echo $studentid;exit();
            $this->db->query("DELETE FROM baliemedewerker WHERE studentid = :studentid");
            $this->db->bind("studentid", $studentid, PDO::PARAM_INT);
            return $this->db->execute();
            // var_dump($this->db->execute());
        }
        }