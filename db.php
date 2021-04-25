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
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(odd){background-color: white;}

#customers tr:hover {background-color: white;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #c40d0d ;
  color: white;
}
</style>
</head>
<body style="background-color:#f4f0ec;">


<html>
<body>
<?php

    function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "faculty_db";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
    }

    function CloseCon($conn)
     {
        $conn -> close();
     }

    function Insertstudents($conn,$str1,$str2,$str3,$str4,$str5,$str6,$str7,$str8)
    {
		$cumu = 0.1*$str3 + 0.1*$str4 + 0.2*$str5 +0.1*$str6 + 0.1*$str7 + 0.4*$str8;
        $sql = "INSERT INTO `student marks` (`Name`, `Roll number`, `FA1 score`, `FA2 score`, `SA1 score`, `FA3 score`, `FA4 score`, `SA2 score`,  `Cumulative result`) VALUES ('$str2','$str1','$str3','$str4','$str5','$str6','$str7','$str8','$cumu')";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            #echo "The record has been inserted successfully!<br>";
        }
        else
        {
            echo "The record was not inserted successfully.<br>";
            echo mysqli_error($conn);
        }
    }
	
	function Insertregi($conn,$str1,$str2,$str3,$str4,$str5,$str6,$str7,$str8)
    {
        $sql = "INSERT INTO `regiform` (`name`, `sex`, `dob`, `Hobby`, `Address`, `City`, `Email`, `Contact`) VALUES ('$str1','$str2','$str3','$str4','$str5','$str6','$str7','$str8')";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            #echo "The record has been inserted successfully!<br>";
        }
        else
        {
            echo "The record was not inserted successfully.<br>";
            echo mysqli_error($conn);
        }
    }

    function Deletestudents($conn,$roll,$name)
    {
        $sql = "DELETE FROM `student marks` WHERE `Roll number` = '$roll'";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
           # echo "The record has been deleted successfully!<br>";
        }
        else
        {
            echo "The record was not deleted successfully.<br>Please check that the ID and Email again. ";
            echo mysqli_error($conn);
        }
    }

    function Displaystudents($conn)
    {
        $sql = "SELECT * FROM `student marks`";
        $result = mysqli_query($conn,$sql);?>
        <table id="customers"><thead><tr><th><strong>Name</strong></th><th><strong>Roll number</strong></th><th><strong>FA1 score</strong></th><th><strong>FA2 score</strong></th><th><strong>SA1 score</strong></th><th><strong>FA3 score</strong></th><th><strong>FA4 score</strong></th><th><strong>SA2 score</strong></th><th><strong>Cumulative score</strong></th></thead>
        <tbody>
        <?php while($row = mysqli_fetch_assoc($result))
        {
            ?><tr><td align = "center"><?php echo $row["Name"]; ?></td><td align = "center"><?php echo $row["Roll number"]; ?></td><td align = "center"><?php echo $row["FA1 score"]; ?></td><td align = "center"><?php echo $row["FA2 score"]; ?></td><td align = "center"><?php echo $row["SA1 score"]; ?></td><td align = "center"><?php echo $row["FA3 score"]; ?></td><td align = "center"><?php echo $row["FA4 score"]; ?></td><td align = "center"><?php echo $row["SA2 score"]; ?></td><td align = "center"><?php echo $row["Cumulative result"]; ?></td></tr><?php
        }
    }
?>
</tbody>
</table>
</body>
</html>