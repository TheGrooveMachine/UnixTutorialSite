<!DOCTYPE html>
<html>
    <!-- The BLUE Team, ISTE-240 -->
    <head>
        <meta charset="utf-8" />
        <link rel="icon" href="assets/images/logo.png" type="image/png">
        <title>The BLUE Team - ISTE240</title>
        <link rel="stylesheet" href="assets/main.css">
        <link rel="stylesheet" href="assets/homepage.css">
        <script src="assets/main.js"></script>

    </head>

    <!-- Start of universally shared portion -->

        

    <?php
	$page = 'home';
	$path = '';
	require($path . 'menu.php');
?>
  
        <!------- Title Section ------->
        <div id="hero">
            <h1>The Best UNIX Tutorial Site</h1>
        </div>

        <!-- End of universally shared portion -->

        <!------- About US ------->
        <div id="about">
            <h1>About Us</h1>
            <p>So you want to learn UNIX for web development. What is the first thing you do? Perhaps google different sites and watch some youtube videos. You may notice though that this method of learning comes with its drawbacks. The skills you learn often are presented in incoherent manners with
                 little to no relation to one another. You may also find that websites are more inclined to simply teach you what a certain UNIX command does without illustrating its functionality in a realistic setting. The Blue Teams UNIX tutorial site takes all of these issues into account in its design.
                  Charged with providing a cohesive and succinct learning experience, The Blue Team’s site keeps the user’s learning at the forefront of priorities. From easy-to-follow tutorials, to practice quizzes, the primary goal is to not only teach UNIX commands, but also teach how and when to use them
                   in terms of web development and site upkeep. 
The site will function with three basic tutorials: Terminal, Navigation, and File Manipulation. With such simple navigation with easy-to-understand tutorial names, we aim to provide an enjoyable and educational learning experience that you will hopefully walk away from with a greater knowledge of 
UNIX.
</p>
        </div>

        <!------- Quick Check ------->
        <div id="quickCheck">
            <div class="titleBox"> <h1>Quick Check</h1> </div>
            <p>Already have experience with UNIX? Just want to take a quick peek at a specific command that you forgot? We got you here with our quickcheck section where you can easily check up specific commands.
            <a href="quickCheck.php"><h1>Learn More >></h1></a>
        </div>

        <!------- What is UNIX? ------->
        <div id="whatIs">
            <div class="titleBox"> <h1>What is UNIX?</h1> </div>
            <div>
                <div>
                    <p>Simply put UNIX is an operating system Originally created to be a convenient platform strictly for programmers it quickly gained popularity outside of the programming field as more people began to use it.</p>
                    <a href="sectionPages/unix.php"><h1>Learn More >></h1></a>
                </div>
                <img src="assets/images/typing_1.jpg" alt="typing">
            </div>
        </div>

        <!------- Tutorials ------->
        <div id="tutorials">
            <div class="titleBox"> <h1>Tutorials</h1> </div>
            <ul>
                <li><a href="sectionPages/intro.php"><h1>Introduction</h1></a></li>
                <li><a href="sectionPages/terminal.php"><h1>Terminal</h1></a></li>
                <li><a href="sectionPages/nav.php"><h1>Navigation</h1></a></li>
                <li><a href="section/PagesfileMan.php"><h1>File Manipulation</h1></a></li>
            </ul>
        </div>

        <?php
	
	require($path . 'footer.php');
?>

    </body>
</html>