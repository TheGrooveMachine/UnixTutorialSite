<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="icon" href="../assets/images/logo.png" type="image/png">
  <title>File Nav Quiz</title>
  <script src="Quiz/assets/js/quiz.js"></script>
  <script src="assets/main.js"></script>
  <link rel="stylesheet" href="assets/main.css">
  <link rel="stylesheet" href="Quiz/assets/css/style.css">
</head>
<!-- Start of universally shared portion -->

        
<?php
	$page = 'home';
	$path = '';
	require($path . 'menu.php');
?>

    <!------- Title Section ------->
    <div id="hero">
        <h1>File Navigation Quiz</h1>
    </div>

    <div class="questions">
        <div class = "q1">
            <p class="question">Which command lists the contents of your current directory?</p>
            <form id="testForm">
                <input type="radio" name="question1" id="q11a1" value="1">
                <label for='q11a1'>list</label><br>
                <input type="radio" name="question1" id="q11a2" value="2">
                <label for='q11a2'>cd</label><br>
                <input type="radio" name="question1" id="q11a3" value="3">
                <label for='q11a3'>ls</label><br>
                <input type="radio" name="question1" id="q11a4" value="4">
                <label for='q11a4'>mv</label><br>
            <p id="check11"></p>
            <hr>
        </div>
        <div class = "q2">
            <p class="question">What does the mkdir command do?</p>
            <form id="testForm">
                <input type="radio" name="question2" id="q12a1" value="1">
                <label for='q12a1'>Creates a directory</label><br>
                <input type="radio" name="question2" id="q12a2" value="2">
                <label for='q12a2'>Moves into a directory</label><br>
                <input type="radio" name="question2" id="q12a3" value="3">
                <label for='q12a3'>Removes a directory</label><br>
                <input type="radio" name="question2" id="q12a4" value="4">
                <label for='q12a4'>Renames a directory</label><br>
            <p id="check12"></p>
            <hr>
        </div>
        <div class = "q3">
            <p class="question">What would "cd ../" do?</p>
            <form id="testForm">
                <input type="radio" name="question3" id="q13a1" value="1">
                <label for='q13a1'>Move into a directory named ".."</label><br>
                <input type="radio" name="question3" id="q13a2" value="2">
                <label for='q13a2'>Go back one directory</label><br>
                <input type="radio" name="question3" id="q13a3" value="3">
                <label for='q13a3'>Move to the root directory</label><br>
                <input type="radio" name="question3" id="q13a4" value="4">
                <label for='q13a4'>Nothing, it's an invalid command</label><br>
            <p id="check13"></p>
            <hr>
        </div>
        <div class = "q4">
            <p class="question">Type the command you would use to remove a directory named "old".</p>
                <input type="text" id="q14" value=""><br>
            <p id="check14"></p>
            <hr>
        </div>
        <div class="button">
            <input type="button" onclick="check11();check12();check13();check14();" value="Submit">
        </div>
        </form>
        <div class="result">
            <p id="result"></p>
        </div>
    </div>

    <?php
	
	require($path . 'footer.php');
?>

    
</body>
</html>