<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
  
<?php

class CProducts{
  public $conn;

  function OpenCon()
   {
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "";
   $db = "test";
   $this->conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

  
   }
    function query($i)
     {
        $result = mysqli_query($this->conn,"SELECT * FROM products ORDER BY DATE_CREATE DESC");
        echo "<table border='1'>
              <tr>
              <th>ID</th>
              <th>PRODUCT_ID</th>
              <th>PRODUCT_NAME</th>
              <th>PRODUCT_PRICE</th>
              <th>PRODUCT_ARTICLE</th>
              <th>PRODUCT_QUANTITY</th>
              <th>DATE_CREATE</th>
              </tr>";

              $ii = 0;
          while(($row = mysqli_fetch_array($result)) && $ii!=$i)
          {
            $ii+=1;
            //if ($row['hide']){
            echo "<tr>";
            echo "<td align='center';> " . $row['ID'] . "</td>";
            echo "<td align='center';>" . $row['PRODUCT_ID'] . "</td>";
            echo "<td align='center';>" . $row['PRODUCT_NAME'] . "</td>";
            echo "<td align='center';>" . $row['PRODUCT_PRICE'] . " </td>";
            echo "<td align='center';>" . $row['PRODUCT_ARTICLE'] . "</td>";
            echo "<td ><input  type='int' value=" .$row['PRODUCT_QUANTITY'] .">
            // <button onclick='qqq(".$ii.")'>+</button>
            // <button onclick='qqq(".$ii.")'>-</button>
            </td>";
            echo "<td align='center';>" . $row['DATE_CREATE'] . "</td>";
            echo "<td align='center';>" . $row['hide'] . "</td>";
            echo "<td><button id = ".$ii.";>Hide</button></td>";
            echo "</tr>";
          //}
          }
      echo "</table>";
    }
   
   
  function CloseCon()
   {
   $this->conn -> close();
   }
}

  function qqq($q)
   {
    

   }
$Example = new CProducts;

$Example->OpenCon();

$Example->query(8);

$Example->CloseCon();

   
?>


</body>
</html>
