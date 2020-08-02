<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
	<style>
	#wall{
		height: 650px;
		width:50%;
	}
	ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}

body {
	background: linear-gradient(#141e30, #243b55);
	height: 1000px
	
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

	</style>
</head>
<body>
<ul>
  <li><a href="login.php">Admin Login</a></li>
  <li><a class="active" href="index.php">HomePage</a></li>
  <li><a href="wallPage.php">Student Wall</a></li>
</ul>
<div>

<h1 align="center">Welcome to Student Management System</h1>

<form method="post" action="prevrecord.php">
<table id="customers" style="width: 30%;" align="center" border="1">
	<tr>
		<td colspan="2" align="center">Student Previous Records</td>
	</tr>
	<tr>
		<td>Enter StudentId.</td>
		<td align="left">
			<input type="text" name="rollno" required/>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="submit" value="Show Info."></td>
	</tr>
</table>
</form>

</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$studentId =$_POST['rollno'];
    include('dbcon.php');
    $sql="SELECT * FROM `prev` WHERE `studentId`='$studentId'";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)>0) {
        $data = array();
        while ($data =  mysqli_fetch_assoc($run)){
		?>
		<br />
		<table id="customers">
				<tr>
					<td>StudentId</td>
					<td><?php echo $data['studentID'];?></td>
				</tr>
                <tr>
					<td>tenthDivision</td>
					<td><?php echo $data['tenthDivision'];?></td>
				</tr>
                <tr>
					<td>tenthObtMarks</td>
					<td><?php echo $data['tenthObtMarks'];?></td>
				</tr>
                <tr>
					<td>tenthTotMarks</td>
					<td><?php echo $data['tenthTotMarks'];?></td>
				</tr>
                <tr>
					<td>tenthPercent</td>
					<td><?php echo $data['tenthPercent'];?></td>
				</tr>
                <tr>
					<td>tenthBoard</td>
					<td><?php echo $data['tenthBoard'];?></td>
				</tr>
                <tr>
					<td>tenthDoR</td>
					<td><?php echo $data['tenthDoR'];?></td>
				</tr>
                <tr>
					<td>twelveDivision</td>
					<td><?php echo $data['twelveDivision'];?></td>
				</tr>
                <tr>
					<td>twelveDegName</td>
					<td><?php echo $data['twelveDegName'];?></td>
				</tr>
                <tr>
					<td>twelveObtMarks</td>
					<td><?php echo $data['twelveObtMarks'];?></td>
				</tr>
                <tr>
					<td>twelveTotMarks</td>
					<td><?php echo $data['twelveTotMarks'];?></td>
				</tr>
                <tr>
					<td>TwelvePercent</td>
					<td><?php echo $data['TwelvePercent'];?></td>
				</tr>
                <tr>
					<td>TwelveDoR</td>
					<td><?php echo $data['TwelveDoR'];?></td>
				</tr>
                <tr>
					<td>jeeExamID</td>
					<td><?php echo $data['jeeExamID'];?></td>
				</tr>
                <tr>
					<td>jeeTotalScore</td>
					<td><?php echo $data['jeeTotalScore'];?></td>
				</tr>
                <tr>
					<td>jeeCRLRank</td>
					<td><?php echo $data['jeeCRLRank'];?></td>
				</tr>
                <tr>
					<td>jeeCasteRank</td>
					<td><?php echo $data['jeeCasteRank'];?></td>
				</tr>
                
                <tr>
					<td>jeeStateCode</td>
					<td><?php echo $data['jeeStateCode'];?></td>
				</tr>
                <tr>
					<td>jeeDoR</td>
					<td><?php echo $data['jeeDoR'];?></td>
				</tr>
                <tr>
					<td>otherDegName</td>
					<td><?php echo $data['otherDegName'];?></td>
				</tr>
                
                <tr>
					<td>otherDivision</td>
					<td><?php echo $data['otherDivision'];?></td>
				</tr>
                <tr>
					<td>otherObtMarks</td>
					<td><?php echo $data['otherObtMarks'];?></td>
				</tr>
                <tr>
					<td>otherTotMarks</td>
					<td><?php echo $data['otherTotMarks'];?></td>
				</tr>
                <tr>
					<td>otherPercent</td>
					<td><?php echo $data['otherPercent'];?></td>
				</tr>
                <tr>
					<td>otherBoard</td>
					<td><?php echo $data['otherBoard'];?></td>
				</tr>
                <tr>
					<td>otherDoR</td>
					<td><?php echo $data['otherDoR'];?></td>
				</tr>
			</tr>
		</table>

		<?php
		
    }
}

	else
	{
		echo "<script>alert('No Student Record Found');</script>";
	}
}

?>
</div>