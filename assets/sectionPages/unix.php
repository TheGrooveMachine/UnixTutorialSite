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
            <h1>What is UNIX?</h1>
        </div>

        <main class="content">

            <h2>What is UNIX?</h2>
                 <p>UNIX is an operating system that started development in 1969 and has been in constant development since. Originally created to be a convenient platform strictly for programmers, it quickly gained popularity as more people began to use it. Eventually, some programmers even made features and tools for themselves and others, making it spread like wildfire into the widely used OS it is today. You might be thinking that it’s still pretty much used exclusively by programmers, but you would be wrong - macOS, the operating system used by Apple’s Mac devices, is based on UNIX.
                     </p>
                     <?php
	
	require($path . '../footer2.php');
?>

        </main>
        
        <div id="sidebar">
            <div class="dropdown">
                <a href='unix.php'>
                    <button onclick="myFunction(this);" class="dropbtn" id="current">What is UNIX?</button></a>
                
            </div>
            <div class="dropdown">
                <a href='intro.php'>
                <button onclick="myFunction(this);" class="dropbtn">Introduction</button></a>
                
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
