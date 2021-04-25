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
        $str1 = $_POST['roll'];
        $str2 = $_POST['name'];
        $str3 = $_POST['fa1'];
        $str4 = $_POST['fa2'];
        $str5 = $_POST['sa1'];
        $str6 = $_POST['fa3'];
        $str7 = $_POST['fa4'];
        $str8 = $_POST['sa2'];
        switch($op)
        {
            case "Submit":
                if (empty($_POST["roll"])) {
                    $idErr = "Roll number is required";
                  } else {
                    $roll = test_input($_POST["roll"]);
                    if (!preg_match("/^[0-9]{2}[A-Za-z]{3}[0-9]{3}$/",$str1))
                    {
                      $idErr = "Invalid ID format (Ex: 18BCE111)";
                    }
                    else
                    {
                        Insertstudents($conn,$str1,$str2,$str3,$str4,$str5,$str6,$str7,$str8);
                    }
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
    <center><body>
        <h1><p style="color:#003153">Insert Data</p></h1><br><br>
        <form action="" method="post" id="quiz-form">
            <input type="text" name="roll" id="roll" placeholder="Rollno" required="required" value="<?php echo $str1; ?>"/><span class="error">* <?php echo $idErr;?></span>&emsp;&emsp;&emsp;
            <input type="text" name="name" id="name" placeholder="Name" required="required" value="<?php echo $str2; ?>"/><br><br>
            <input type="number" name="fa1" id="fa1" placeholder="FA1 score" required="required" value="<?php echo $str3; ?>"/>&emsp;&emsp;&emsp;&emsp;
			<input type="number" name="fa3" id="fa3" placeholder="FA3 score" required="required" value="<?php echo $str6; ?>"/><br><br>
            <input type="number" name="fa2" id="fa2" placeholder="FA2 score " required="required" value="<?php echo $str4; ?>"/>&emsp;&emsp;&emsp;&emsp;
			<input type="number" name="fa4" id="fa4" placeholder="FA4 score" required="required" value="<?php echo $str7; ?>"/><br><br>
            <input type="number" name="sa1" id="sa1" placeholder="SA1 score" required="required" value="<?php echo $str5; ?>"/>&emsp;&emsp;&emsp;&emsp;
			<input type="number" name="sa2" id="sa2" placeholder="SA2 score" required="required" value="<?php echo $str8; ?>"/><br><br>
            <p>Cumulative result: <?php echo $str8; ?></p><br>
            <input type="submit" name="op" class="btn btn-danger ml-3" value="Submit" /> &nbsp&nbsp&nbsp&nbsp
            <input type="submit" name="op" class="btn btn-danger ml-3" value="Clear" /> &nbsp&nbsp&nbsp&nbsp<br><br>
        </form>
        <form action="mainpage.php" method="post" id="quiz-form">
            <input type="submit" action="mainpage.php" class="btn btn-danger ml-3" value="Home" /> &nbsp&nbsp&nbsp&nbsp<br>
        </form>
    </body></center>
    <?php
    CloseCon($conn);
    ?>
</html>