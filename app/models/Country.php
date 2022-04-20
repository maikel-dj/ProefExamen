<?php
    class Country {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        // Test (database and table needs to exist before this works)
        public function getCountries() {
            $this->db->query("SELECT * FROM country");

            $result = $this->db->resultSet();

            return $result;
        }

    }
