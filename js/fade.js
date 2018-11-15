var answer1_1 = 0;
var answer1_2 = 0;
var answer2_1 = 0;
var answer2_2 = 0;
var answer2_3 = 0;
var answer2_4 = 0;
var answer2_5 = 0;
var answer2_6 = 0;
var answer2_7 = 0;

var fp = new fullpage('#fullpage', {
	autoScrolling: true,
	scrollHorizontally: true
})

fp.setMouseWheelScrolling(false)
fp.setAllowScrolling(false)

function moveDown () {
    document.getElementById('answer1_1').onclick = function() {
        answer1_1 = 1
        window.location.href = "index.php?answer1_1=" + answer1_1
        fp.moveSectionDown()
    }
    document.getElementById('answer1_2').onclick = function() {
        answer1_2 = 1  
        window.location.href = "index.php?answer1_2=" + answer1_2
        fp.moveSectionDown()
    }
    document.getElementById('answer2_1').onclick = function() {
        answer2_1 = 1  
        window.location.href = "index.php?answer2_1=" + answer2_1
        fp.moveSectionDown()
    }
    document.getElementById('answer2_2').onclick = function() {
        answer2_2 = 1  
        window.location.href = "index.php?answer2_2=" + answer2_2
        fp.moveSectionDown()
    }
    document.getElementById('answer2_3').onclick = function() {
        answer2_3 = 1  
        window.location.href = "index.php?answer2_3=" + answer2_3
        fp.moveSectionDown()
    }
    document.getElementById('answer2_4').onclick = function() {
        answer2_4 = 1  
        window.location.href = "index.php?answer2_4=" + answer2_4
        fp.moveSectionDown()
    }
    document.getElementById('answer2_5').onclick = function() {
        answer2_5 = 1  
        window.location.href = "index.php?answer2_5=" + answer2_5
        fp.moveSectionDown()
    }
    document.getElementById('answer2_6').onclick = function() {
        answer2_6 = 1  
        window.location.href = "index.php?answer2_6=" + answer2_6
        fp.moveSectionDown()
    }
    document.getElementById('answer2_7').onclick = function() {
        answer2_7 = 1  
        window.location.href = "index.php?answer2_7=" + answer2_7
        fp.moveSectionDown()
    }
}

function moveDownEcht() {
    fp.moveSectionDown()
}

function moveUp () {
    fp.moveSectionUp()
}
