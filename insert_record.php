<?php 
			include("includes/connect.php");
			
			
			if(isset($_POST['submit']))
			{
				$date = date('Y-m-d');
				$sleeping_pill = $_POST['sl_pill'];
				$sleep = $_POST['sleep'];
				$sleeping_problem = $_POST['pb_sleep'];
				$stool = $_POST['stool'];
				$stool_feelings = $_POST['content1'];
				$breakfast = $_POST['breakfast'];
				$breakfast_feelings = $_POST['content2'];
				$lunch = $_POST['lunch'];
				$lunch_feelings = $_POST['content3'];
				$dinner = $_POST['dinner'];
				$dinner_feelings = $_POST['content4'];
				$snacks_and_others = $_POST['others']; 
				$others_feelings = $_POST['content5'];
				
				/*if($date == '')
				{
					echo "<script>alert('Please input a date !!!')</script>";
					exit();
				}*/
				
				$query = "INSERT INTO health_chart (`Date`,`Sleeping pill`,`Sleep`,`Problem in sleep`,`Stool`,`Feelings_Stool`,`Breakfast`,`Feelings_Breakfast`,`Lunch`,`Feelings_Lunch`,`Dinner`,`Feelings_Dinner`,`Snacks and Others`,`Feelings_Others`) VALUES ('$date','$sleeping_pill','$sleep','$sleeping_problem','$stool','$stool_feelings','$breakfast','$breakfast_feelings','$lunch','$lunch_feelings','$dinner','$dinner_feelings','$snacks_and_others','$others_feelings')";
				// $query = "INSERT INTO `talha` (`stool`, `breakfast`) VALUES ('$stool','$breakfast')";
				if(mysqli_query($con,$query))
				{
					//echo "<script>alert('inserted');</script>";
					echo "<script>window.open('index.php?published=Record has been published !!!','_self')</script>";
				}
				else{
					echo "Error : " . $query.mysqli_error($con);
				}
			}
		?>



<html>
	<head>
		<title>Insert New Records</title>
	</head>
	<body>
		<form method = "post" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
			<table align = "center" border = "5" width = "700" bgcolor = "cyan">
				<tr>
					<td align = "center" colspan = "6" bgcolor = "yellow">
						<h1 style = "color : black; font-weight : bold">Insert Your Records Here</h1>
					</td>
				</tr>
				<!--<tr>
					<td align = "right">Date :</td>
					<td><input type = "date" name = "date"></td>
				</tr> -->
				<tr>
					<td align = "right">Sleeping Pill :</td>
					<td><input type = "text" name = "sl_pill"></td>
				</tr>
				<tr>
					<td align = "right">Sleep :</td>
					<td><input type = "text" name = "sleep"></td>
				</tr>
				<tr>
					<td align = "right">Problem in Sleep :</td>
					<td><input type = "text" name = "pb_sleep"></td>
				</tr>
				<tr>
					<td align = "right">Stool :</td>
					<td><input type = "text" name = "stool"></td>
				</tr>
				<tr>
					<td align = "Right">Stool Feelings :</td>
					<td><textarea name = "content1" cols = "30" rows = "5"></textarea></td>
				</tr>
				<tr>
					<td align = "right">Breakfast :</td>
					<td><input type = "text" name = "breakfast"></td>
				</tr>
				<tr>
					<td align = "right">Breakfast feelings :</td>
					<td><textarea name = "content2" cols = "30" rows = "5"></textarea></td>
				</tr>
				<tr>
					<td align = "right">Lunch :</td>
					<td><input type = "text" name = "lunch"></td>
				</tr>
				<tr>
					<td align = "right">Lunch Feelings :</td>
					<td><textarea name = "content3" cols = "30" rows = "5"></textarea></td>
				</tr>
				<tr>
					<td align = "right">Dinner :</td>
					<td><input type = "text" name = "dinner"></td>
				</tr>
				<tr>
					<td align = "right">Dinner Feelings :</td>
					<td><textarea name = "content4" cols = "30" rows = "5"></textarea></td>
				</tr>
				<tr>
					<td align = "right">Snacks and Others :</td>
					<td><input type = "text" name = "others"></td>
				</tr>
				<tr>
					<td align = "right">Others Feelings :</td>
					<td><textarea name = "content5" cols = "30" rows = "5"></textarea></td>
				</tr>
				<tr>
					<td align = "center" colspan = "5"><input type = "submit" name = "submit" value = "Publish Now"></td>
				</tr>
			</table>
		</form>
	</body>
</html>