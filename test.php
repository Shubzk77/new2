<html>
<body>



<?php  $f=$pp1 = ""; 
$f= $_POST["user"];
$pp1= $_POST["pass"];
$s = new MongoClient();
  // echo "Connection to database successfully";
	
	//here schema name is shop
   $db = $s->shop;
  // echo "Database mydb selected";

		//here table name is customer
   $collection = $db->createCollection("customer");

 //  echo "Collection created succsessfully";

   $collection = $db->customer;
$cursor = $collection->find();
//how many results found
$num_docs = $cursor->count();

if( $num_docs > 0)
{
 	//loop over the results
	foreach ($cursor as $obj)
	{
if($f==$obj['f']&&$pp1==$obj['pp1'])
{
	header("location:operation.html");
}
else
{
echo"<b>You Have entered wrong ID or Password</b>";
}
}
}


?>



</body>
</html> 


