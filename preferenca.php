 <!DOCTYPE html>

<html>
 <head>
  <meta charset="utf-8">
  <title>Horoscoptic</title>
  <link rel = "stylesheet" type = "text/css" href = "styles.css">
 </head>
 <body>
	<h2> Të preferuarit </h2>
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
			<?php
			$conn = mysqli_connect("localhost", "root" , "" , "IRIS");
		     if (!$conn) {
			die("Connection failed" .mysqli_connect_error());
		     }
				if(isset($_POST["zgjedhja"])){
					
					foreach($_POST["zgjedhja"] as $key => $value){
						$sql = "SELECT * FROM user WHERE ID = '$value'";
						$result = mysqli_query($conn,$sql);
						$row = mysqli_fetch_assoc($result);
			?>
						<tr><td><?php echo $row["ID"];?></td>
						<td><?php echo $row["Em_Mb_User"]; ?></td>
						<td><?php echo $row["Data_Lindjes"]; ?> </td>
						<td><?php echo $row["Ora_Lindjes"]; ?> </td>
						<td><?php echo $row["Shenja"]; ?> </td>
						</tr>
			<?php
					}
				}
			?>
		</tbody>
	</table>
 </body>
</html>
	
	
	
 