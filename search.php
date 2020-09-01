<!DOCTYPE html>
<html>
	<head>
		<title>Viewing Searched Record</title>
	</head>
	<body>
<?php 
	include("includes/connect.php");

	if(isset($_GET['search']))
	{
		$search_record = $_GET['search'];

		$search_query = "SELECT *FROM health_chart WHERE Date like '%$search_record%'";
		$run = mysqli_query($con,$search_query);
		while($row = mysqli_fetch_array($run))
		{
			$date = $row['Date'];
			$sleeping_pill = $row['Sleeping pill'];
			$sleep = $row['Sleep'];
			$sleeping_problem = $row['Problem in sleep'];
			$stool = $row['Stool'];
			$stool_feelings = $row['Feelings_Stool'];
			$breakfast = $row['Breakfast'];
			$breakfast_feelings = $row['Feelings_Breakfast'];
			$lunch = $row['Lunch'];
			$lunch_feelings = $row['Feelings_Lunch'];
			$dinner = $row['Dinner'];
			$dinner_feelings = $row['Feelings_Dinner'];
			$others = $row['Snacks and Others'];
			$others_feelings = $row['Feelings_Others'];
	?>
		<table width = "1350" align = "center" border = "3">
			<tr>
				<td align = "center" colspan = "18" bgcolor = "gray">
					<h1 style = "color : black; font-weight : bold;">View Searched Record</h1>
				</td>
			</tr>
			<tr bgcolor = "blue" style = "color : yellow; font-weight : bold">
				<th>Date</th>
				<th>Sleeping Pill</th>
				<th>Sleep</th>
				<th>Problem in Sleep</th>
				<th>Stool</th>
				<th>Stool Feelings</th>
				<th>Breakfast</th>
				<th>Breakfast Feelings</th>
				<th>Lunch</th>
				<th>Lunch Feelings</th>
				<th>Dinner Feelings</th>
				<th>Dinner Feelings</th>
				<th>Snacks and Others</th>
				<th>Snacks Feelings</th>
			</tr>
            <tr align = "center" style = "color : black; font-weight : bold;" bgcolor = "white">
				<td><?php echo $date; ?></td>
				<td><?php echo $sleeping_pill; ?></td>
				<td><?php echo $sleep; ?></td>
				<td><?php echo $sleeping_problem; ?></td>
				<td><?php echo $stool; ?></td>
				<td><?php echo $stool_feelings; ?></td>
				<td><?php echo $breakfast; ?></td>
				<td><?php echo $breakfast_feelings; ?></td>
				<td><?php echo $lunch; ?></td>
				<td><?php echo $lunch_feelings; ?></td>
				<td><?php echo $dinner; ?></td>
				<td><?php echo $dinner_feelings; ?></td>
				<td><?php echo $others; ?></td>
				<td><?php echo $others_feelings; ?></td>
			</tr>
		</table>	
			<?php } } ?>
	</body>
</html>