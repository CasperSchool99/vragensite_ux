var fp = new fullpage('#fullpage', {
	autoScrolling: true,
	scrollHorizontally: true
})

fp.setMouseWheelScrolling(false)
fp.setAllowScrolling(false)

var user = ""
var answers = []
var index = 0

var chartsBody = document.getElementById('charts')

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
                body: `data=${JSON.stringify({
                    name: user,
                    answers
                })}`,
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                }
            }).then(function (r) { return r.json() }).then(function (r) {
                if (r.success) {
                    function countUnique (array) {
                        return new Set(array).size;
                    }

                    // get unique count of questions
                    var questions = countUnique(r.data.map(function (a) { return a.question }))

                    var strings = [
                        { question: 1, data: ['Nee.', 'Nog niet misschien'] },
                        { question: 2, data: [
                            'Monique Moeskops',
                            'Pierre Ruijters',
                            'Anneke Bouma',
                            'Francy Verwaard',
                            'Bouke Loman',
                            'Stef Heiltjes',
                            'Koos Zagwijn'
                        ] },
                        { question: 3, data: ['Goed', 'Slecht'] },
                    ]

                    // create chart foreach question
                    for (let i = 0; i < questions; i++) {
                        // create canvas
                        var canvas = document.createElement('canvas')
                        canvas.id = `chart_${i}`

                        // add canvas to page
                        chartsBody.appendChild(canvas)

                        // get answers for question
                        var question = r.data[i].question
                        var answers = r.data
                            .filter(function (a) { return a.question === question })
                            .map(function (a) { return a.answer.toString() })

                        // get unique answer
                        var uniqueAnswers = Array.from(new Set(answers))
                        // get counts for each unique answer
                        var data = uniqueAnswers.map(function (a) {
                            // get count for unique answer
                            return answers.filter(function (an) {
                                return an === a
                            }).length
                        })

                        // create chart & add to page
                        var ctx = canvas.getContext('2d')
                        new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: uniqueAnswers.map(function (a) {
                                    return strings.filter(function (q) { return q.question === question })[0].data[a]
                                }),
                                datasets: [{
                                    label: '# of Votes',
                                    data,
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(255,99,132,1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        })
                    }
                }

                setTimeout(function () {
                    chartsBody.className = 'charts'
                }, 500)
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
