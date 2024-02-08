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
            <h1>Terminal</h1>
        </div>


        <main class="content">

            <!-- <h2 id="summary">Summary</h1>
                <p>Information</p>
            
                <h2 id="vim">VIM</h1>
                <p>Information</p> -->
            
                <h2 id="terminal">What is Terminal?</h1>
                <p>	The terminal is going to be where you’ll be spending all of your time
                  in UNIX. Unlike an OS that you’re probably used to, there is no graphical
                  user interface - it’s all text. If you’ve ever used Command Prompt on a
                  Windows device it probably looks pretty familiar, but don’t let that fool
                  you - even though they might look identical, functionally they are very
                  different. Whatever you might know about one is not transferable to the other.
                    The lack of a GUI might seem strange and even intimidating at first, but
                  don’t worry. Everything that you can do on your computer can be done with
                  the terminal with certain commands. However, before we introduce any
                  commands, you have to have access to a user terminal.
            </p>
            
                <h2 id="access">How to Access it?</h1>
                <p>To gain full use of your terminal, you will need to download two programs
                  - one to access the terminal itself, and another to transfer files between
                  your computer and the server. For these purposes, we recommend PuTTY and
                  FileZilla, respectively, and will be using these throughout the website.
                 Once you open PuTTY, you'll see this menu:</p>
            
                 <!-- putty screenshot -->
                 <div>
                   <img class="puttyImg" src="assets/images/putty.png"
                   alt="screen capture of PuTTY menu">
                 </div>
            
                 <p>This looks like a lot, but you don’t need to worry about anything other
                   than the top-right section. Make sure the connection type is set to SSH
                   and enter your server’s domain in the Host Name text box. Once you
                   connect to the server, you’ll see something like this: </p>
            
                  <!-- terminal screenshot -->
                  <div>
                    <img class="t_accessImg" src="assets/images/t_access.png"
                    alt="screen capture of terminal log in">
                  </div>
            
                  <p>After you enter your username it will ask for a password. As you’re
                    entering your password, it might not look like anything is being typed
                    - don’t worry! This is done for security, similar to typical websites
                    that replace your password with asterisks. If you correctly enter your
                    password, congratulations! You now have access to your server’s terminal.</p>
            
                <h2 id="gui">GUI</h1>
                <p>A graphical user interface (GUI) is a type of user interface through which users interact with electronic devices via visual indicator representations. 
                    In these tutorials we will not go too in depth with GUI, but it is important to know about nonetheless.
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
                    <button onclick="myFunction(this);" id="current">Terminal</button></a>
                    <div id="myDropdown3" class="dropdown-content">
                    <a href="#terminal">What is Terminal?</a>
                    <a href="#access">How to Access?</a>
                    <a href="#gui">GUI</a>
                    </div>
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
