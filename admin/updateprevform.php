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
<?php
include('../dbcon.php');
$sid =$_GET['sid'];
$sql ="SELECT * FROM `prev` WHERE studentId='$sid'";
$run = mysqli_query($con,$sql);
$data =mysqli_fetch_assoc($run);

?>
<form method="post" action="updateprevdata.php" enctype="multipart/form-data">
	<table border="1"  style="line-height: 140%; width: 100%; color:black; text-align: center;font-style: italic;" >
    <tr>
			<td>Student Id</td>
			<td><input type="text" name="rollno" value=<?php echo $data['studentID'];?>> </td>
		</tr>
		<tr>
			<td>Tenth Division</td>
			<td><input type="text" name="tenthdivision" value=<?php echo $data['tenthDivision'];?> required/> </td>
		</tr>
		<tr>
			<td>TenthObtMarks</td>
			<td><input type="text" name="tenthObtMarks" value=<?php echo $data['tenthObtMarks'];?> required/> </td>
		</tr>
		<tr>
			<td>TenthTotMarks</td>
			<td><input type="text" name="tenthTotMarks" value=<?php echo $data['tenthTotMarks'];?> required/> </td>
		</tr>
		<tr>
			<td>Tenth Percent</td>
			<td><input type="text" name="tenthPercent" value=<?php echo $data['tenthPercent'];?> required/> </td>
		</tr>
		<tr>
		<td>Tenth Board</td>	
		<td><input type="text" name="tenthBoard" value=<?php echo $data['tenthBoard'];?> required/> </td>
		</tr>
		<tr>
			<td>Tenth DOR</td>
			<td><input type="date" name="tenthDoR" value=<?php echo $data['tenthDoR'];?> required/> </td>
		</tr>
		<tr>
			<td>Twelve Deg Name</td>
			<td><input type="text" name="twelveDegName" value=<?php echo $data['twelveDegName'];?> required/> </td>
		</tr>
		<tr>
			<td>Twelve Divison</td>
			<td><input type="text" name="twelveDivision" value=<?php echo $data['twelveDivision'];?> required/> </td>
		</tr>
		<tr>
		<td>TwelveObtMarks</td>
			<td><input type="text" name="twelveObtMarks" value=<?php echo $data['twelveObtMarks'];?> required/> </td>
		</tr>
		<tr>
		<td>TwelveTotMarks</td>
			<td><input type="text" name="twelveTotMarks" value=<?php echo $data['twelveTotMarks'];?> required/> </td>
		</tr>
		<tr>
		<td>Twelve Percent</td>
			<td><input type="text" name="TwelvePercent" value=<?php echo $data['TwelvePercent'];?> required/> </td>
		</tr>
		<tr>
		<td>Twelve DOR</td>
			<td><input type="date" name="TwelveDoR" value=<?php echo $data['TwelveDoR'];?> required/> </td>
		</tr>
		<tr>
			<td>jee Exam Id</td>
			<td><input type="text" name="jeeExamID" value=<?php echo $data['jeeExamID'];?> required/> </td>
		</tr>
		<tr>
			<td>jee Total Score</td>
			<td><input type="text" name="jeeTotalScore" value=<?php echo $data['jeeTotalScore'];?> required/> </td>
		</tr>
		<tr>
			<td>jee CRL Rank</td>
			<td><input type="text" name="jeeCRLRank" value=<?php echo $data['jeeCRLRank'];?> required/> </td>
		</tr>

		<tr>
			<td>jee Caste Rank</td>
			<td><input type="text" name="jeeCasteRank" value=<?php echo $data['jeeCasteRank'];?> required/> </td>
		</tr>
		<tr>
			<td>jee State Code </td>
			<td><input type="text" name="jeeStateCode" value=<?php echo $data['jeeStateCode'];?> required/> </td>
		</tr>
	    <tr>
			<td>jee DoR </td>
			<td><input type="date" name="jeeDoR" value=<?php echo $data['jeeDoR'];?> required/> </td>
		</tr>
		<tr>
			<td>otherDegName </td>
			<td><input type="text" name="otherDegName" value=<?php echo $data['otherDegName'];?> required/> </td>
		</tr>
		<tr>
			<td>otherDivision </td>
			<td><input type="text" name="otherDivision" value=<?php echo $data['otherDivision'];?> required/> </td>
		</tr>
		<tr>
			<td>otherObtMarks </td>
			<td><input type="text" name="otherObtMarks" value=<?php echo $data['otherObtMarks'];?> required/> </td>
		</tr>
		<tr>
			<td>otherTotMarks </td>
			<td><input type="text" name="otherTotMarks" value=<?php echo $data['otherTotMarks'];?> required/> </td>
		</tr>
		<tr>
			<td>otherPercent </td>
			<td><input type="text" name="otherPercent" value=<?php echo $data['otherPercent'];?> required/> </td>
		</tr>
		<tr>
			<td>otherBoard </td>
			<td><input type="text" name="otherBoard" value=<?php echo $data['otherBoard'];?> required/> </td>
		</tr>
		<tr>
			<td>otherDoR </td>
			<td><input type="date" name="otherDoR" value=<?php echo $data['otherDoR'];?> required/> </td>
		</tr>

	</table>
	<input type="submit" value="submit" name = "submit" id = "submit">
</form>	