<!DOCTYPE html>
<html>
	<body>
<?php 
	include("index.php");
	include("includes/connect.php");
	
	$date = @$_GET['edit'];
	
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

<form method = "post" action = "edit.php?edit_form=<?php echo $date; ?>">
			<table align = "center" border = "10" width = "600">
				<tr>
					<td align = "center" colspan = "5" bgcolor = "magenta">
						<h1 style = "color : cyan;">Update This Record</h1>
					</td>
				</tr>
				<tr>
					<td align = "right">Sleeping Pill :</td>
					<td><input type = "text" name = "sl_pill1" value="<?php echo $sleeping_pill; ?>"></td>
				</tr>
				<tr>
					<td align = "right">Sleep :</td>
					<td><input type = "text" name = "sleep1" value="<?php echo $sleep; ?>"></td>
				</tr>
				<tr>
					<td align = "right">Problem in Sleep :</td>
					<td><input type = "text" name = "pb_sleep1" value="<?php echo $sleeping_problem; ?>"></td>
				</tr>
				<tr>
					<td align = "right">Stool :</td>
					<td><input type = "text" name = "stool1" value="<?php echo $stool; ?>"></td>
				</tr>
				<tr>
					<td align = "Right">Stool Feelings :</td>
					<td><textarea name = "content11" cols = "30" rows = "5" value="<?php echo 
					$stool_feelings; ?>"></textarea></td>
				</tr>
				<tr>
					<td align = "right">Breakfast :</td>
					<td><input type = "text" name = "breakfast1" value="<?php echo $breakfast; ?>"></td>
				</tr>
				<tr>
					<td align = "right">Breakfast feelings :</td>
					<td><textarea name = "content21" cols = "30" rows = "5" value="<?php echo 
					$breakfast_feelings; ?>"></textarea></td>
				</tr>
				<tr>
					<td align = "right">Lunch :</td>
					<td><input type = "text" name = "lunch1" value="<?php echo $lunch; ?>"></td>
				</tr>
				<tr>
					<td align = "right">Lunch Feelings :</td>
					<td><textarea name = "content31" cols = "30" rows = "5" value="<?php echo 
					$lunch_feelings; ?>"></textarea></td>
				</tr>
				<tr>
					<td align = "right">Dinner :</td>
					<td><input type = "text" name = "dinner1" value="<?php echo $dinner; ?>"></td>
				</tr>
				<tr>
					<td align = "right">Dinner Feelings :</td>
					<td><textarea name = "content41" cols = "30" rows = "5" value="<?php echo 
					$dinner_feelings; ?>"></textarea></td>
				</tr>
				<tr>
					<td align = "right">Snacks and Others :</td>
					<td><input type = "text" name = "others1" value="<?php echo $others; ?>"></td>
				</tr>
				<tr>
					<td align = "right">Others Feelings :</td>
					<td><textarea name = "content51" cols = "30" rows = "5" value="<?php echo 
					$others_feelings; ?>"></textarea></td>
				</tr>
				<tr>
					 <td align = "center" colspan = "5"><input type = "submit" name = "update" 
					 value = "Update Now"></td>
				</tr>
		<?php } ?>
			</table>
		</form>
	</body>
</html>

<?php 
	if(isset($_POST['update']))
	{
		$update_date = $_GET['edit_form'];

		$U_sleeping_pill = $_POST['sl_pill1'];
		$U_sleep = $_POST['sleep1'];
		$U_sleeping_problem = $_POST['pb_sleep1'];
		$U_stool = $_POST['stool1'];
		$U_stool_feelings = $_POST['content11'];
		$U_breakfast = $_POST['breakfast1'];
		$U_breakfast_feelings = $_POST['content21'];
		$U_lunch = $_POST['lunch1'];
		$U_lunch_feelings = $_POST['content31'];
		$U_dinner = $_POST['dinner1'];
		$U_dinner_feelings = $_POST['content41'];
		$U_snacks_and_others = $_POST['others1']; 
		$U_others_feelings = $_POST['content51'];
		
		$update_query = "UPDATE health_chart SET `Sleeping pill` = '$U_sleeping_pill',`Sleep` = '$U_sleep',
		`Problem in sleep` = '$U_sleeping_problem',`Stool` = '$U_stool',`Feelings_Stool` = '$U_stool_feelings',`Breakfast` = '$U_breakfast',`Feelings_Breakfast` = '$U_breakfast_feelings',`Lunch` ='$U_lunch',`Feelings_Lunch` = '$U_lunch_feelings',`Dinner` = '$U_dinner',`Feelings_Dinner` = '$U_dinner_feelings',`Snacks and Others` = '$U_snacks_and_others',`Feelings_Others` = '$U_others_feelings' WHERE `Date` = '$update_date'";
		
		if(mysqli_query($con,$update_query))
		{
			
			echo "<script>window.open('index.php?updated=A Post has been updated !!!','_self')</script>";
		}
		else
		{
			echo "Error : " . $update_query.mysqli_error($con);
		}
	}
?>
