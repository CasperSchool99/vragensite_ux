var answer1_1 = 0;
var answer1_2 = 0;

var fp = new fullpage('#fullpage', {
    anchors: ['section1', 'section2', 'section3', 'section4', 'section5'],
	autoScrolling: true,
	scrollHorizontally: true
})

fp.setMouseWheelScrolling(false)
fp.setAllowScrolling(false)

function moveDown () {
    document.getElementById('answer1_1').onclick = function() {
        answer1_1 = 1
        window.location.href = "index.php?answer1_1=" + answer1_1
    }
    document.getElementById('answer1_2').onclick = function() {
        answer1_2 = 1  
        window.location.href = "index.php?answer1_2=" + answer1_2
    }
}

function moveDownEcht() {
    fp.moveSectionDown()
}

function moveUp () {
    fp.moveSectionUp()
}
