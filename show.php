<html>
<title>Guests</title>

<link href="css.css" rel="stylesheet" type="text/css" />

<body bgcolor="skyblue">
<div class="header">
<br>
<br>
<h1>Admin</h1>
</div>
<div class="side">
<a href="asadmin.php">
<button type="button">Admin Home</button></a>
<br>
<br>
<br>
<br>
<a href="#">
<button>Add Stock</button></a>
<br>
<br>
<br>
<br>
<a href="del.html">
<button type="button">Delete Stock</button>
</a>
<br>
<br>
</div>
<div class="content">
<h1>Current User We have :</h1>
<h3>
<?php  $f = $l = $c = $a= $pa = $pp1 = $pp2 = "";




$s = new MongoClient();
 //  echo "Connection to database successfully";
   $db = $s->shop;
  // echo "Database mydb selected";

   $collection = $db->createCollection("customer");

 //  echo "Collection created succsessfully";

   $collection = $db->customer;

$cursor = $collection->find();

$num_docs = $cursor->count();

if( $num_docs > 0)
{
	foreach ($cursor as $obj)
	{
echo "<br>";
	echo 'First Name:' . $obj['f'];
echo "<br>";
	echo 'Last Name:' . $obj['l'];
echo "<br>";
	echo 'Contact No:' . $obj['c'];
echo "<br>";
	echo 'Address:' . $obj['a'];
echo "<br>";
echo "<hr>";

	}
}
	else
	{
		echo "No Guests Found \n";
	}


?></h3>
</div>
</body>
</html> 


