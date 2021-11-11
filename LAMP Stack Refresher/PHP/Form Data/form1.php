<?= 
    $oldGuess = isset($_POST['guess']) ? $_POST['guess'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- PERSISTING FORM DATA -->
    <p>Guessing Game</p>
    <form action="" method="POST">
        <label for="guess">Input Guess</label>
        <input type="text" name="guess" id="guess" size="40" value="<?= htmlentities($oldGuess) ?>">
        <input type="submit" value="Submit" name="submit">
    </form>

    <h2>Things we need to check for</h2>
    <ul>
        <li>Check to see if the guess input has been set</li>
        <li>Guess must be greater then length of 1</li>
        <li>Guess needs to be a numerical value</li>
        <li>Guess needs to be less then 42 (Too low)</li>
        <li>Guess needs to be greater then 42 (Too high)</li>
        <li>Default message is: you have won!</li>
    </ul>
    
<!-- The two statements below are exactly the same  -->
<!-- 1. <?= $oldGuess ?>  -->
<!-- 2. <?php echo $oldGuess ?> -->
<?php 

// if(isset($_POST["submit"])) {
//     if($oldGuess == "") {
//         echo "Error";
//     }else{
//         echo $oldGuess;
//     }
// }

// PERFORMING SIMPLE VALIDATION CHECKS
    if(!isset($_POST['guess'])) {
        echo "Missing guess parameter";
    } else if(strlen($_POST['guess']) < 1) {
        echo "Your guess is to short. Try again!";
    } else if(! is_numeric($_POST['guess'])) {
        echo "Your guess needs to be a number!";
    } else if($_POST['guess'] < 42) {
        echo "Your guess is too low";
    } else if($_POST['guess'] > 42) {
        echo "Your guess is to high!";
    } else {
        echo "Congratulations, you have won!";
    }

?>

</body>
</html>