<html>
<meta charset="utf-8">
    <link rel="stylesheet" href="css/Style.css">
<head>

    <title>JeremiePhpQuiz</title>
</head>

<?php
	$rid = rand(1,2);
	echo $rid;
?>

<div class='wrapper'>

<h1>General Knowledge Quiz</h1>
<br />
<br />
<br /><br />

<?php

if ($rid == 1){
	
	echo "
<form action='process.php?id=1' method='post' id='quizForm' id='1'>


	<ol>
    
   
    	<li>
        <h3>What is my name?</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>Jeremie</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>Galileo</label>
        </div>

        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>Jenny</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='D' />
        <label for='answerOneD'>Jane</label>
        </div>
        </li>
        
     
        <li>
        <h3>Whats the capital city of England?</h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>Liverpool</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>London</label>
        </div>

        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>Wales</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='D' />
        <label for='answerTwoD'>Manchester</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>What is the capital city of South Africa?</h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>Durban</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>New York</label>
        </div>

        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeB'>Pretoria</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='D' />
        <label for='answerThreeC'>Limpopo</label>
        </div>
        </li>


    	<li>
        <h3>What capital city of USA?</h3>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='A' />
        <label for='answerFourA'>Las Angeles</label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='B' />
        <label for='answerFourB'>Washington DC</label>
        </div>

        <div>
        <input type='radio' name='answerFour' id='answerFour' value='C' />
        <label for='answerFourC'>Detroit</label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='D' />
        <label for='answerFourD'>Chicago</label>
        </div>
        </li>
        
        
    	<li>
        <h3>Who is the founder of Facebook ?</h3>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='A' />
        <label for='answerFiveA'>Steve Jobs</label>
        </div>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='B' />
        <label for='answerFiveB'>Elon Musk</label>
        </div>

        <div>
        <input type='radio' name='answerFive' id='answerFive' value='C' />
        <label for='answerFiveB'>Bill Gates</label>
        </div>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='D' />
        <label for='answerFiveC'>Mark Zukenburg</label>
        </div>
        </li>
        
        
    	<li>
        <h3>Where was mandela born ?</h3>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='A' />
        <label for='answerSixA'>Kwazulu Natal</label>
        </div>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='B' />
        <label for='answerSixB'>Mannenburg</label>
        </div>

        <div>
        <input type='radio' name='answerSix' id='answerSix' value='C' />
        <label for='answerSixB'>Qunu</label>
        </div>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='D' />
        <label for='answerSixC'>Kampsbay</label>
        </div>
        </li>
        
        
    	<li>
        <h3>1 + 1 </h3>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='A' />
        <label for='answerSevenA'>2</label>
        </div>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='B' />
        <label for='answerSevenB'>4</label>
        </div>

        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='C' />
        <label for='answerSevenB'>3</label>
        </div>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='D' />
        <label for='answerSevenC'>6</label>
        </div>
        </li>
        
        
    	<li>
        <h3>who is Brad Pitt ?</h3>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='A' />
        <label for='answerEightA'>I dont know</label>
        </div>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='B' />
        <label for='answerEightB'>Photography</label>
        </div>

        <div>
        <input type='radio' name='answerEight' id='answerEight' value='C' />
        <label for='answerEightB'>Actress</label>
        </div>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='D' />
        <label for='answerEightC'>Actor</label>
        </div>
        </li>
        
        
    	<li>
        <h3>Whos is Ronaldo ?</h3>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='A' />
        <label for='answerNineA'>Coach</label>
        </div>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='B' />
        <label for='answerNineB'>Referee</label>
        </div>

        <div>
        <input type='radio' name='answerNine' id='answerNine' value='C' />
        <label for='answerNineB'>Footballer</label>
        </div>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='D' />
        <label for='answerNineC'>I dont Know</label>
        </div>
        </li>
        
        
    	<li>
        <h3>What is the capital city of France ?</h3>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='A' />
        <label for='answerTenA'>Napoli</label>
        </div>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='B' />
        <label for='answerTenB'>Paris</label>
        </div>

        <div>
        <input type='radio' name='answerTen' id='answerTen' value='C' />
        <label for='answerTenB'>Lyon</label>
        </div>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='D' />
        <label for='answerTenC'>Rome</label>
        </div>
        </li>
        

    </ol>
     <input type='submit' value='Finish Him' />
    
</form>";

}

