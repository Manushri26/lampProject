

<html>
<head><title>Array Key-Value</title></head>

<form method='post'>
<pre>
Enter keys whose value is to be found :<input type='text' name='str1'><br>                                           
        <input type=submit value= 0k ><input type=reset value=cancel></h2>
</pre>
</form>
<?php
		
		if(isset($_POST['str1']))
		{
			$str1=$_POST['str1'];
			$arr1=array("c1"=>"red", "c2"=>"green", "c3"=>"white", "c4"=>"black");
			$arr=explode(",",$str1);
			for ($x = 0; $x < sizeof($arr); $x++) {
				if(array_key_exists($arr[$x],$arr1))
				{
					echo "The value for ".$arr[$x]." is:". $arr1[$arr[$x]]." <br>";
				}
				else
				{
					echo "key ".$arr[$x]." is not applicable. <br>";
				}
			}
		}
?>
</body>
</html>