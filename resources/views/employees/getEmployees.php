<html>
	<head>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
	</head>
	<body>
		<div class="container">
			<h1>List Employees</h1>
			<table class="table table-striped" id="myTable">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Gaji</th>
						<th>Umur</th>
						<th>Profile</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($results as $result) { ?>
						<tr>
							<td><?php echo $result['id'] ?></td>
							<td><?php echo $result['employee_name'] ?></td>
							<td><?php echo $result['employee_salary'] ?></td>
							<td><?php echo $result['employee_age'] ?></td>
							<td><?php echo $result['profile_image'] ?></td>
						</tr>
					<?php } ?>
				</tbody>
				</table>
			</div>
	</body>
</html>