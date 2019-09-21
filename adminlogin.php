<html>
<body>

<script type='text/javascript'>

<?php  $uid=$pass = ""; 
$uid= $_POST["user"];
$pass= $_POST["pass"];
$s = new MongoClient();
  // echo "Connection to database successfully";
	
	//here schema name is shop
   $db = $s->shop;
  // echo "Database mydb selected";

		//here table name is customer
   $collection = $db->createCollection("Admin");

 //  echo "Collection created succsessfully";

   $collection = $db->Admin;
$cursor = $collection->find();
//how many results found
$num_docs = $cursor->count();

if( $num_docs > 0)
{
 	//loop over the results
	foreach ($cursor as $obj)
	{
if($uid==$obj['uid']&&$pass==$obj['pass'])
{
	header("location:asadmin.php");
}
else
{
echo"alert('<b>You Have entered wrong ID or Password</b>');";
}
}
}
</script>

?>



</body>
</html> 