if ($rid == 2){
	
	echo "


<form action='process.php?id=2' method='post' id='quizForm' id='2'>


	<ol>
    
    
    	<li>
        <h3>Whos the founder of Microsoft ?</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>Bill Gates</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>Quincy Laroson</label>
        </div>

        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>Bill Clinton</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='D' />
        <label for='answerOneD'>Elon Musk</label>
        </div>
        </li>
        
       
        <li>
        <h3>Who is the founder of Apple ?</h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>Bill Gates</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>Steve Jobs</label>
        </div>

        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>Mark Zukenburg</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='D' />
        <label for='answerTwoD'>None of the above</label>
        </div>
        </li>
        
       
         <li>
        <h3>Who is President of the United States?</h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>No One</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>Akon</label>
        </div>

        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>Donald Trump</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='D' />
        <label for='answerThreeD'>Barack Obama</label>
        </div>
        </li>

      
    	<li>
        <h3>What color is a Banana ?</h3>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='A' />
        <label for='answerFourA'>Pink</label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='B' />
        <label for='answerFourB'>Yellow</label>
        </div>

        <div>
        <input type='radio' name='answerFour' id='answerFour' value='C' />
        <label for='answerFourC'>Orange</label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerFour' value='D' />
        <label for='answerFourD'>Brown</label>
        </div>
        </li>
        
        
    	<li>
        <h3>Where is Berlin ?</h3>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='A' />
        <label for='answerFiveA'>Poland</label>
        </div>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='B' />
        <label for='answerFiveB'>Luxemburg</label>
        </div>

        <div>
        <input type='radio' name='answerFive' id='answerFive' value='C' />
        <label for='answerFiveB'>Netherland</label>
        </div>
        
        <div>
        <input type='radio' name='answerFive' id='answerFive' value='D' />
        <label for='answerFiveD'>Germany</label>
        </div>
        </li>
        
        
    	<li>
        <h3>Where is Toronto ?</h3>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='A' />
        <label for='answerSixA'>Brazil</label>
        </div>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='B' />
        <label for='answerSixB'>Argentina</label>
        </div>

        <div>
        <input type='radio' name='answerSix' id='answerSix' value='C' />
        <label for='answerSixC'>Canada</label>
        </div>
        
        <div>
        <input type='radio' name='answerSix' id='answerSix' value='D' />
        <label for='answerSixD'>Cuba</label>
        </div>
        </li>
        
        
    	<li>
        <h3>Where is Rome ?</h3>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='A' />
        <label for='answerSevenA'>Italy</label>
        </div>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='B' />
        <label for='answerSevenB'>China</label>
        </div>

        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='C' />
        <label for='answerSevenC'>Belguim</label>
        </div>
        
        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='D' />
        <label for='answerSevenD'>Russia</label>
        </div>
        </li>
        
        
    	<li>
        <h3>50 - 45 ?</h3>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='A' />
        <label for='answerEightA'>6</label>
        </div>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='B' />
        <label for='answerEightB'>8</label>
        </div>

        <div>
        <input type='radio' name='answerEight' id='answerEight' value='C' />
        <label for='answerEightC'>3</label>
        </div>
        
        <div>
        <input type='radio' name='answerEight' id='answerEight' value='D' />
        <label for='answerEightD'>5</label>
        </div>
        </li>
        
        
    	<li>
        <h3>Where is Germany ?</h3>
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='A' />
        <label for='answerNineA'>Asia</label>
        </div>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='B' />
        <label for='answerNineB'>America</label>
        </div>

        <div>
        <input type='radio' name='answerNine' id='answerNine' value='C' />
        <label for='answerNineC'>Europe</label>
        </div>
        
        <div>
        <input type='radio' name='answerNine' id='answerNine' value='D' />
        <label for='answerNineD'>Africa</label>
        </div>
        </li>
        
        
    	<li>
        <h3>Would you kill a cute cat ?</h3>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='A' />
        <label for='answerTenA'>Yes</label>
        </div>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='B' />
        <label for='answerTenB'>No</label>
        </div>

        <div>
        <input type='radio' name='answerTen' id='answerTen' value='C' />
        <label for='answerTenC'>Maybe</label>
        </div>
        
        <div>
        <input type='radio' name='answerTen' id='answerTen' value='D' />
        <label for='answerTenD'>Depends</label>
        </div>
        </li>
        

    </ol>
     <input type='submit' value='Finish Him' />
    
</form>
";}

?>
</div>

</body>
</html>