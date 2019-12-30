<?php
	$server = "localhost";
	$user = "root";
	$password ="";
	$dbName = "imagemanagement";
	$db = new mysqli($server, $user, $password, $dbName);

	$sql = "SELECT * from image";
	$result = $db->query($sql)->fetch_all();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Display Image</title>
	<style type="text/css">
		table{
			color: black;
			margin: auto;
			margin-top: 15px;
		}
		table tr th{
			text-align: center;
		    border: 1px solid black;
		}
		table tr td {
			width: 200px;
		    text-align: center;
		    border: 1px solid black;
		}
		img{
			width: 60px;
			height: 60px
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>id</th>
			<th>image</th>
		</tr>
		<?php
			for ($i=0; $i < count($result); $i++) { 
		?>
		<tr>
			<td><?php echo $result[$i][0]?></td>
			<td><img src="<?php echo $result[$i][1]?>"></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>