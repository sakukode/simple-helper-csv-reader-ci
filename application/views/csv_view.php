<!DOCTYPE html>
<html>
<head>
	<title>Contoh Membaca File Csv dengan Codeigniter</title>
</head>
<body>
<h1>Tabel Orang</h1>

<p>Total : <b><?php echo $total_orang;?></b></p>

<table border="1" padding="2">
	<thead>
		<tr>
			<th>Nama</th>
			<th>email</th>
			<th>alamat</th>
			<th>jenis kelamin</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($orang as $row): ?>
		<tr>
			<td><?php echo $row[0];?></td>
			<td><?php echo $row[1];?></td>
			<td><?php echo $row[2];?></td>
			<td><?php echo $row[3];?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<br>
<strong>Ada <?php echo $total_pria;?> Pria :</strong>
<br>
<ol>
<?php 
foreach($pria as $row) {
	echo '<li>';
	echo $row[0];
	echo '</li>'; 
} 
?>
</ol>
</body>
</html>