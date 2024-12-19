<html>
<body>
<title>Bhanu Uday Sharma - </title> <!-- Add your name here -->
<h1>Welcome to my guessing game</h1>

<?php
$correctnumber = 18; // Change this number based on autograder test expectations

// Check if the 'guess' parameter exists in the GET request
if (!isset($_GET['guess'])) {
    echo "Missing guess parameter";
} else if (strlen($_GET['guess']) < 1) { 
    // If 'guess' parameter is present but empty
    echo "Your guess is too short";
} else if (!is_numeric($_GET['guess'])) {
    // If 'guess' parameter is non-numeric
    echo "Your guess is not a number";
} else if ($_GET['guess'] < $correctnumber) {
    // If guess is too low
    echo "Your guess is too low";
} else if ($_GET['guess'] > $correctnumber) {
    // If guess is too high
    echo "Your guess is too high";
} else if ($_GET['guess'] == $correctnumber) {
    // If guess is correct
    echo "Congratulations - You are right";
}
?>

</body>
</html>
