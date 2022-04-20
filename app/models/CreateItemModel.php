<?php
    class CreateItem {

        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        // Test (database and table needs to exist before this works)
        public function getItem() {
            $this->db->query("SELECT * FROM items");

            $result = $this->db->resultSet();

            return $result;
          }


        }
