<?php

$servername = "localhost";

$username = "root";  //Ten dang nhap

$password = "";   //Mat khau truy cap

$dbname = "blogs";   //Ten co so du lieu muon ket noi den


//Tao ket noi co so du lieu

$conn = new mysqli($servername,$username,$password,$dbname);

//Cau lenh truy van
$query = "SELECT * FROM posts";

//Thuc thi cau lenh
$result = $conn->query($query);

//Tao 1 mang de chua du lieu
$posts = array();

while($row = $result->fetch_assoc())
{
	$posts[] = $row;
}

foreach ($posts as $post)
{
	echo "<pre>";
	    print_r($post);
	echo "</pre>";
}
?>