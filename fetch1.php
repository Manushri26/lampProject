<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>PHP code to retrieve and update data from MySQL database</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
.bs-example{
margin: 20px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
</head>
<body>
<div class="bs-example">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<center><h1><p style="color:#003153">Update Student Data</p></h1></center><br>
</div>
<?php
include_once 'db.php';

    $conn = OpenCon();
    $idErr = "";
    #echo "Connected Successfully!<br>";
$result = mysqli_query($conn,"SELECT * FROM `student marks`");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered table-striped'>
<tr>
<td>Name</td>
<td>FA1 score</td>
<td>FA2 score</td>
<td>SA1 score</td>
<td>FA3 score</td>
<td>FA4 score</td>
<td>SA2 score</td>
<td>Action</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["Name"]; ?></td>
<td><?php echo $row["FA1 score"]; ?></td>
<td><?php echo $row["FA2 score"]; ?></td>
<td><?php echo $row["SA1 score"]; ?></td>
<td><?php echo $row["FA3 score"]; ?></td>
<td><?php echo $row["FA4 score"]; ?></td>
<td><?php echo $row["SA2 score"]; ?></td>
<td><a href="update1.php?userid=<?php echo $row["Roll number"]; ?>">Update</a></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>
</div>
</div>        
</div>
</div>
<center><a href="mainpage.php" class="btn btn-danger ml-3">Back</a></center>
</body>
</html>