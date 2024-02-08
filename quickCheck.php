<!--
<?php
//include 'header1.php';
?>
<title>Quick check</title>
<link rel="stylesheet" href="assets/QC.css">
<?php
//include 'header2.php';
?>
-->
<!DOCTYPE html>
<html>
    <!-- The BLUE Team, ISTE-240 -->
    <head>
        <meta charset="utf-8" />
        <link rel="icon" href="assets/images/logo.png" type="image/png">
        <title>Quick check</title>
        <link rel="stylesheet" href="assets/main.css">
        <link rel="stylesheet" href="assets/homepage.css">
        <script src="assets/main.js"></script>
        <link rel="stylesheet" href="assets/cheat.css">
    </head>

    <!-- Start of universally shared portion -->

        

    <?php
	$page = 'home';
	$path = ''; 
	require($path . 'menu.php');
    
?>
  
        <!------- Title Section ------->
        <!--
        <div id="hero">
            <h1>The Best UNIX Tutorial Site</h1>
        </div>
        -->
        <!-- End of universally shared portion -->

<div class="topQC">
    <h1>Quick Check</h1>
</div>


<div class=sectionBut>Sections</div>
<div class="section">
    <!--<a href="#Introduction">Introduction</a>
    <a href="#Terminal">Terminal</a>-->
    <a href="#Navigation">Navigation</a>
    <a href="#FileManipulation">FileManipulation</a>
    <a href="#Miscellaneous.">Miscellaneous</a>
  </div>
<!--
<div class=alphabetBut>Alphabet</div>
<div class="alphabet">
    <a href="#A">A</a>
    <a href="#B">B</a>
    <a href="#C">C</a>
    <a href="#D">D</a>
    <a href="#E">E</a>
    <a href="#F">F</a>
    <a href="#G">G</a>
    <a href="#H">H</a>
    <a href="#I">I</a>
    <a href="#J">J</a>
    <a href="#K">K</a>
    <a href="#L">L</a>
    <a href="#M">M</a>
    <a href="#N">N</a>
    <a href="#O">O</a>
    <a href="#P">P</a>
    <a href="#Q">Q</a>
    <a href="#R">R</a>
    <a href="#S">S</a>
    <a href="#T">T</a>
    <a href="#U">U</a>
    <a href="#V">V</a>
    <a href="#W">W</a>
    <a href="#X">X</a>
    <a href="#Y">Y</a>
    <a href="#Z">Z</a>
  </div>
-->

<?php
echo "<br>";
//include '../../../MAIN/ejj3787/dbConn.php';
include '../../../MAIN/ejj3787/dbConnGroup.php';




    $sql = 'select * from `cheatz`';
    
    
    if($results = $conn->query($sql) ){
        //echo 'the select returned '.$results->num_rows.' rows';
        //echo 'good';
    }
    else{
        echo 'issue with query';
    }
 
    
    
   
    mysqli_close($conn);
    ?>
    <div id=tabb>
        <table class=tabb> 
            <tr>
                <th>Command</th>
                <th>Description</th>
                <th>link</th>
                <th>possible appendixes</th>
                <th>Man Page</th>
            </tr>
              
    <?php
    //for mobile imma make the link the comand and remove apendixes if i can ;)
    //have the alphabet link by making the Comand tb of each row have an ID of the actual command name.
    $output = '';
    $th = array();
    $results->fetch_assoc();
    $helpMe = 1;
    foreach($results as $currRecord){
        if(empty($th)){
            $th = array_keys($currRecord);
            $output .= '';
        }

        $output .='<tr>';
        foreach($currRecord as $name=>$val){
            if($helpMe==1){
                $output .= '<td id='.$val.'>'.$val.'</td>';
                $helpMe = 2;
            }
            elseif($helpMe==2){
                $output .= '<td>'.$val.'</td>';
                $helpMe = 3;
            }
            elseif($helpMe==3){
                if($val == 'None'){
                    $output .= '<td>'.$val.'</td>';
                }
                else{
                    $output .= '<td><a href="'.$val.'">'.$val.'</td>';
                }
                
                $helpMe = 4;
            }
            elseif($helpMe==4){
                $output .= '<td>'.$val.'</td>';
                $helpMe = 5;
            }
            elseif($helpMe==5){
                $temp = $val;
                $helpMe = 6;
            }
            elseif($helpMe==6){
                $output .= '<td id='.$temp.'><a href="'.$val.'">Man Page</td>';
                $helpMe = 1;
            }
            else{
                echo 'ahhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh';
            }
        }
        
        




        //foreach($currRecord as $name=>$val){
        //    $output .= '<td>'.$val.'</td>';
//
//        }


        $output .='</tr>';



    }



    $output. '</table> </div>';
    $output2 = '<table id=quiet>';
    $output2 .= '<tr><th>Footer</th></tr>';
    $output2 .= '<tr><td><a href="aboutUs.php">About Us</a></td></tr>';
    $output2 .= '</table>';
    $blankk = '<br><br><br><br><br><br>';
    print $output;
    
    print $output2;
    print $blankk;
    print $blankk;
    print $blankk;
    print $blankk;
    print $blankk;
    
?>

<?php
    //talk to proffesor about why table is always after footer
    //include 'footer.php';



?>