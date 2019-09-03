<!DOCTYPE html>

<html>

	<head>

		<!--https://titan.csit.rmit.edu.au/~s3723825/Tutorial/-->

		<title>Super cool website</title>

		<link rel="stylesheet" href="mainStyle.css">
		<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
		<form action = "Tester.php" target="_self" method="post"/>
		<script src="main.js"></script>
		<script>

		</script>
	</head>

	<body>

		<nav>
			<div id ="navcontent">
				<div id = "navletter">

					this is probably functional 


				</div>

				<div id="navlinks">

					<ul>

						<a href="index.html"><li> Tutorial 3</li></a>

						<a href="Tutorial 4.html"><li> Tutorial 4 </li></a>

						<a href="Tutorial 5.html"><li> Tutorial 5 </li></a>

						<a href="Tutorial 6.html"><li> Tutorial 6 </li></a>

						<a href="Tutorial 7.html"><li> Tutorial 7 </li></a>


					</ul>

				</div>

				<footer>
					Lachlan Gower 2018 &copy;
				</footer>
			</div>
		</nav>

		<main onclick ="rickRoll(0)">
			<header>
				<a class = "externallinks" href = "https://saturn.csit.rmit.edu.au/~s3723825/wp/index.html"> A1 </a>
				<a class = "externallinks" href = "https://www.w3schools.com"> W3Schools </a>
				<a class = "externallinks" href = "https://saturn.csit.rmit.edu.au/~e54061/wp/lectures/"> Lecture Slides </a>
				<a class = "externallinks" href = "https://rmit.instructure.com"> Canvas </a>
			</header>
			<br>
			<br>
			<br>
			<?php
			$fp = fopen("pizzas.txt","r");
			flock($fp, LOCK_SH);
			$headings = fgetcsv($fp,0,"\t");
			while ($line = fgetcsv($fp, 0, "\t")) 
			{
				for($x=1; $x<count($line); $x++)
				{
					if($headings[$x] == 'extras' || ){
						$pizzas[$x][$headings[$x]][] = $line[$x];
					}else{
						$pizzas[$x][$headings[$x]] = $line[$x];
					}
				}
			}
			flock($fp, LOCK_UN);
			fclose($fp);

			$writeString='';
			foreach ($pizzas as $i => $pizza) {
				$writeString.="*** Pizza $i ***********\n"; // start of each order
				foreach ($pizza as $info => $details) {
					if ($info != 'extras') { // base, type, size, price etc
						$writeString .= $info.': '.$details."\n"; 
					} else { // the extra toppings array
						$writeString .= "Extra Toppings:\n";
						foreach ($details as $which => $topping) {
							$toppingName = ($topping === true ? 'YES' : $topping);
							$writeString .= "\t".$which.': '.$toppingName."\n";  
						}
					}
				}
				$writeString .= "*** End of Pizza $i ***********\n";  // end of each order
			}
			file_put_contents('orders.txt', $writeString, FILE_APPEND | LOCK_EX);
			?>
			</select>



		</main>

	</body>
<script src="main.js"></script>
</html>