<html>
<body>
<head>

<script type="text/javascript">
alert("Your data is Inserted In Stock");

</script>
</head>
	<?php $code = $price = $quantity = "";

$code= $_POST["code"];
$price= $_POST["price"];
$quantity= $_POST["quantity"];

 


$s = new MongoClient();
  // echo "Connection to database successfully";
	
	//here schema name is shop
   $db = $s->shop;
  // echo "Database mydb selected";

		//here table name is stock
   $collection = $db->createCollection("stock");

 //  echo "Collection created succsessfully";

   $collection = $db->stock;

   $document = array( 
      
     
      
      "code" => "$code",
      "price"=>"$price",
	"quantity" => "$quantity",
	
         );
 

	   $collection->insert($document);
	header("location:stock.html");
	echo "<script type='text/javascript'> alert('Stock Inserted in stock');</script> ";
	
?>


</body>
</html> 


