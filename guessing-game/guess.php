<html>
<head>
<title>Jesse Zamazanuk's Guessing Game</title>
</head>
<body>
<h1>Welcome to my guessing game</h1>
<p>
<?php 
define("ANSWER",     40);
if(array_key_exists('guess', $_GET))
{
    if(isset($_GET['guess']))
    {
        $guess = $_GET['guess'];
        if(is_numeric($guess))
        {
            if($guess == ANSWER)
            {
                echo "Congratulations - You are right";
            }
            elseif($guess < ANSWER)
            {
                echo "Your guess is too low";
            }
            elseif($guess > ANSWER)
            {
                echo "Your guess is too high";  
            }
            else
            {
                //Unexpected error
            }
        }
        else
        {
            if(strlen($guess) == 0)
            {
                echo "Your guess is too short";
            }
            else
            {
                echo "Your guess is not a number";
            }
        }
    }
    else
    {
        echo "Your guess is too short";
    }
}
else
{
    echo "Enter your guess below";
}
?></p>
<form>
<input type="text" name="guess" size="60" />
<input type="submit" value="Guess"/>
</form>
<ul>
<li><a href="guess.php">Reset</a></li>
</ul>
</body>
</html>
  

