<!DOCTYPE html>
<html lang="en">
<head>
<style>
/* Float four columns side by side */
.column {
  /* float: left; */
  /* width: 25%;
  padding: 0 10px; */
  width: 80%;
  margin: 0 auto;
  padding: 20px;
  
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
    align : center;
    margin: auto;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  border-radius : 20px;
}

div.row>div:nth-of-type(odd) {
  background: #ebebe0;
}
div.row>div:nth-of-type(even) {
  background: #b8b894;
}
/* .card:nth-of-type(odd) {
    background: #ebebe0;
} */
.card:nth-of-type(even) {
    background:#b8b894;
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
h1 {text-align:center;}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 20px;
}
body {
	background: linear-gradient(#141e30, #243b55);
	
}
</style>
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

