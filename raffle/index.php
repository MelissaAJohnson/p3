<h1>Raffle</h1>
<head>
	<?php include "logic.php" ?>
</head>
<body>
	<?php
	# define array
	$contestants = Array(
		'Sam',
		'Eliot',
		'Liz',
		'Max'
	);

	# print winning number
	echo "The winning number is ".$winning_number."</br>";
	echo "</br>";

	# 1. traverse array
	# 2. assign a random number for every person in the array
	# 3. check to see if person's random number matches winning number
	# 4. print contestant's number, contestant name, and result
	foreach($contestants as $contestant){
		$contestant_number = rand(1,10);
		if ($contestant_number == $winning_number){
			$result = 'winner!';
		} else {
			$result = 'loser :(';
		}
		echo $contestant_number." - ".$contestant." is a ".$result."</br>";
	}

	?>

</body>


