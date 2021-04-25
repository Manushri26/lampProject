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


<style>
    fieldset {
      background-color: #dbd7d2 ;
    }
    legend {
      background-color: #003153 ;
      color: white;
      padding: 5px 10px;
    }
    input {
      margin: 5px;
    }
    </style>
    
</head>
<!!-- navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="box-shadow: 3px 3px 3px 3px;" >
  <a class="navbar-brand" href="Home page.html" style="font-family: 'Avenir Next', serif;" >Synergy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="Home page.html" style="font-family: 'Avenir Next', serif">About<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="registration form.php" style="font-family: 'Avenir Next', serif;">Admission</a>
      <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" href="#" style="font-family: 'Avenir Next',serif; color:white"data-toggle="dropdown">  Academics </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="Cirriculum.html"> Curriculum</a></li>
          <li><a class="dropdown-item" href="AcademicCalender.html"> Acadeimic calender </a></li>
          
          </ul>
      </li>
      <!--<a class="nav-item nav-link active" href="#admission" style="font-family: 'Avenir Next', serif;">Admissions</a>-->
      <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" href="#" style="font-family: 'Avenir Next', serif; color:white"data-toggle="dropdown">  Alumini </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="Alumini.html"> Aluminae</a></li>
          <li><a class="dropdown-item" href="Events.html"> Events </a></li>
          
          </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" href="#" style="font-family: 'Avenir Next', serif; color: white"data-toggle="dropdown">  Profile </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="slogin.php"> Student login</a></li>
          <li><a class="dropdown-item" href="tlogin1.php"> Teacher login </a></li>
        </ul>
    </div>
  </div>
</nav>
<!-- navbar-end -->
<?php
    include 'db.php';
    $conn = OpenCon();
    $idErr = "";
    #echo "Connected Successfully!<br>";
    ?>
    <?php
        function test_input($data)
        {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
    ?>
    <?php
    $str1 = "";
    $str2 = "";
    $str3 = "";
    $str4 = "";
    $str5 = "";
    $str6 = "";
    $str7 = "";
    $str8 = "";
    if (isset($_POST['op']) )
    {
        $op = $_POST['op'];
        $str1 = $_POST['name'];
        $str2 = $_POST['sex'];
        $str3 = $_POST['dob'];
        $str4 = $_POST['hobby'];
        $str5 = $_POST['address'];
        $str6 = $_POST['city'];
        $str7 = $_POST['email'];
        $str8 = $_POST['contact'];
        switch($op)
        {
            case "Submit":
                if (empty($_POST["name"])&&empty($_POST["sex"])&&empty($_POST["dob"])&&empty($_POST["hobby"])&&empty($_POST["address"])&&empty($_POST["city"])&&empty($_POST["email"])&&empty($_POST["contact"])) {
                    $idErr = "Please fill all the details";
                  } else {
                    /*$roll = test_input($_POST["roll"]);
                    if (!preg_match("/^[0-9]{2}[A-Za-z]{3}[0-9]{3}$/",$str1))
                    {
                      $idErr = "Invalid ID format (Ex: 18BCE111)";
                    }
                    else
                    {*/
                        Insertregi($conn,$str1,$str2,$str3,$str4,$str5,$str6,$str7,$str8);
                    //}
                  }

                break;
            case "Clear":
                $str1 = "";
                $str2 = "";
                $str3 = "";
                $str4 = "";
                $str5 = "";
                $str6 = "";
                $str7 = "";
                $str8 = "";
                break;
            default:
                break;
        }
    }
    ?>
<body>  <!-- style="color:black;  background-color:#f4f0ec;" -->
  <div class="content-part">
<form action="" method="post">
	<center><h1 style="font-family: 'Avenir Next', serif; color:#003153 ;"> REGISTRATION FORM FOR STUDENTS </h1></center>
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	<fieldset>
	<legend><h2 style="color:white"> Personal Information </h2></legend>
	&ensp;Name: &emsp;&nbsp;&emsp;&nbsp;
		<input type="text" ="name" name="name" id="name">&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&nbsp;
		<br><br>&ensp;Sex:&nbsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" value="female" name="sex">female
		<input type="radio" value="male" name="sex">male
		<input type="radio" value="other" name="sex">other<br>
        <br>&ensp;DOB:&emsp;&emsp;&emsp;&emsp;<input type="date" min="1990-12-31" max="2020-12-31" name="dob" id="dob"><br>
		<br>&ensp;Hobbies:&nbsp;&emsp;&emsp;&nbsp;<input type="text" value="hobby" name="hobby" id="hobby">
		<br><br>
		</fieldset>
		<fieldset>
	<legend><h2 style="color:white"> Contact Information</h2></legend>
	&ensp;Address: &emsp;&emsp;&nbsp;&nbsp;<input type="text" value="address" name="address" id="address">
		<br><br>
	&ensp;City:&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<input type="text" value="city" name="city" id="city"><br><br>
	&ensp;Email:&emsp;&emsp;&emsp;&nbsp;&emsp;<input type="email" name="email" id="email"><br><br>
	&ensp;Contact no:&emsp;&nbsp;&nbsp;&nbsp;<input type="number" min="10000000" max="999999999" name="contact" id="contact">
		</fieldset>	
	<center><h1>&emsp;
		<input type="submit" name="op" class="btn btn-danger ml-3" value="Submit" />
		<input type="submit" name="op" class="btn btn-danger ml-3" value="Clear" /> &emsp;</h1></center>
	</form>
	</div>
<!-- footer -->
<footer class="footer-main-div" style="box-shadow:5px 5px 5px 5px;">

  <div class="footer-social-icons">
    
    <ul>
      <li> <img class="imgcard" src="LOGO1.PNG" alt="Avatar" style="width:90px;height:90px;" ></li>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
      &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
      &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
      &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
      &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
      <li><a href="Contact-Us.html" target="blank"> <i class="fa fa-linkedin"> </i></a></li>
      <li><a href="Contact-Us.html" target="blank"> <i class="fa fa-envelope"> </i></a></li>
      <li><a href="Contact-Us.html" target="blank"> <i class="fa fa-phone"> </i></a></li>
    </ul>

  </div>



<div class="footer-bottom">

  <p>The Synergy is a virtual platform for students to learn, create and think critically.  </p>

</div>
</footer>
<!-- footer -->
  </body>
  </html>
  