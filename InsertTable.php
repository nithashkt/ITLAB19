<?php
include('config.php');
$name=$_POST['name'];
$salary=$_POST['salary'];
$address=$_POST['address'];
echo $name. " " .$salary. " " . $address;
$result=mysqli_query($bd, "SELECT count(*)  as cnt FROM EMPLOYEE");
$res=mysqli_fetch_array($result);
$temp=$res['cnt'];
echo $temp;
$sql="insert into EMPLOYEE(id,name,salary,address) values($temp+1,'$name','$salary', '$address')";
if(mysqli_query($bd,$sql))
{
echo "record inserted successfully";
}
else{
echo "Error couldnt execute $sql" .mysqli_error($bd);
}
mysqli_close($bd);
?>
