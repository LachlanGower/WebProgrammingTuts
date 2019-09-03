<html>
<body>

Name: <?php echo $_POST["name"]; ?><br>
Password: <?php echo $_POST["password"]; ?> <br>
client-rating: <?php echo $_POST["client-rating"]; ?>

<br><br>Radio <br>
Gender:
<?php 

	if(empty($_POST["gender"])){
		echo(" You didn't specify a gender <br>");
	}else{
		$Radio = $_POST["gender"];
		echo(" You selected Gender: $Radio");
		
	}
?>
 <br><br>
 
 CheckBox<br>
<?php
  if(empty($_POST['seeks']))
  {
    echo("You didn't specify a gender <br>");
  }
  else
  {
	$Gender = $_POST['seeks'];
    $N = count($Gender);
    echo("You selected $N Genders: ");
    for($i=0; $i < $N; $i++)
    {
      echo($Gender[$i] . " ");
    }
	echo("<br>");
  }
?>

<br>TextArea<br>
<?php 

	if(empty($_POST["textarea"])){
		echo(" You didn't specify any text <br>");
	}else{
		$TextArea = $_POST["textarea"];
		echo("Your text was: $TextArea");
		
	}
?>

</body>
</html>