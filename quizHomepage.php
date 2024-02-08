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
        <h1>Quizzes</h1>
    </div>
    <!-- Quizzes links -->
    
        <a href="quiz.php" class="linksQuiz">File Navigation</a>
        <a href="quiz2.php" class="linksQuiz">Terminal</a>
        <a href="quiz3.php" class="linksQuiz">File Manipulation</a>


        <?php
	
	require($path . 'footer.php');
?>
</body>
</html>