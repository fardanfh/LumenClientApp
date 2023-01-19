
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
	</head>
	<body>
		<div class="container">
			<h1>List Post</h1>
			<table class="table table-striped">
				<tbody>
					<tr>
						<td>ID</td>
						<td><?php echo $result[0]['id'] ?></td>
					</tr>
					<tr>
						<td>User Id</td>
						<td><?php echo $result[0]['user_id'] ?></td>
					</tr>
					<tr>
						<td>Title</td>
						<td><?php echo $result[0]['title'] ?></td>
					</tr>
					<tr>
						<td>Content</td>
						<td><?php echo $result[0]['content'] ?></td>
					</tr>
					<tr>
						<td>Status</td>
						<td><?php echo $result[0]['status'] ?></td>
					</tr>
					<tr>
						<td>Created At</td>
						<td><?php echo $result[0]['created_at'] ?></td>
					</tr>
					<tr>
						<td>Updated At</td>
						<td><?php echo $result[0]['updated_at'] ?></td>
					</tr>
				</tbody>
				</table>
			</div>
	</body>
</html>