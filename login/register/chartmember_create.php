<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php
		include 'register.html';
		
		$host = 'localhost';
		$user = 'tjdckdwh0';
		$pw = '1234';
		$dbName = 'mysql';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

	    $chartmember_username = $_POST['username'];
		$chartmember_email = $_POST['email'];
	    $chartmember_pw_1 = $_POST['pw_1'];
		
		$sql = "insert into chartmember (
                chartmember_username,
				chartmember_email,
				chartmember_pw_1
		)";
		
		$sql = $sql. "values (
				'$chartmember_username',
				'$chartmember_email',
				'$chartmember_pw_1'
		)";

		if($mysqli->query($sql)){ 
		  echo '<script>alert("success inserting")</script>'; 
		}else{ 
		  echo '<script>alert("fail to insert sql")</script>';
		}

		mysqli_close($mysqli);
	  
	?>

<script>
	location.href = "register.html";
</script>

</html>