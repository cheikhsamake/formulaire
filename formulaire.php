<?php 
$conn=mysqli_connect('localhost','root','','classe') or die(mysqli_error());
$NOM=$_POST['nom'];
$PRENOM=$_POST['prenom'];
$TEL=$_POST['tel'];
$MAIL=$_POST['mail'];

$req="INSERT INTO simplon(nom,prenom,telephone,email) values('$NOM','$PRENOM','$TEL','$MAIL')";
$res=mysqli_querry($conn,$req);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>LISTE DES INSCRITS</title>
		<style>
			body{
				background: orange;
				box-shadow: 1px 6px 17px;
				margin-left: 5%;
				margin-top: 20%;
				padding-top: 10px;
				padding-bottom: 10px;
			}
		</style>
	</head>
	<body>
		<form>
			<table align="center">
				<tr>
					<td align="right">Nom : </td>
					<td><?php echo ($NOM) ?></td>
				
					<td align="right">Preom : </td>
					<td><?php echo ($PRENOM) ?></td>
				</tr>
				<tr>
					<td align="right">Telephone : </td>
					<td><?php echo ($TEL) ?></td>
				
					<td align="right">Email : </td>
					<td><?php echo ($MAIL) ?></td>
				</tr>
				
			</table>
			<p>INFORMATION RECUPEREE</p>
		</form>
		

	</body>
</html>