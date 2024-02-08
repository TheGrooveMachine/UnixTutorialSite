let count = 0;

function checkWritten(number, answer, tutorial, link) {
    let givenAnswer = document.getElementById("q" + number).value;
    console.log(givenAnswer);
    if(givenAnswer == answer) {
        document.getElementById("check" + number).innerHTML = "Correct!";
        document.getElementById("check" + number).style.color = "#178f33";
        count++;
    }
    else {
        document.getElementById("check" + number).innerHTML = "Not correct, review the " + "<a href = '" + link + "'>" + tutorial +  " tutorial</a> and try again.";
        document.getElementById("check" + number).style.color = "#c10200";
    } 
}

function checkRadio(number, answer, tutorial, link) {
    if(document.getElementById("q" + number + "a" + answer).checked == true) {
        document.getElementById("check" + number).innerHTML = "Correct!";
        document.getElementById("check" + number).style.color = "#178f33";
        count++;
    }

    else {
        document.getElementById("check" + number).innerHTML = "Not correct, review the " + "<a href = '" + link + "'>" + tutorial +  " tutorial</a> and try again.";
        document.getElementById("check" + number).style.color = "#c10200";
    }
}

function showCount() {
    document.getElementById("result").innerHTML = "You got " + count + "/4 questions correct!";
    count = 0;
}

function check11() {
    checkRadio(11, 3, "file navigation", "sectionPages/nav.php");
}

function check12() {
    checkRadio(12, 1, "file navigation", "sectionPages/nav.php");
}

function check13() {
    checkRadio(13, 2, "file navigation", "sectionPages/nav.php");
}

function check14() {
    checkWritten(14, "rmdir old", "file navigation", "sectionPages/nav.php");
}

function check21() {
    checkRadio(21, 2, "terminal", "sectionPages/terminal.php");
}

function check22() {
    checkRadio(22, 1, "terminal", "sectionPages/terminal.php");
}

function check23() {
    checkRadio(23, 2, "terminal", "sectionPages/terminal.php");
}

function check24() {
    checkWritten(24, "SSH", "terminal", "sectionPages/terminal.php")
}

function check31() {
    checkRadio(31, 4, "file manipulation", "sectionPages/fileMan.php");
}

function check32() {
    checkRadio(32, 3, "file manipulation", "sectionPages/fileMan.php");
}

function check33() {
    checkRadio(33, 4, "file manipulation", "sectionPages/fileMan.php");
}

function check34() {
    checkWritten(34, "chmod 755 quiz.txt", "file manipulation", "sectionPages/fileMan.php");
}