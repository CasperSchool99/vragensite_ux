var fp = new fullpage('#fullpage', {
	autoScrolling: true,
	scrollHorizontally: true
})

fp.setMouseWheelScrolling(false)
fp.setAllowScrolling(false)

var user = ""
var answers = []
var index = 0

function moveDown(a,submit) {
    if (document.getElementById("name").value !== "") {
        if (a === "name") {
            user = document.getElementById("name").value
        }else{
            answers.push({ question:index,answer:a})
        }
        console.log(answers)
        index++
        fp.moveSectionDown()
        if (submit) {
            fetch("formHandeling.php", {
                method: "post",
                body: {
                    name: user,
                    answers: JSON.stringify(answers)
                }
            }).then(function (r) { return r.text() }).then(function (r) {
                console.log(r)
            })
        }
    }
}

function moveUp() {
    answers = answers.filter(function(a) {
        return !(a.question === index || a.question === index-1)
    })
    console.log(answers)
    index--
    fp.moveSectionUp()
}

function submit() {
    console.log(answers)

}
