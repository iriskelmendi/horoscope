<?php
/*
$conn =mysqli_connect("localhost","root","");
if(!$conn){
	die("Lidhja nuk u realizua!");
}else{
	$sql = "CREATE DATABASE IRIS";
	echo "Lidhja u realizua me sukses!";
	if(!mysqli_query($conn,$sql))
		echo "Gabim! 
	          Databaza nuk u krijua.";
	else
		echo "Databaza u krijua.";
}

*/
/*
$conn=mysqli_connect("localhost","root","","IRIS");
if(!$conn)
	die("connection error");
else{
	$sql = "CREATE TABLE Astro(Shenja VARCHAR(15) NOT NULL PRIMARY KEY,
		Karakteristika Text(100) NOT NULL)";
		if(!mysqli_query($conn,$sql))
			echo "Gabim nuk u krijua tabela".mysqli_error($conn);
		else
			echo "tabela u krijua";
}
*/
/*
$conn=mysqli_connect("localhost","root","","IRIS");
if(!$conn)
	die("connection error");
else{
	$sql = "CREATE TABLE User(ID INT(15)  PRIMARY KEY AUTO_INCREMENT,
		Em_Mb_User TEXT(100) NOT NULL ,
		Data_Lindjes DATE NOT NULL,
		Ora_Lindjes TIME NOT NULL,
		Qyteti_Lindjes TEXT(15)  NOT NULL,
		Shenja VARCHAR(15)  NOT NULL
		
		)";
		if(!mysqli_query($conn,$sql))
			echo "Kujdes!
			      Tabela nuk u krijua." .mysqli_error($conn);
		else
			echo "Tabela u krijua.";
}
*/
/*
$conn=mysqli_connect("localhost","root","","IRIS");
if(!$conn)
	die("connection error");
else{
	$sql ="INSERT INTO Astro(shenja,Karakteristika) VALUES('Bricjapi',' The Mountain Goat symbolizes your sign, for you are able to ascend to the highest peaks, starting from the depths of the sea. As the path narrows and you approach the pinnacle, you pass other small animals and turtles that have given up, lying on their backs with their little legs in the air.
The Mountain Goat symbolizes your sign, for you are able to ascend to the highest peaks, starting from the depths of the sea. As the path narrows and you approach the pinnacle, you pass other small animals and turtles that have given up, lying on their backs with their little legs in the air.
When you marry, you marry for life. Saturn, your ruler, teaches you to make long-term commitments and plans, and as a partner, you will work to build a life that will be bigger than any you could have built alone. You value stability more than any other quality and tend to look for a partner who will be a good provider so that finances won’t be a problem for your future family.
Your clothing choices almost always veer toward beautiful, classically cut designs in neutral colors. You favor natural fabrics of wool, cashmere, fine cotton, silk of all kinds, and other such fibers. You love cream, milkshake white, chocolate brown, caramel, butterscotch, and old standbys of camel, black, and navy.
No matter how busy your schedule, you find time for family, and you may also find time for community service, charity, or humanitarian concerns. This simply gives further credence to the saying, “If you want something done right and reliably, go to a busy person.”
')";
	if(!mysqli_query($conn,$sql))
		echo "Gabim!" .mysqli_error($conn);
	else
		echo " U krijua rekord i ri";
}
*/
?>