<?php

    include('../dbcon.php');
    $studentId = $_POST['rollno'];
    $tenthdivision=$_POST['tenthdivision'];
    $tenthObtMarks=$_POST['tenthObtMarks'];
    $tenthTotMarks=$_POST['tenthTotMarks'];
    $tenthPercent=$_POST['tenthPercent'];
    $tenthBoard=$_POST['tenthBoard'];
    $tenthDoR=$_POST['tenthDoR'];
    $twelveDegName=$_POST['twelveDegName'];
    $twelveDivision=$_POST['twelveDivision'];
    $twelveObtMarks=$_POST['twelveObtMarks'];
    $twelveTotMarks=$_POST['twelveTotMarks'];
    $TwelvePercent=$_POST['TwelvePercent'];
    $TwelveDoR=$_POST['TwelveDoR'];
    $jeeExamID=$_POST['jeeExamID'];
    $jeeTotalScore=$_POST['jeeTotalScore'];
    $jeeCRLRank=$_POST['jeeCRLRank'];
    $jeeCasteRank=$_POST['jeeCasteRank'];
    $jeeStateCode=$_POST['jeeStateCode'];
    $jeeDoR=$_POST['jeeDoR'];
    $otherDegName=$_POST['otherDegName'];
    $otherDivision=$_POST['otherDivision'];
    $otherObtMarks=$_POST['otherObtMarks'];
    $otherTotMarks=$_POST['otherTotMarks'];
    $otherPercent=$_POST['otherPercent'];
    $otherBoard=$_POST['otherBoard'];
    $otherDoR=$_POST['otherDoR'];
	$qry = "UPDATE `prev` SET `tenthdivision` = '$tenthdivision', `tenthObtMarks` = '$tenthObtMarks', `tenthTotMarks` = '$tenthTotMarks', `tenthPercent` = '$tenthPercent', `tenthBoard` = '$tenthBoard', `tenthDoR` = '$tenthDoR', `twelveDegName` = '$twelveDegName', `twelveDivision` = '$twelveDivision', `twelveObtMarks` = '$twelveObtMarks', `twelveTotMarks` = '$twelveTotMarks', `TwelvePercent` = '$TwelvePercent', `TwelveDoR` = '$TwelveDoR', `jeeExamID` = '$jeeExamID', `jeeTotalScore` = '$jeeTotalScore', `jeeCRLRank` = '$jeeCRLRank', `jeeCasteRank` = '$jeeCasteRank', `jeeStateCode` = '$jeeStateCode', `jeeDoR` = '$jeeDoR', `otherDegName` = '$otherDegName', `otherDivision` = '$otherDivision', `otherObtMarks` = '$otherObtMarks', `otherTotMarks` = '$otherTotMarks', `otherBoard` = '$otherBoard', `otherDoR` = '$otherDoR' WHERE `studentID` = '$studentId' ";

	
	$run = mysqli_query($con,$qry); 
	echo $run;
	if ($run==TRUE) {
		?>

		<script>
			alert('Data Updated Successfully');
			window.open('updateprevform.php?sid=<?php echo $studentId?>','_self');
		</script>
		<?php
	}
?>