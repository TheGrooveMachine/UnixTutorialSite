

<?php
    $page = 'menu2';
	$path = './';

?>

<body onresize="resizeDetect();">

<div class="topmenu">
            <!-- Logo -->
            <a class="logo" href="../index.php"><img src="assets/images/logo.png" alt="logo"></a>

            <ul>
                <li><a href="#">Quick Check</a></li>
                <li><a href="unix.php">What is UNIX?</a></li>
                <li>
                    <div><a href="unix.php">Tutorials</a></div>
                    <ul>
                        <li><a href="intro.php">Introduction</a></li>
                        <li><a href="terminal.php">Terminal</a></li>
                        <li><a href="nav.php">Navigation</a></li>
                        <li><a href="fileMan.php">File Manipulation</a></li>
                    </ul>
                </li>
                <li><a href="../quiz.php">Quiz</a></li>
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
                <li><a href="unix.php">What is UNIX?</a></li>
                <li><a href="unix.php">Tutorials</a></li>
                <li><a href="">Quiz</a></li>
            </ul>
        </nav>