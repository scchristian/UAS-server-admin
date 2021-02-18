<?php
echo "hello world";
$link = mysqli_connect("172.17.0.2", "root", "root", "trucorpweb");
if ($link -> connect_error){
echo "not connected" . $link -> connect_error;
exit();
}

$result = $link -> query("SELECT * FROM user");
foreach ($result as $asd){
	echo $asd["ID"].$asd["Nama"].$asd["Kantor"];
}
?>
