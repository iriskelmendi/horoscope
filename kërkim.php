<!DOCTYPE html>

<html>
<head>
	<title></title>
		<link rel = "stylesheet" type = "text/css" href = "styles.css">

</head>
<body>
<table>
		<thead>
			<tr>
			<th>ID</th>
			<th>Em_Mb_</th>
			<th>Data_Lindjes</th>
			<th>Ora_Lindjes</th>
			<th>Shenja</th>
			</tr>
		</thead>
		<tbody>
<?php $conn = mysqli_connect("localhost", "root" , "" , "IRIS");
		if (!$conn) {
			die("Connection failed" .mysqli_connect_error());
		}
    if (isset($_POST["submit1"])){
		$kërkim = $_POST["kërkim"];
		$sql = "SELECT * FROM user WHERE Shenja ='$kërkim'";
        
			if($result = mysqli_query($conn , $sql)){
					while ($Row = mysqli_fetch_assoc($result)) {
						echo "<tr>
						<td>{$Row['ID']}</td>
						<td>{$Row['Em_Mb_User']}</td>
						<td>{$Row['Data_Lindjes']}</td>
						<td>{$Row['Ora_Lindjes']}</td>
						<td>{$Row['Qyteti_Lindjes']}</td>
						<td>{$Row['Shenja']}</td>
						</tr>
						";
					}
				}
	}
 ?>

</table>
</body>
</html>