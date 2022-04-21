<?php
    class CreateItemModel {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        // Test (database and table needs to exist before this works)
        public function getItems() {
            $this->db->query("SELECT * FROM items");

            $result = $this->db->resultSet();

            return $result;
          }

        //   Function insertItem
        public function insertItem() 
        {
            // define variables for the query
            $itemname = $_POST['itemname'];
            $category = $_POST["cat"];
            $description = $_POST["description"];
            $brand = $_POST["brand"];
            $typenumber = $_POST['typenumber'];
            $purchasedate = $_POST["purchasedate"];
            $price = $_POST["price"];

            // execute query with cleaned variables
            $sql = "INSERT INTO `items` (`id`, `itemname`, `category`, `description`, `brand`, `typenumber`, `purchasedate`, `price`)
            VALUES (NULL, '$itemname', '$category', '$description', '$brand', '$typenumber', '$purchasedate', '$price')";
            // Prepare SQl statement
            $this->db->query($sql);
            // Execute SQL statement
            $this->db->execute();
            // see how many rows are made in the database
            $result = $this->db->rowCount();
            // Check result of the row count
            return $result;
        }
        
        // Create category options
        public function getCategoryOptions()
        {
            $categorySql = "SELECT * FROM `categories`";
            // Prepare SQl statement
            $this->db->query($categorySql);
            // Execute SQL Statement
            $this->db->execute();
            // Put all data in an array
            $data = $this->db->resultSet();

            $category = "";
            foreach ($data as $d) {
                $category .= "<option value='".$d->categoryname."'>".$d->categoryname."</option>";
            }
            // Return data 
            return $category;
        }

        }
