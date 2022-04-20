<?php

class Item{

   private $db;

   public function __construct()
   {
      $this->db = new Database;
   }

   public function readItems()
   {
      $this->db->query("SELECT * FROM items");
      $result = $this->db->resultSet();

      return $result;
   }
   public function delete() {
      
      $itemid = $_POST["itemid"];

      $query = $this->db->query("DELETE FROM items WHERE itemid='$itemid'");

      header("location: ../items/index");
      $result = $this->db->resultset();

      return $result;
   }
}

Function GetItems() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "proefexamen";


    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM `items`";

    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);

    $result = mysqli_query($conn, $sql);

    $records = "";

    while ($record = mysqli_fetch_assoc($result)) 
    {
        //code to get the code in the right way, there in lowercasses
        
     $records .= "<tr>
       <th scope='row'>" . $record["item id"] . "</th>
       <td> " . $record["item name"] . "</td>
       <td> " . $record["category"] . "</td>
       <td> " . $record["description"] . "</td>
       <td> " . $record["brand"] . "</td>
       <td> " . $record["typenumber"] . "</td>
       <td> " . $record["purchase date"] . "</td>
       <td> " . $record["price"] . "</td>
       
  
       <td>
         <a href='./update.php?id=" . $record["id"] . "'>
         <button style='background-color:green; border-color:black; color:white' > Update </button>
         </a>
       </td >
  
       <td>
          <a href='?delete=" . $record["id"] . "' class='btn' style='background-color:red; border-color:black; color:white'>
              Delete
          </a>
        </td >
  
     </tr>";
    }

 }