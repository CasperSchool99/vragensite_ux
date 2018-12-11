<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UX website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.3/fullpage.css">
    <link rel="stylesheet" href="css/theme.css">
</head>
    <body>
        <div id="fullpage">
            <div class="fp-section">
                <div class="all">
                    <p>Dit is de Leijgraaf vragenlijst.</p><br/><br/><br/><br/>
                        <div class="form"> 
                            <div class="centered">
                            <div class="group">
                                <input type="text" id="name" name="name" required/>
                                <label for="name">Name</label>
                                <div class="bar"></div>
                            </div>
                            </div>
                            <button value="Begin" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown('name')">Begin</button>
                        </div>
                </div>
            </div>
            <div class="fp-section">
                <div class="btnBackPosition">
                <p>Vraag 1 / 3</p><br/>
                <button class="btn-hover color-8" onclick="moveUp()">Terug</button>
                </div>

                <div class="all">
                    <p>werkt het inklok systeem altijd goed?</p>
                    <div class="answers">  
                        <button id="answer1_1" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown(0)">Nee.</button>
                        <button id="answer1_2" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown(1)">Nog niet misschien</button>
                    </div>
                </div>
            </div>
            <div class="fp-section">
                <div class="btnBackPosition">
                <p>Vraag 2 / 3</p><br/>
                <button class="btn-hover color-8" onclick="moveUp()">Vorige vraag</button>
                </div>

                <div class="all">
                    <p>Wie is de chillste leraar?</p> 
                    
                    <div class="answers">
                        <button id="answer2_1" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown(0)">Monique Moeskops</button>
                        <button id="answer2_2" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown(1)">Pierre Ruijters</button>
                        <button id="answer2_3" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown(2)">Anneke Bouma</button>
                        <button id="answer2_4" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown(3)">Francy Verwaard</button>
                        <button id="answer2_5" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown(4)">Bouke Loman</button>
                        <button id="answer2_6" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown(5)">Stef Heiltjes</button>
                        <button id="answer2_7" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown(6)">Koos Zagwijn</button>  
                    </div>  
                </div> 
            </div>
            <div class="fp-section">
                <div class="btnBackPosition">  
                <p>Vraag 3 / 3</p><br/>
                <button class="btn-hover color-8" onclick="moveUp()">Vorige vraag</button>
                </div>

                <div class="all">
                    <p>Wat vind je van de stagaire?</p> 

                    <div class="answers">  
                        <button data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown(0,true)">Goed</button>
                        <button data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown(1,true)">Slecht</button>
                    </div>  
                </div> 
            </div>
            <div class="fp-section">
                <div class="btnBackPosition">
                <p>Resultaten</p> 
                <button class="btn-hover color-8" onclick="moveUp()">Terug</button>
                </div>

                <div class="all">
                    <div class="charts">
                            <canvas id="chart_1" width="100" height="100"></canvas>
                            <canvas id="chart_2" width="100" height="100"></canvas>
                            <canvas id="chart_3" width="100" height="100"></canvas>
                    </div>



                </div> 
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.3/fullpage.min.js"></script>
        <script src="js/fade.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.5.0/vanilla-tilt.min.js"></script>
        <script src="vanilla-tilt.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="js/chart.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/1.0.1/progressbar.min.js"></script>
        <script src="js/indicator.js"></script>
    </body>
</html>