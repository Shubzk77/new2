<hmtl>
<title>Admin Login</title>
<link href="css.css" rel="stylesheet" type="text/css" />
<body bgcolor="skyblue">
<div class="header">
<br>
<br>
<h1>Admin</h1>
<br>
<br>
</div>
<div class="content">
<h1>Products We Currently have:</a>
</h1>
<?php $code = $price = $quantity =  "";




$s = new MongoClient();
 //  echo "Connection to database successfully";
   $db = $s->shop;
  // echo "Database mydb selected";

   $collection = $db->createCollection("stock");

 //  echo "Collection created succsessfully";

   $collection = $db->stock;

$cursor = $collection->find();

$num_docs = $cursor->count();

if( $num_docs > 0)
{
	foreach ($cursor as $obj)
	{
echo "<br>";
	echo 'Code:' . $obj['code'];
echo "<br>";
	echo 'Price:' . $obj['price'];
echo "<br>";
	echo 'Quantity:' . $obj['quantity'];
echo "<br>";
	echo "<hr>";

	}
}
	else
	{
		echo "No Guests Found \n";
	}


?>
</div>

<div class="side">
<a href="stock.html">
<button type="button">Add Stock</button></a><br>
<br>
<br>
<br>

<form method="post" action="show.php">
<a href="#">
<input type="submit" name="Current Guests" value="Guest Users"></a>
</form>
<br>
<br>
<a href="del.html">
<button type="button">Delete Stock</button>
</a>
<br>
<br>
</div>

</html>
