<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="icon" href="../assets/images/logo.png" type="image/png">
  <title>File Management Quiz</title>
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
        <h1>File Manipulation Quiz</h1>
    </div>
<body>
    <div class="questions">
        <div class = "q1">
            <p class="question">Which command will empty the terminal screen?</p>
            <form id="testForm">
                <input type="radio" name="question1" id="q31a1" value="1">
                <label for='q31a1'>empty</label><br>
                <input type="radio" name="question1" id="q31a2" value="2">
                <label for='q31a2'>erase</label><br>
                <input type="radio" name="question1" id="q31a3" value="3">
                <label for='q31a3'>del</label><br>
                <input type="radio" name="question1" id="q31a4" value="4">
                <label for='q31a4'>clear</label><br>
            <p id="check31"></p>
            <hr>
        </div>
        <div class = "q2">
            <p class="question">What does the top command do?</p>
            <form id="testForm">
                <input type="radio" name="question2" id="q32a1" value="1">
                <label for='q32a1'>Move to the top of the terminal</label><br>
                <input type="radio" name="question2" id="q32a2" value="2">
                <label for='q32a2'>Sort the files in the current directory</label><br>
                <input type="radio" name="question2" id="q32a3" value="3">
                <label for='q32a3'>Show the status of the server</label><br>
                <input type="radio" name="question2" id="q32a4" value="4">
                <label for='q32a4'>Move to the root folder of the server</label><br>
            <p id="check32"></p>
            <hr>
        </div>
        <div class = "q3">
            <p class="question">Which command will give you a description of any command?</p>
                <input type="radio" name="question3" id="q33a1" value="1">
                <label for='q33a1'>describe</label><br>
                <input type="radio" name="question3" id="q33a2" value="2">
                <label for='q33a2'>explain</label><br>
                <input type="radio" name="question3" id="q33a3" value="3">
                <label for='q33a3'>showme</label><br>
                <input type="radio" name="question3" id="q33a4" value="4">
                <label for='q33a4'>whatis</label><br>
            <p id="check33"></p>
            <hr>
        </div>
        <div class = "q4">
            <p class="question">Change the file permissions of "quiz.txt" to rwxr-xr-x.</p>
                <input type="text" id="q34" value=""><br>
            <p id="check34"></p>
            <hr>
        </div>
        <div class="button">
            <input type="button" onclick="check31();check32();check33();check34();showCount();" value="Submit">
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