<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="script.js">
</script>
<link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Synergy</title>
<meta charset="UTF-8">
<style type="text/css">
.wrapper{
width: 500px;
margin: 0 auto;
}
</style>
</head>
<body style="background-color:#f4f0ec;">


<!-- navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="box-shadow: 3px 3px 3px 3px;" >
  <a class="navbar-brand" href="#" style="font-family: 'Avenir Next', serif;" >Synergy</a>
</nav>
<!-- navbar-end -->
<?php
// Include database connection file
require_once "db.php";

    $conn = OpenCon();
    $idErr = "";
    #echo "Connected Successfully!<br>";
if(count($_POST)>0) {
	
$cumu = 0.1*$_POST['fa1'] + 0.1*$_POST['fa2'] + 0.2*$_POST['sa1'] +0.1*$_POST['fa3'] + 0.1*$_POST['fa4'] + 0.4*$_POST['sa2'];
mysqli_query($conn,"UPDATE `student marks` set  `Name`='" . $_POST['name'] . "',`FA1 score`='" . $_POST['fa1'] . "',`FA2 score`='" . $_POST['fa2'] . "',`SA1 score`='" . $_POST['sa1'] . "',`FA3 score`='" . $_POST['fa3'] . "',`FA4 score`='" . $_POST['fa4'] . "',`SA2 score`='" . $_POST['sa2'] . "',`Cumulative result`='" . $cumu . "' WHERE `Roll number`='" . $_POST['rno'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM `student marks` WHERE `Roll number`='" . $_GET['userid'] . "'");
$row= mysqli_fetch_array($result);
?>
<html lang="en">
<body>
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="page-header">
<h2>Update Record</h2>
</div>
<p>Please edit the input values and submit to update the record.</p>
<form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" value="<?php echo $row["Name"]; ?>">
</div>
<div class="form-group ">
<label>FA1 score</label>
<input type="number" name="fa1" class="form-control" value="<?php echo $row["FA1 score"]; ?>">
</div>
<div class="form-group ">
<label>FA2 score</label>
<input type="number" name="fa2" class="form-control" value="<?php echo $row["FA2 score"]; ?>">
</div>
<div class="form-group ">
<label>SA1 score</label>
<input type="number" name="sa1" class="form-control" value="<?php echo $row["SA1 score"]; ?>">
</div>
<div class="form-group ">
<label>FA3 score</label>
<input type="number" name="fa3" class="form-control" value="<?php echo $row["FA3 score"]; ?>">
</div>
<div class="form-group ">
<label>FA4 score</label>
<input type="number" name="fa4" class="form-control" value="<?php echo $row["FA4 score"]; ?>">
</div>
<div class="form-group ">
<label>SA2 score</label>
<input type="number" name="sa2" class="form-control" value="<?php echo $row["SA2 score"]; ?>">
</div>
<input type="hidden" name="rno" value="<?php echo $row["Roll number"]; ?>"/>
<input type="submit" class="btn btn-danger ml-3" value="Submit">
<a href="fetch1.php" class="btn btn-danger ml-3">Cancel</a>
</form>
</div>
</div>        
</div>
</div>
</body>
</html>