<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<ul>
  <li><a href="login.php">Admin Login</a></li>
  <li><a href="index.php">HomePage</a></li>
  <li><a class="active" href="wall.php">Student Wall</a></li>
</ul>
<h4><a href="wall.php" style="float:right;margin-right:30px; color:#fff;font-size:20px"> <button class = "button">POST</button></a></h4>
<h1 style = "color:white">Student Wall</h1>
<?php
	include('dbcon.php');
	$sql="SELECT * FROM `wall`";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)>0) {
        $data = array();
        while ($data =  mysqli_fetch_assoc($run)){
        // $records =mysqli_fetch_assoc($run);
        
		?>
		<br />
                <div class="row">
                    <div class="column">
                        <div class="card">
                        <h3>studentId : <?php echo $data['studentId'];?></h3>
                        <p>Semester : <?php echo $data['semester'];?></p>
                        <p>Message : <?php echo $data['msg'];?></p>
                        </div>
                    </div>
                </div>
		<?php
        
        }
	}
	else
	{
		echo "<script>alert('No Record Found');</script>";
	}

  ?> 
</body>
</html>

