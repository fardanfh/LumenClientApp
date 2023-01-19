<html>
	<head>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
	</head>
	<body>
		<div class="container">
			<h1>Employee</h1>
			<table class="table table-striped">
				<tbody>
					<tr>
						<td>ID</td>
						<td><?php echo $result['id'] ?></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><?php echo $result['name'] ?></td>
					</tr>
					<tr>
						<td>Gaji</td>
						<td><?php echo $result['salary'] ?></td>
					</tr>
					<tr>
						<td>Umur</td>
						<td><?php echo $result['age'] ?></td>
					</tr>
					<tr>
						<td>Profile</td>
						<td></td>
					</tr>
				</tbody>
				</table>
			</div>
	</body>
</html>