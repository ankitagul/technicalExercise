<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Welcome User</title>
 </head>
 <body>
   <h1>Home</h1>
   <h2>Welcome <?php echo $username; ?>!</h2>
   <a href="home/logout">Logout</a>
   <br/>
   <?php if(isset($volunteerData)) { ?>
		<table style="width:100%" border="1">
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Position</th>
				<th>Organization</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Street</th>
				<th>City</th>
				<th>Province</th>
				<th>Country</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php foreach($volunteerData as $row) { ?>
				<tr>
					<td><?php echo $row->firstname; ?></td>
					<td><?php echo $row->lastname; ?></td>
					<td><?php echo $row->position; ?></td>
					<td><?php echo $row->organization; ?></td>
					<td><?php echo $row->email; ?></td>
					<td><?php echo $row->phone; ?></td>
					<td><?php echo $row->street; ?></td>
					<td><?php echo $row->city; ?></td>
					<td><?php echo $row->province; ?></td>
					<td><?php echo $row->country; ?></td>
					<td><a href="volunteer/edit?id=<?php echo $row->id; ?>">Edit</a></td>
					<td><a href="volunteer/delete?id=<?php echo $row->id; ?>">Delete</a></td>
				</tr>
			<?php } ?>
		</table>
   <?php } ?>
   <a href="volunteer/add">Add a Volunteer</a>
 </body>
</html>