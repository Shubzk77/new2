<html>
<body>



<?php $code = $price = $quantity = "";


$code= $_POST["code"];

$s = new MongoClient();
   //echo "Connection to database successfully";
   $db = $s->shop;
   //echo "Database mydb selected";

   $collection = $db->createCollection("stock");
 //  echo "Collection created succsessfully";

   $collection = $db->stock;

    $collection->remove(array("code"=>"$code"));

 	header("location:del.html");


  

?>



</body>
</html> 



