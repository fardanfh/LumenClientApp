<html>
	<head>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
	</head>
	<body>
		<div class="container">
			<h1>List Post</h1>
			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>User ID</th>
						<th>Title</th>
						<th>Status</th>
						<th>Content</th>
						<th>Created</th>
						<th>Updated</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($results as $result) { ?>
						<tr>
							<td><?php echo $result['id'] ?></td>
							<td><?php echo $result['user_id'] ?></td>
							<td><?php echo $result['title'] ?></td>
							<td><?php echo $result['content'] ?></td>
							<td><?php echo $result['status'] ?></td>
							<td><?php echo $result['created_at'] ?></td>
							<td><?php echo $result['updated_at'] ?></td>
						</tr>
					<?php } ?>
				</tbody>
				</table>
			</div>
	</body>
</html>