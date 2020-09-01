<?php 
	session_start();
	
	if(!$_SESSION['user_name'])
	{
		header('location:user_login.php?error=You Required To Login First...!!!');
	}
	else
	{
?>
<html>
	<head>
		<title>Welcome To The User Page</title>
		<link rel = "stylesheet" href = "main.css"></link>
	</head>
	<body>
		<header>
			<h1><a href = "index.php">Welcome to User Page</a></h1>
		</header>
		<aside>
			Welcome : <font color = "red" size = "3"><h2><?php echo $_SESSION['user_name']; ?></h2></font>
			<font color = "green" size = "2"><u><h2>Manage Content</h2></u></font>
			<h2><a href = "index.php?view=view">View Your Health Chart</a></h2>
			<h2><a href = "insert_record.php">Insert Your Daily Data</a></h2>
			<h2><a href = "logout.php">Logout</a></h2>
		</aside>
		<center>
			<h1 style = "color : green; font-weight : bold;">This is The User Page</h1>
				<p style = "color : blue; font-weight : bold;">You can manage all of your websites content from here...</p>
		</center>
		<form action="search.php" method="get">
			<h2 style="color: black; font-weight: bold; font-family: comic sans MS;"><span style="color: red;">S</span>earch <span style="color: blue;">A </span>Recor<span style="color: green;">d</span>:</h2><input type="text" name="search" placeholder="Enter a Date">
			<input type="submit" name="submit" value="Find Now">
		</form>
		<?php 
			if(isset($_GET['search']))
			{
				include("search.php");

			}
		?>
		<?php 
			if(isset($_GET['insert']))
			{
				include("insert_record.php");
			}
		?>
		
		<?php 
			if(isset($_GET['view']))
			{
		?>
		<table width = "1180" align = "center" border = "3">
			<tr>
				<td align = "center" colspan = "18" bgcolor = "gray">
					<h1 style = "color : black; font-weight : bold;">Here is Your Health Charts</h1>
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
				<th>Dinner</th>
				<th>Dinner Feelings</th>
				<th>Snacks and Others</th>
				<th>Snacks Feelings</th>
				<th>View</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php 
				include("includes/connect.php");
				
				if(isset($_GET['view']))
				{
					$query = "select *from health_chart";
					$run = mysqli_query($con,$query);
					
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
						//$content = substr($row['post_content'],0,50);
			?>
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
				<td><a href = "view.php?view=<?php echo $date; ?>">View</a></td>
				<td><a href = "edit.php?edit=<?php echo $date; ?>">Edit</a></td>
				<td><a href = "delete.php?delete=<?php echo $date; ?>">Delete</a></td>
				<!--<td><a href = "delete.php<?php echo $date; ?>">Delete</a></td>-->
			</tr>
			<?php }}} ?>
		</table>
	</body>
</html>
	<?php } ?>