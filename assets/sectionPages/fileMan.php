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
            <h1>File Manipulation</h1>
        </div>


        <main class="content">

            <!--clear COMMAND-->
        <h2 id="clear">The “clear” Command:</h2>
        <p>The clear command will clear the terminal screen. It doesn’t actually delete any lines, it just pushes them up so you have an empty terminal screen to work with.
        </p>
    
    <hr>
    
    <!--exit COMMAND-->
        <h2 id="exit">The "exit" Command:</h2>
        <p>The exit command will exit the terminal.
        </p>
    
    <hr>
    
    <!--whatis COMMAND-->
        <h2 id="whatis">The "whatis" Command:</h2>
        <p>The "whatis" command will give a short description of any command. Type “whatis (command)” to use it. Alternatively, you can type “whatis -r (command)” to generate a list of commands with the command name in them. 
        </p>
    
    <hr>
    
    <!--top COMMAND-->
        <h2 id="top">The "top" Command:</h2>
        <p>The top command will show you the current state of the Unix server. Specifically, it will tell you the amount of tasks running, the CPU load, the amount of memory used/remaining, and it will list every task running from most CPU load to least.
        </p>
    
    <hr>
    
    <!--File Permissions and the “chmod” Command-->
        <h2 id="filePerm">File Permissions and the “chmod” Command</h2>
        <p>If you return to your home directory and type “ls -l”, you’ll see very different results than normal. What you’re looking at are the directory permissions, in other words who is allowed to do what with each directory. The first column consists of ten characters: the first one determines whether or not the current object is a file or directory, the next three determine the owner’s permissions, the three after that determine the file group’s permissions, and the last three determine everyone else’s permissions.
        </p>
        <p>In those three letter sequences:</p>
        <p class="indent">r means read</p>
        <p class="indent">w means write</p>
        <p class="indent">x means execute</p>
        <p>If the letter is there, said user/users have that permission. If there is a dash instead, they do not.</p>
        <p>For example, “drwxr-xr--” means that the object is a directory, the owner has reading, writing, and executing permissions, users in the file group have reading and writing permissions, and everyone else only has reading permissions.</p>
        <p>To change the permissions of a file/directory, you can use the chmod command. 
To use it, type “chmod (number) (file/directory name)”. The number will be a three digit number with each digit being anywhere from 0 to 7 - add 4 to the digit if it has reading permissions, add 2 if it has writing permissions, and add 1 if it has executing permissions. For example, rwxr-xr-x and rw-r--r--, two commonly used configurations, would be 755 and 644 respectively. So, to change the file permissions of “file1.txt” to rw-r--r--, you would write “chmod 644 file1.txt”. 
</p>

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
                    <button onclick="myFunction(this);" class="dropbtn" id="current">File Manipulation</button></a>
                    
            </div>
        </div>


      </div>
      
    
        
</body>
</html>
