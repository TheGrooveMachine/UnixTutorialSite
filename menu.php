

<?php
    $page = 'menu';
	$path = './';

?>

<body onresize="resizeDetect();">

<div class="topmenu">
            <!-- Logo -->
            <a class="logo" href="index.php"><img src="assets/images/logo.png" alt="logo"></a>

            <ul>
                <li><a href="quickCheck.php">Quick Check</a></li>
                <li><a href="sectionPages/unix.php">What is UNIX?</a></li>
                <li>
                    <div><a href="sectionPages/unix.php">Tutorials</a></div>
                    <ul>
                        <li><a href="sectionPages/intro.php">Introduction</a></li>
                        <li><a href="sectionPages/terminal.php">Terminal</a></li>
                        <li><a href="sectionPages/nav.php">Navigation</a></li>
                        <li><a href="sectionPages/fileMan.php">File Manipulation</a></li>
                    </ul>
                </li>
                <li><a href="quizHomepage.php">Quiz</a>
                  <ul>
                      <li><a href="quiz.php">Navigation</a></li>
                      <li><a href="quiz2.php">Terminal</a></li>
                      <li><a href="quiz3.php">File Manipulation</a></li>
                  </ul>
              </li>
            </ul>

            <!------- Hamburger ------->
            <div id="hamburger"><input type="checkbox" id="toggle" onclick="menuToggle(checked)">
                <label for="toggle">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                </label>
            </div>

        </div>
         <!------- Hamburger ------->
    <div id="hamburger"><input type="checkbox" id="toggle" onclick="menuToggle(checked)">
                <label for="toggle">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                </label>
            </div>

        </div>

        <!------- Mobile Menu ------->
        <nav class="menu">
            <ul>
                <li><a href="#">Quick Check</a></li>
                <li><a href="sectionPages/unix.php">What is UNIX?</a></li>
                <li><a href="sectionPages/unix.php">Tutorials</a></li>
                <li><a href="">Quiz</a></li>
            </ul>
        </nav>