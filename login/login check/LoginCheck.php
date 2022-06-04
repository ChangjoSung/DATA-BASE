<?php

$host = 'localhost';
$user = 'tjdckdwh0';
$pw = '1234';
$dbName = 'mysql';
$con = new mysqli($host, $user, $pw, $dbName);

$id = $_POST['Email']; // 아이디
$pw = $_POST['password']; // 패스워드

$query = "select * from chartmember where chartmember_email='$id' and chartmember_pw_1='$pw'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);



if($id==$row['chartmember_email'] && $pw==$row['chartmember_pw_1']){ // id와 pw가 맞다면 login
   
	echo "<script> alert('로그인 성공'); </script>";
   echo "<script> location.href = 'layout-dark.php'; </script>";
   
}
else{ // id 또는 pw가 다르다면 admin_login 폼으로
   
   echo "<script> alert('로그인 실패'); </script>";
   echo "<script> location.href = 'index.html'; </script>";
}
?>