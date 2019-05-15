<html>
<link rel="stylesheet" href="css/style.css">

<?php 

	$fid = $_GET['id'];

?>
<body>
<div class="wrapper">

<h1>Thank You!!</h1>
<br />
<br />

<center><img src="image/end.jpg" width=40% height=56%></center>


<?php
	$answer1= $_POST['answerOne'];
	$answer2= $_POST['answerTwo'];
	$answer3= $_POST['answerThree'];
	$answer4= $_POST['answerFour'];
	$answer5= $_POST['answerFive'];
	$answer6= $_POST['answerSix'];
	$answer7= $_POST['answerSeven'];
	$answer8= $_POST['answerEight'];
	$answer9= $_POST['answerNine'];
	$answer10= $_POST['answerTen'];
	$score = 0;
	
	if ($answer1 == "A"){$score++;}
	if ($answer2 == "B"){$score++;}
	if ($answer3 == "C"){$score++;}
	if ($answer4 == "B"){$score++;}
	if ($answer5 == "D"){$score++;}
	if ($answer6 == "C"){$score++;}
	if ($answer7 == "A"){$score++;}
	if ($answer8 == "D"){$score++;}
	if ($answer9 == "C"){$score++;}
	if ($answer10 == "B"){$score++;}
	echo "<h2>Your Score is <br> $score/10</h2>";
	
?>



</div>

</body>
</html>