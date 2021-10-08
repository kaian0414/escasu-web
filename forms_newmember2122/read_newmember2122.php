<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>New Member Application 2021</title>
	<style type="text/css">
		tr, td {
			padding: 5px;
		}
	</style>
</head>
<body>
	<h2>New Member Application 2021</h2>
	<?php
		include ("connect.php");
		$sql = "SELECT * FROM newmember2122";
		$result = mysqli_query($db, $sql);
		$total_records = mysqli_num_rows($result);
		echo "Total number of records: ".$total_records; // ok
	?>

	<table border="1" width="100%" >
		<tr>
			<td width="3%">id</td>
			<td width="8%">中文名</td>
			<td width="10%">外文拼音</td>
			<td width="12%">課程</td>
			<td width="8%">年級</td>
			<td>自我介紹</td>
			<td width="8%">第一志願</td>
			<td width="8%">第二志願</td>
		</tr>
		<?php
			for ($i = 0; $i < $total_records; $i++) {
				$row = mysqli_fetch_row($result);
		?>
		<tr>
			<td><?php echo $row[0]; ?></td>
			<td><?php echo $row[1]; ?></td>
			<td><?php echo $row[2]; ?></td>
			<td><?php echo $row[6]; ?></td>
			<td><?php echo $row[7]; ?></td>
			<td><?php echo $row[8]; ?></td>
			<td><?php echo $row[9]; ?></td>
			<td><?php echo $row[10]; ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>