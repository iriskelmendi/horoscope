
<?php
	session_start();
	$conn = mysqli_connect("localhost", "root" , "" , "IRIS");
		if (!$conn) {
			die("Connection failed" .mysqli_connect_error());
		}
    if(isset($_POST['submit'])){
		$_SESSION['name']=$_POST['name'];		
	}
	
	$hello = "";
	if(isset($_SESSION['name'])){
		$hello =  "<p> Përshëndetje ". $_SESSION['name'] ."!</p>";
		
	}else{
		header("location: Faqe Horoskopi.php");
	}
	
	
?>
<html>
<head>
	<title></title>
    <link rel = "stylesheet" type = "text/css" href = "styles.css">

</head>
<body>
<h5><?php echo $hello;?></h5>
<?php
	$conn = mysqli_connect("localhost", "root" , "" , "IRIS");
		if (!$conn) {
			die("Connection failed" .mysqli_connect_error());
		}
    if (isset($_POST["submit"])){
			$emri = $_POST["name"];
			$date = $_POST["date"];
            $ora = $_POST["ora"];
			$qytetilindjes= $_POST["qytetilindjes"];
			$sql= "INSERT INTO user (Em_Mb_User,Data_Lindjes,Ora_Lindjes,Qyteti_Lindjes)
	               VALUES ('$emri','$date','$ora','$qytetilindjes')";
				   }
			
			if($result = mysqli_query($conn,$sql)){
				echo "..";
			}else 
				echo "Te dhenat nuk u shtuan ne databaze".mysqli_error($conn);
			
			
			

	if (isset($_POST['date']))
	{   
		$timestamp=strtotime ($_POST ['date']);
		$date=date('d', $timestamp);
		$month=date('m', $timestamp);
		$y=date('Y', $timestamp);
	}
	 
	 switch ($month)
	 {	     
	 case 3:
	    if ( $date >=21 && $date <= 31)
		{    $shenja = "Dashi";
			 print (" <h1>".$shenja."</h1>");
			 break;
		}
		else 
		{$shenja = "Peshqit";
		    echo " <h1>".$shenja."</h1>";
		}	break;
	case 4:
	    if ( $date >=20 && $date <= 30)
		{   $shenja = "Demi";
			 print (" <h1>$shenja </h1>");
			 break;
		}
		else 
		{   $shenja = "Dashi";
		    echo " <h1>$shenja </h1>";
            break;
		}			
   	case 5:
	    if ( $date >=21 && $date <= 31)
		{   $shenja = "Binjaket";
			 print (" <h1>$shenja </h1>");
			 break;
		}
		else 
		{   $shenja = "Demi";
		    echo " <h1>$shenja </h1>";
			break;
		}
    case 6:
	    if ( $date >=21 && $date <= 30)
		{   $shenja = "Gaforrja";
			 print (" <h1>$shenja </h1>");
			 break;
		}
		else 
		{   $shenja = "Binjaket";
		    echo " <h1>$shenja </h1>";
            break;			
		}
		
	case 7:
	    if ( $date >=21 && $date <= 31)
		{   $shenja = "Luani";
			 print (" <h1>$shenja </h1>");
			 break;
		}
		else 
		{$shenja = "Gaforrja";
		    echo " <h1>$shenja </h1>";
		}
    break;		
    case 8:
	    if ( $date >=23 && $date <= 31)
		{   $shenja = "Virgjeresha";
			 print (" <h1>$shenja </h1>");
			 break;
		}
		else 
		{$shenja = "Luani";
		    echo " <h1>$shenja </h1>";	
		}
        break;	
case 9:
	    if ( $date >=23 && $date <= 30)
		{   $shenja = "Peshorja";
			 print (" <h1>$shenja </h1>");
		}
		else 
		{   $shenja = "Virgjeresha";
		    echo " <h1>$shenja </h1>";	
		}
break;	
case 10:
	    if ( $date >=23 && $date <=31 )
		{   $shenja = "Akrepi";
			 print (" <h1>$shenja </h1>");
		}
		else 
		{   $shenja = "Peshorja";
		    echo " <h1>$shenja </h1>";		
		}			
break;			
case 11:
	    if ( $date >=22 && $date <= 30)
		{   $shenja = "Shigjetari";
			 print (" <h1>$shenja </h1>");
			 break;
		}
		else 
		    $shenja = "Akrepi";
		    echo " <h1>$shenja </h1>";	
break;	
case 12:
	    if ( $date >=22 && $date <= 31)
		{   $shenja = "Bricjapi";
			 print ("<h1> $shenja </h1>");
			 break;
		}
		else 
			$shenja = "Shigjetari";
		    echo " <h1>$shenja </h1>";	
        break;	
		
case 1:
	    if ( $date >=20 && $date <= 31)
		{   $shenja = "Ujori";
			 print (" <h1>$shenja </h1>");
			 break;
		}
		else 
		{   $shenja = "Bricjapi";
		    echo " <h1>$shenja </h1>";	
		    break;
		}	
case 2:
	    if ( $date >=19 && $date <= 29)
		{   $shenja = "Peshqit";
			 print (" <h1>$shenja </h1>");
			 
		}
		else 
		{   $shenja = "Ujori";
		    echo " <h1>$shenja </h1>";	
            break;	
		}
}
	 $sql= "UPDATE User SET Shenja= '$shenja' WHERE Em_Mb_User='$emri'";
			
			
			if($result = mysqli_query($conn,$sql)){
				echo "......";
			}else 
				echo "Te dhenat nuk u shtuan ne databaze".mysqli_error($conn);

