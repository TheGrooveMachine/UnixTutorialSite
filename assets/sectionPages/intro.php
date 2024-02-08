<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../assets/images/logo.png" type="image/png">
    <title>The BLUE Team - ISTE240</title>
    <link rel="stylesheet" href="../assets/main.css">
    <link rel="stylesheet" href="section.css">
    <script src="../assets/main.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Start of universally shared portion -->

        
<?php
	$page = 'home';
	$path = '../';
	require($path . 'sectionMenu.php');
?>


    <!-- End of universally shared portion -->

    <div class="container">
        <!------- Title Section ------->
        <div id="hero">
            <h1>Introduction</h1>
        </div>


        <main class="content">

            <h2>Introduction</h2>
                <p>Throughout this tutorial site, you will learn how to use UNIX in a web development context. Because of this, we won’t go too in-depth - yes, UNIX is rather complex and there is a lot to talk about - but for web development purposes it’s actually a lot simpler than you might think. 

                </p>

                <p>These 3 tutorial sections will teah you all you need to know about UNIX in the context of : Using Terminal, navigating through files on Terminal, and Manipulating files in Terminal.

                <?php
	
	require($path . '../footer2.php');
?>
        </main>


        <div id="sidebar">
            <div class="dropdown">
                <a href='unix.php'>
                    <button onclick="myFunction(this);" class="dropbtn">What is UNIX?</button></a>
                
            </div>
            <div class="dropdown">
                <a href='intro.php'>
                <button onclick="myFunction(this);" class="dropbtn"  id="current">Introduction</button></a>
               
            <div class="dropdown">
                    <a href='terminal.php'>
                    <button onclick="myFunction(this);" class="dropbtn">Terminal</button></a>
                    
                </div>
           
            <div class="dropdown">
                <a href='nav.php'>
                    <button onclick="myFunction(this);" class="dropbtn">Navigation</button></a>
                   
            <div class="dropdown">
                    <a href='fileMan.php'>
                    <button onclick="myFunction(this);" class="dropbtn">File Manipulation</button></a>
                    
            </div>
        </div>


      </div>
      
    
        
</body>
</html>
