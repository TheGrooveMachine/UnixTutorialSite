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
	require($path . 'menu2.php');
?>
    <!-- End of universally shared portion -->

    <div class="container">
        <!------- Title Section ------->
        <div id="hero">
            <h1>Section Page Template</h1>
        </div>



        <main class="content">

            <h2>The “ls” Command:</h2>
                 <p>The first thing you’ll probably want to do when connecting to the terminal is see what files are already on the server, if there are any. To do this, you can use the ls command. This command, short for list, lists any files or directories in your current location:
                 </p>
                
             
             <hr>
             
             <!--MKDIR COMMAND-->
                 <h2>The "mkdir" Command:</h2>
                 <p>If you don’t see anything, don’t worry! You can make a directory with the mkdir command. To use it, type “mkdir (directory name)”. You can name the directory anything you want, but we recommend something simple like www. For this example, we’ll name it “tutorial”.
                 After you make the directory, use the ls command again and you should see it:
                 </p>
              
             
             <hr>
             
             <!--RMDIR COMMAND-->
                 <h2>The "rmdir" Command:</h2>
                 <p>Whoops, it looks like there’s a typo in our directory name - we can’t use that! Since the directory is empty, one way we can fix this is by deleting it and making a new one with the correct name. You can do this by using the rmdir command, short for “remove directory.” Just type “rmdir (directory name)” and it will be deleted.
                 </p>
         
             
             <hr>
             
             <!--MV COMMAND-->
                 <h2>The "MV" Command:</h2>
                 <p>The more proper way to accomplish this is using the mv command. Short for “move”, this will take the contents of one directory and move it to another, or create the target directory if it doesn’t exist. To use this command, type “mv (original directory) (renamed directory)”. Using “before” and “after” in this example:
                 </p>
        
             
             <hr>
             
             <!--CD COMMAND-->
                 <h2>The "CD" Command:</h2>
                 <p>So we’ve created a directory, but now we need to actually access it. To do this, we can use the cd command - short for change directory, it’s the command that lets you navigate through your server. To use it, type “cd (directory name)”. In this example, if we type “cd after”, we will move into the after directory. To compare it to a GUI, this is the same as entering a folder. If you want to go back one directory, type “..” in place of a directory name. 
                 You don’t have to move one directory at a time with the cd command - if you put a “/” after you type a directory, you will travel through that directory and be able to type in another. (The wording of this is god awful i know) If you know the layout of your server well, you can go from one end of your server to the other with a single line. If we were in the after directory and wanted to move to the www directory, we would type “cd ../www”. 
                 </p>
     
             <hr>
             
             <!--PWD COMMAND-->
                 <h2>The "PWD" Command:</h2>
                 <p>Moving around your server can get confusing -  sometimes you forget exactly where you are or which subdirectories you can access. You can use the command pwd to check your current working directory.
                 </p>
     
             <hr>
             
             <!--CP COMMAND-->
                 <h2>The "CP" Command:</h2>
                 <p>Just like in other operating systems, you are able to copy and make backups of files using the cp command. To copy a file in the current directory, simply type “cp file1 file2”, where file1 is the file to be copied and file2 is the name of the pasted file.
                 To copy a file to another directory, the second argument will be the target directory. For example, to copy file1 to the “target” directory as “file1_backup”, you would type “cp file1 /target/file1_backup”. If you want to keep the name of the file in the new directory, you don’t need to write the name in the command.
                 </p>
     
             <hr>
             
             <!--VIM-->
                 <h2>VIM:</h2>
                 <p>Unix has a built-in text editor named Vim. If you want to, you can use it to directly edit code within the terminal. To open or create a file with Vim, just type “vim (filename)”. Once the file is loaded, press i to enter insert mode and you’ll be able to edit the file. If you want to save your changes, press esc and then type “:w”. To exit Vim, type “.q”. If you want to exit Vim without saving your changes, type “:q!”.
                 </p>
        </main>


        <div id="sidebar">
            <div class="dropdown">
                <a href='unix.php' id="current">
                    <button onclick="myFunction(this);" class="dropbtn">What is UNIX?</button></a>
                <div id="myDropdown1" class="dropdown-content">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#contact">Contact</a>
                </div>
            </div>
            <div class="dropdown">
                <a href='intro.php' id="intro">
                <button onclick="myFunction(this);" class="dropbtn">Introduction</button></a>
                <div id="myDropdown2" class="dropdown-content">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#contact">Contact</a>
                </div>
            <div class="dropdown">
                    <a href='terminal.php' id="terminal">
                    <button onclick="myFunction(this);" class="dropbtn">Terminal</button></a>
                    <div id="myDropdown3" class="dropdown-content">
                    <a href="#home">Summary</a>
                    <a href="#about">VIM</a>
                    <a href="#contact">What is Terminal?</a>
                    <a href="#contact">How to Access?</a>
                    <a href="#contact">GUI</a>
                    </div>
                </div>
           
            <div class="dropdown">
                <a href='nav.php' id="nav">
                    <button onclick="myFunction(this);" class="dropbtn">Navigation</button></a>
                    <div id="myDropdown4" class="dropdown-content">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#contact">Contact</a>
                    </div>
            <div class="dropdown">
                    <a href='fileMan.php' id="fileMan">
                    <button onclick="myFunction(this);" class="dropbtn">File Manipulation</button></a>
                    <div id="myDropdown5" class="dropdown-content">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#contact">Contact</a>
                    </div>
            </div>
        </div>


      </div>
      
    
        
</body>
</html>
