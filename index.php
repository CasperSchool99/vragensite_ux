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
    <?php
        $name = "";
        $answer1_1 = $answer1_2 = $answer2_1 = $answer2_2 = $answer2_3 = $answer2_4 = $answer2_5 = $answer2_6 = $answer2_7 = 0;
    ?>
        <div id="fullpage">
            <div class="fp-section" class="active" id="section1">
                <div class="all">
                    <p id="changeText" onclick="changeText()">welkom!</p>
                        <div class="form"> 
                            <label for="name"> Vul hier uw naam in: </label><br/>
                            <input type="text" name="name" placeholder="Name" required><br/>
                            <button value="Begin" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDownEcht()">Begin</button>
                        </div>
                </div>
            </div>
            <div class="fp-section">
                <div class="btnBackPosition">
                <button class="btn-hover color-8" onclick="moveUp()">Terug</button>
                </div>

                <div class="all">
                    <p>werkt het inklok systeem altijd goed?</p>
                        <div class="answers">  
                            <button id="answer1_1" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown()">nee.</button>
                            <button id="answer1_2" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown()">helemaal kut.</button>
                        </div>
                        <?php
                            if (isset($_GET["answer1_1"])) {  
                                $answer1_1 = $_GET["answer1_1"];
                            }
                            else if (isset($_GET["answer1_2"])) {
                                $answer1_2 = $_GET["answer1_2"];
                            }
                        ?>
                </div>
            </div>
            <div class="fp-section">
                <div class="btnBackPosition">
                <button class="btn-hover color-8" onclick="moveUp()">Vorige vraag</button>
                </div>

                <div class="all">
                    <p>Wie is de chillste leraar?</p> 
                    
                    <div class="answers">
                        <button id="answer2_1" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown()">Monique Moeskops</button>
                        <button id="answer2_2" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown()">Pierre Ruijters</button>
                        <button id="answer2_3" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown()">Anneke Bouma</button>
                        <button id="answer2_4" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown()">Francy Verwaard</button>
                        <button id="answer2_5" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown()">Bouke Loman</button>
                        <button id="answer2_6" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown()">Stef Heiltjes</button>
                        <button id="answer2_7" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown()">Koos Zagwijn</button>  
                    </div>  
                        <?php
                            if (isset($_GET["answer2_1"])) {  
                                $answer2_1 = $_GET["answer2_1"];
                            }
                            else if (isset($_GET["answer2_2"])) {
                                $answer2_2 = $_GET["answer2_2"];
                            }
                            else if (isset($_GET["answer2_3"])) {
                                $answer2_3 = $_GET["answer2_3"];
                            }
                            else if (isset($_GET["answer2_4"])) {
                                $answer2_4 = $_GET["answer2_4"];
                            }
                            else if (isset($_GET["answer2_5"])) {
                                $answer2_5 = $_GET["answer2_5"];
                            }
                            else if (isset($_GET["answer2_6"])) {
                                $answer2_6 = $_GET["answer2_6"];
                            }
                            else if (isset($_GET["answer2_7"])) {
                                $answer2_7 = $_GET["answer2_7"];
                            }
                        ?>
                </div> 
            </div>
            <div class="fp-section">
                <div class="btnBackPosition">
                <button class="btn-hover color-8" onclick="moveUp()">Vorige vraag</button>
                </div>

                <div class="all">
                    <p>Wat vind je van de stagaire?</p> 

                    <div class="answers">  
                        <button data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown()">Goed</button>
                        <button data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-max="25" class="btnAnswer" onclick="moveDown()">Slecht</button>
                    </div>  
                </div> 
            </div>
            <div class="fp-section">
                <div class="btnBackPosition">
                <button class="btn-hover color-8" onclick="moveUp()">Terug</button>
                </div>

                <div class="all">
                    <p>Resultaten</p> 

                </div> 
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.3/fullpage.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.5.0/vanilla-tilt.min.js"></script>
        <script src="js/fade.js"></script>
        <script src="vanilla-tilt.js"></script>
    </body>
</html>