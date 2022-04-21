<?php
    class CreateReserverenModel {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        // Test (database and table needs to exist before this works)
        public function getReserveringen() {
            $this->db->query("SELECT * FROM reservering");

            $result = $this->db->resultSet();

            return $result;
          }

        //   Function insertItem
        public function insertReservering() 
        {
            // define variables for the query
            $fullname = $_POST['fullname'];
            $time = $_POST["time"];
            $itemid = $_POST["itemid"];

            // execute query with cleaned variables
            $sql = "INSERT INTO `reservering` (`id`, `fullname`, `time`, `itemid`)
            VALUES (NULL, '$fullname', '$time', '$itemid')";
            // Prepare SQl statement
            $this->db->query($sql);
            // Execute SQL statement
            $this->db->execute();
            // see how many rows are made in the database
            $result = $this->db->rowCount();
            // Check result of the row count
            return $result;
        }

        public function deleteReservering()
        {
            $reserverenid = $_POST["reserverenid"];
            $sql = "DELETE FROM reservering WHERE id='$reserverenid'";
            // Prepare SQl statement
            $this->db->query($sql);
            // Execute SQL statement
            $this->db->execute();
            // see how many rows are made in the database
            $result = $this->db->rowCount();
            // Check result of the row count
            return $result;
        }
        
        public function updateReservering()
        {
            $fullname = $_POST["fullname"];
            $itemid = $_POST["itemid"];
            $reserverenid = $_POST["reserverenid"];
            $sql = "UPDATE reservering SET `fullname` = '$fullname', `itemid` = '$itemid' WHERE `reservering`.`id` = $reserverenid;";

            // Prepare SQl statement
            $this->db->query($sql);
            // Execute SQL statement
            $this->db->execute();
            // see how many rows are made in the database
            $result = $this->db->rowCount();
            // Check result of the row count
            return $result;
        }
        
        // Create item options
        public function getItemOptions()
        {
            $itemSql = "SELECT itemname FROM `items`";
            // Prepare SQl statement
            $this->db->query($itemSql);
            // Execute SQL Statement
            $this->db->execute();
            // Put all data in an array
            $data = $this->db->resultSet();

            $item = "";
            foreach ($data as $d) {
                $item .= "<option value='".$d->itemname."'>".$d->itemname."</option>";
            }
            // Return data 
            return $item;
        }

        }
