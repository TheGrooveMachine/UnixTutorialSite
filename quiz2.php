<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="icon" href="../assets/images/logo.png" type="image/png">
  <title>Terminal Quiz</title>
  <script src="Quiz/assets/js/quiz.js"></script>
  <script src="assets/main.js"></script>
  <link rel="stylesheet" href="assets/main.css">
  <link rel="stylesheet" href="Quiz/assets/css/style.css">
</head>

<?php
	$page = 'home';
	$path = '';
	require($path . 'menu.php');
?>

    <!------- Title Section ------->
    <div id="hero">
        <h1>Terminal Quiz</h1>
    </div>
    <div class="questions">
        <div class = "q1">
            <p class="question">What differentiates the UNIX terminal from other Operating Systems?</p>
            <form id="testForm">
                <input type="radio" name="question1" id="q21a1" value="1">
                <label for='q21a1'>You can directly manipulate files</label><br>
                <input type="radio" name="question1" id="q21a2" value="2">
                <label for='q21a2'>It doesn't have a Graphical User Interface</label><br>
                <input type="radio" name="question1" id="q21a3" value="3">
                <label for='q21a3'>You can change file permissions</label><br>
                <input type="radio" name="question1" id="q21a4" value="4">
                <label for='q21a4'>You can edit files in the terminal</label><br>
            <p id="check21"></p>
            <hr>
        </div>
        <div class = "q2">
            <p class="question">Which program is used to access the terminal?</p>
            <form id="testForm">
                <input type="radio" name="question2" id="q22a1" value="1">
                <label for='q22a1'>PuTTY</label><br>
                <input type="radio" name="question2" id="q22a2" value="2">
                <label for='q22a2'>FileZilla</label><br>
            <p id="check22"></p>
            <hr>
        </div>
        <div class = "q3">
            <p class="question">Which program is used to move files between your device and the server?</p>
                <input type="radio" name="question3" id="q23a1" value="1">
                <label for='q23a1'>PuTTY</label><br>
                <input type="radio" name="question3" id="q23a2" value="2">
                <label for='q23a2'>FileZilla</label><br>
            <p id="check23"></p>
            <hr>
        </div>
        <div class = "q4">
            <p class="question">What connection type do you have to use to connect to the terminal?</p>
                <input type="text" id="q24" value=""><br>
            <p id="check24"></p>
            <hr>
        </div>
        <div class="button">
            <input type="button" onclick="check21();check22();check23();check24();showCount();" value="Submit">
        </div>
        <div class="result">
            <p id="result"></p>
        </div>
        </form>
    </div>
    <?php
	
	require($path . 'footer.php');
?>
</body>
</html>