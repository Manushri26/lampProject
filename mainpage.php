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

</head>
<body style="background-color:#f4f0ec;">


<!-- navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="box-shadow: 3px 3px 3px 3px;" >
  <a class="navbar-brand" href="#" style="font-family: 'Avenir Next', serif;" >Synergy</a>
</nav>
<!-- navbar-end -->
<html><center>
    <body><br><br>
        <h1><p style="color:#003153">Students Marking System</p></h1><br><br>
		
		<form action="in.php" method="post" id="quiz-form">
            <input type="submit" action="in.php" class="btn btn-danger ml-3" value="Insert Record" /> &nbsp&nbsp&nbsp&nbsp<br><br>
        </form>
        <form action="del.php" method="post" id="quiz-form">
            <input type="submit" action="del.php" class="btn btn-danger ml-3" value="Delete Record" /> &nbsp&nbsp&nbsp&nbsp<br><br>
        </form>
        <form action="fetch1.php" method="post" id="quiz-form">
            <input type="submit" action="fetch1.php" class="btn btn-danger ml-3" value="Update Record" /> &nbsp&nbsp&nbsp&nbsp<br><br>
        </form>
        <form action="show.php" method="post" id="quiz-form">
            <input type="submit" action="show.php" class="btn btn-danger ml-3" value="Display Record" /> &nbsp&nbsp&nbsp&nbsp<br><br>
        </form>
		<form action="twelcome.php" method="post" id="quiz-form">
            <input type="submit" action="twelcome.php" class="btn btn-danger ml-3" value="Home" /> &nbsp&nbsp&nbsp&nbsp<br>
        </form>
    </body></center>
</html>