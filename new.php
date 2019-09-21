<html>
<body>

<?php $fn = $ln = $cn = $lo = $cd = $q = "";

$fn=$_POST["fname"];
$ln=$_POST["lname"];
$cn=$_POST["cnt"];
$lo=$_POST["loc"];
$cd=$_POST["code"];
$q=$_POST["qty"];


$s = new MongoClient();

$db = $s -> shop;

$collection = $db->createCollection("order");

$collection = $db->order;

$document = array(

"a1" => "fn",
"a2" => "ln",
"a3" => "cn",
"a4" => "lo",
"a5" => "cd",
"a6" => "q",

);


$collection->insert($document);

?>


<form action="windows.print()" method="post">
<input type="Submit" value="Save and Print">
</body>
</html>