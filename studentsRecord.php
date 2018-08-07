<!DOCTYPE html>
<html>
<head>
	<title>Records Display</title>
</head>
<body>

<style>

	h1{
		font-size: 30px;
		font-weight: bold;
		text-align: center;
	}
</style>

	<div>
		<h1> Students Payments </h1>

	</div>
	<table border="2px" cellpadding="3">
<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th>Parent Number</th>
				<th>Amount</th>
				<th> Payment Type</th>
				<th>Message</th>
				<th>Date</th>
			</tr>
		
<?php 
include 'connect.php';

$sql = mysqli_query($connect,"SELECT * from pay");

while ($row=mysqli_fetch_array($sql)) {
 ?>
<tr>
<td> <?php echo $row['id'] ?> </td>
<td> <?php echo $row['name'] ?> </td>
<td> <?php echo $row['mname'] ?> </td>
<td> <?php echo $row['lname'] ?> </td>
<td> <?php echo $row['pnumber'] ?> </td>
<td> <?php echo $row['apaid'] ?> </td>
<td> <?php echo $row['grading'] ?> </td>
<td> <?php echo $row['message'] ?> </td>
<td> <?php echo $row['date'] ?> </td>
</td>
</tr>

<?php } ?>
	</table>

</body>
</html>
