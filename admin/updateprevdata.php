<?php

    include('../dbcon.php');
    $rollno=$_POST['rollno'];
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
	$qry = "UPDATE `prev` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `pcont` = '$pcont', `standard` = '$std' WHERE `id` = '$id' ";

	
	$run = mysqli_query($con,$qry); 
	echo $run;
	if ($run==TRUE) {
		?>

		<script>
			alert('Data Updated Successfully');
			window.open('updateform.php?sid=<?php echo $id?>','_self');
		</script>
		<?php
	}
?>