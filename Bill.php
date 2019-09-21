<html>
<body>
<head>
<meta http-equiv="refresh" content="0;url=http://localhost/My%20Project/login.html">
</head>

<?php  $fn = $ln = $mb = $ad1 = $ad2 = $p1 = $p2 = "";

$fn= $_POST["fname"];
$ln= $_POST["lname"];
$mb= $_POST["cnt"];
$ad1= $_POST["add1"];
$ad2=$_POST["add2"];
$p1=$_POST["pas1"];
$p2=$_POST["pas2"];
 


$s = new MongoClient();
  // echo "Connection to database successfully";
	
	//here schema name is shop
   $db = $s->shop;
  // echo "Database mydb selected";

		//here table name is customer
   $collection = $db->createCollection("customer");

 //  echo "Collection created succsessfully";

   $collection = $db->customer;

   $document = array( 
      
     
      "f" => "$fn", 
      "l" => "$ln",
      "c"=>"$mb",
      "a"=>"$ad1",
      "pa" => "$ad2",
	"pp1"=> "$p1",
	"pp2"=> "$p2",
   );

   $collection->insert($document);
?>
</body>
</html> 


