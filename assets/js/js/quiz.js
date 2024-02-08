function checkWritten(number, answer, tutorial) {
    let givenAnswer = document.getElementById("q" + number).value;
    console.log(givenAnswer);
    if(givenAnswer == answer) {
        document.getElementById("check" + number).innerHTML = "Correct!";
        document.getElementById("check" + number).style.color = "#178f33";
    }
    else {
        document.getElementById("check" + number).innerHTML = "Not correct, review the " + "<a href = 'www.google.com'>" + tutorial +  " tutorial</a> and try again.";
        document.getElementById("check" + number).style.color = "#c10200";
    } 
}

function checkRadio(number, answer, tutorial) {
    if(document.getElementById("q" + number + "a" + answer).checked == true) {
        document.getElementById("check" + number).innerHTML = "Correct!";
        document.getElementById("check" + number).style.color = "#178f33";
    }

    else {
        document.getElementById("check" + number).innerHTML = "Not correct, review the " + "<a href = 'google.com'>" + tutorial +  " tutorial</a> and try again.";
        document.getElementById("check" + number).style.color = "#c10200";
    }
}

function check11() {
    checkRadio(11, 3, "file navigation");
}

function check12() {
    checkRadio(12, 1, "file navigation");
}

function check13() {
    checkRadio(13, 2, "file navigation");
}

function check14() {
    checkWritten(14, "rmdir old", "file navigation");
}