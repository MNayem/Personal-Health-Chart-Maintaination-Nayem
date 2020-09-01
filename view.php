<!DOCTYPE html>
<html>
	<body>
<?php 

	include("includes/connect.php");
	
	$date = @$_GET['view'];
	
	$query = "SELECT * FROM health_chart where DATE = '$date'";
	
	$run = mysqli_query($con,$query);
	
	while($row = mysqli_fetch_array($run))
		{
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

<form method = "post" action = "view.php?view=<?php echo $date; ?>">
			<table align = "center" border = "10" width = "600">
				<tr>
					<td align = "center" colspan = "5" bgcolor = "magenta">
						<h1 style = "color : cyan;">View Record</h1>
					</td>
				</tr>
				<tr>
					<td align = "right">Sleeping Pill :</td>
					<td><input type = "text" name = "sl_pill" value="<?php echo $sleeping_pill; ?>"></td>
				</tr>
				<tr>
					<td align = "right">Sleep :</td>
					<td><input type = "text" name = "sleep" value="<?php echo $sleep; ?>"></td>
				</tr>
				<tr>
					<td align = "right">Problem in Sleep :</td>
					<td><input type = "text" name = "pb_sleep" value="<?php echo $sleeping_problem; ?>"></td>
				</tr>
				<tr>
					<td align = "right">Stool :</td>
					<td><input type = "text" name = "stool" value="<?php echo $stool; ?>"></td>
				</tr>
				<tr>
					<td align = "Right">Stool Feelings :</td>
					<td><textarea name = "content1" cols = "30" rows = "5" value="<?php echo 
					$stool_feelings; ?>"></textarea></td>
				</tr>
				<tr>
					<td align = "right">Breakfast :</td>
					<td><input type = "text" name = "breakfast" value="<?php echo $breakfast; ?>"></td>
				</tr>
				<tr>
					<td align = "right">Breakfast feelings :</td>
					<td><textarea name = "content2" cols = "30" rows = "5" value="<?php echo 
					$breakfast_feelings; ?>"></textarea></td>
				</tr>
				<tr>
					<td align = "right">Lunch :</td>
					<td><input type = "text" name = "lunch" value="<?php echo $lunch; ?>"></td>
				</tr>
				<tr>
					<td align = "right">Lunch Feelings :</td>
					<td><textarea name = "content3" cols = "30" rows = "5" value="<?php echo 
					$lunch_feelings; ?>"></textarea></td>
				</tr>
				<tr>
					<td align = "right">Dinner :</td>
					<td><input type = "text" name = "dinner" value="<?php echo $dinner; ?>"></td>
				</tr>
				<tr>
					<td align = "right">Dinner Feelings :</td>
					<td><textarea name = "content4" cols = "30" rows = "5" value="<?php echo 
					$dinner_feelings; ?>"></textarea></td>
				</tr>
				<tr>
					<td align = "right">Snacks and Others :</td>
					<td><input type = "text" name = "others" value="<?php echo $others; ?>"></td>
				</tr>
				<tr>
					<td align = "right">Others Feelings :</td>
					<td><textarea name = "content5" cols = "30" rows = "5" value="<?php echo 
					$others_feelings; ?>"></textarea></td>
				</tr>
				<!--<tr>
					 <td align = "center" colspan = "5"><input type = "submit" name = "update" 
					 value = "Update Now"></td>
				</tr> -->
		<?php } ?>
			</table>
		</form>
	</body>
</html>