$conn = mysqli_connect("localhost", "root" , "" , "IRIS");
		if (!$conn) {
			die("Connection failed" .mysqli_connect_error());
		}
     
		$query = "SELECT * FROM astro WHERE Shenja ='$shenja'";
        
			if($result1 = mysqli_query($conn , $query)){
					while ($Row = mysqli_fetch_assoc($result1)) {
						echo "
						<h3>{$Row['Karakteristika']}</h3>
						
						";
					}
				}

switch($shenja){
	case 'Shigjetari':
    case 'Luani':
	case 'Dashi':
	$conn = mysqli_connect("localhost", "root" , "" , "IRIS");
		if (!$conn) {
			die("Connection failed" .mysqli_connect_error());
		}
     $sql = "SELECT * FROM user WHERE Shenja='Akrepi' OR Shenja ='Peshqit' OR Shenja='Gaforrja' ";
break;

case 'Akrepi':
case 'Peshqit':
case 'Gaforrja':
$conn = mysqli_connect("localhost", "root" , "" , "IRIS");
		if (!$conn) {
			die("Connection failed" .mysqli_connect_error());
		}
     $sql = "SELECT * FROM user WHERE Shenja='Luani' OR Shenja ='Dashi' OR Shenja='Shigjetari' ";
	
break;
case 'Demi':
case 'Virgjeresha':
case 'Bricjapi':
$conn = mysqli_connect("localhost", "root" , "" , "IRIS");
		if (!$conn) {
			die("Connection failed" .mysqli_connect_error());
		}
     $sql = "SELECT * FROM user WHERE Shenja='Peshorja' OR Shenja ='Ujori' OR Shenja='Binjaket' ";
	
break;
case 'Peshorja':
case 'Ujori':
case 'Binjaket':
$conn = mysqli_connect("localhost", "root" , "" , "IRIS");
		if (!$conn) {
			die("Connection failed" .mysqli_connect_error());
		}
     $sql = "SELECT * FROM user WHERE Shenja='Demi' OR Shenja ='Virgjeresha' OR Shenja='Bricjapi' ";
	
break;
}

 ?>

<h4> Match </h4>
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
				
				if($result = mysqli_query($conn,$sql)){
					$count = mysqli_num_rows($result);
				$output = "<form method = 'post' action = 'preferenca.php'>";
					if($count > 0){
						$output = "<form method = 'post' action = 'preferenca.php'>";
						while($row = mysqli_fetch_assoc($result)){
							$thisRow = "<tr><td>".$row["ID"]."</td>";
							$thisRow .= "<td>".$row["Em_Mb_User"]."</td>";
							$thisRow .= "<td>".$row["Data_Lindjes"]."</td>";
							$thisRow .= "<td>".$row["Ora_Lindjes"]."</td>";
							$thisRow .= "<td>".$row["Shenja"]."</td>";
							$thisRow .= "<td><input type = 'checkbox' name = 'zgjedhja[]'
										value =". $row['ID']."></td>";
							$output .= $thisRow;
						}
						$output .= "<input type = 'submit' type class= 'button' name = 'preferenca'
							value = 'Shiko te preferuarit'></form>";
					}
					echo $output;
				}
?>
</tbody>
</table>


<p>Shiko Horoskopin</p>
<p><a href = "https://www.astrologyzone.com/horoscopes/">AstrologyZone</a></li></p>
 
 
 
</body>
</html>