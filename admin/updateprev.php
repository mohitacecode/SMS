<?php
session_start();
        if($_SESSION['uid'])
        {
        	
        }
        else
        {
        	header('location: ../login.php');
        }

?>
<?php

include('header.php');
include('titlehead.php');

?>

</div>
<div style="margin: 0 auto;">
<table style="margin: 0 auto;">
<form action="updateprev.php" method="post">
	<tr>
		<th style="color: black">Enter Student Id</th>
		<td><input type="number" name="studentId" placeholder="ID" required/></td>
	</tr>
	<td colspan="2"><input type="submit" name="submit" value="search"></td>
	</tr>
	
</form>
</table>
</div>
<table align="center" width="100%" border="1">
	<tr style="background-color: #000;color: #fff">
		<th>Student Id</th>
		<th>tenthdivision</th>
		<th>tenthObtMarks</th>
		<th>tenthTotMarks</th>
		<th>tenthPercent</th>
		<th>tenthBoard</th>
		<th>tenthDoR</th>
		<th>twelveDegName</th>
		<th>twelveDivision</th>
		<th>twelveObtMarks</th>
		<th>twelveTotMarks</th>
		<th>TwelvePercent</th>
		<th>TwelveDoR</th>
		<th>jeeExamID</th>
		<th>jeeTotalScore</th>
		<th>jeeCRLRank</th>
		<th>jeeCasteRank</th>
        <th>jeeStateCode</th>
		<th>jeeDoR</th>
		<th>otherDegName</th>
		<th>otherObtMarks</th>
		<th>otherTotMarks</th>
		<th>otherPercent</th>
        <th>otherBoard</th>
		<th>otherDoR</th>
	</tr>
	<?php
if (isset($_POST['submit'])) {
	include('../dbcon.php');
	$studentId =$_POST['studentId'];
	$sql="SELECT * FROM `prev` WHERE `studentId`='$studentId'";
	$run = mysqli_query($con,$sql);   
	if (mysqli_num_rows($run)<1) {
		echo "<tr><td colspan='5'>No Record Found</td></tr>";
	}
	else{
		$count=0;
		while ($data =mysqli_fetch_assoc($run)) {
			$count++;
			?>
			<tr align="center" style="color: black">
					<td><?php echo $data['studentID'];?></td>
					<td><?php echo $data['tenthDivision'];?></td>
					<td><?php echo $data['tenthObtMarks'];?></td>
					<td><?php echo $data['tenthTotMarks'];?></td>
					<td><?php echo $data['tenthPercent'];?></td>
					<td><?php echo $data['tenthBoard'];?></td>
					<td><?php echo $data['tenthDoR'];?></td>
					<td><?php echo $data['twelveDivision'];?></td>
					<td><?php echo $data['twelveDegName'];?></td>
					<td><?php echo $data['twelveObtMarks'];?></td>
					<td><?php echo $data['twelveTotMarks'];?></td>
					<td><?php echo $data['TwelvePercent'];?></td>
					<td><?php echo $data['TwelveDoR'];?></td>
					<td><?php echo $data['jeeExamID'];?></td>
					<td><?php echo $data['jeeTotalScore'];?></td>
					<td><?php echo $data['jeeCRLRank'];?></td>s
					<td><?php echo $data['jeeCasteRank'];?></td>
					<td><?php echo $data['jeeStateCode'];?></td>
					<td><?php echo $data['jeeDoR'];?></td>
					<td><?php echo $data['otherDegName'];?></td>
					<td><?php echo $data['otherDivision'];?></td>
					<td><?php echo $data['otherObtMarks'];?></td>
					<td><?php echo $data['otherTotMarks'];?></td>
					<td><?php echo $data['otherPercent'];?></td>
					<td><?php echo $data['otherBoard'];?></td>
					<td><?php echo $data['otherDoR'];?></td>
                    <td><a href="updateprevform.php?sid=<?php echo $data['studentID'];?>">Edit</a></td>
			</tr>

			<?php
		}
	}
}
?>

</table>

</body>
</html>
