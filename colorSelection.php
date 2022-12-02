<?php
    session_start();
    if($_SESSION['authenticated'] != true){
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/jquery.touchSwipe.js"></script>
    <script type="text/javascript" src="js/jquery.horizonScroll.js"></script>
</head>
    <body>

        <div class="horizon-prev"><img src="images/l-arrow.png"></div>
        <div class="horizon-next"><img src="images/r-arrow.png"></div>

        
        
        <section data-role="section" id="section-black">
            <a href="updateJSON.php?color=black">cose</a>
        </section>
        <section data-role="section" id="section-dark-green">
            <a href="updateJSON.php?color=darkGreen">cose</a>
        </section>
        <section data-role="section" id="section-green">
            <a href="updateJSON.php?color=green">cose</a>
        </section>
        <section data-role="section" id="section-light-green">
            <a href="updateJSON.php?color=lightGreen">cose</a>
        </section>
        <section data-role="section" id="section-blue">
            <a href="updateJSON.php?color=blue">cose</a>
        </section>
        <section data-role="section" id="section-indigo">
            <a href="updateJSON.php?color=indigo">cose</a>
        </section>
        <section data-role="section" id="section-light-blue">
            <a href="updateJSON.php?color=lightBlue">cose</a>
        </section>
        <section data-role="section" id="section-heavenly">
            <a href="updateJSON.php?color=heavenly">cose</a>
        </section>
        <section data-role="section" id="section-red">
            <a href="updateJSON.php?color=red">cose</a>
        </section>
        <section data-role="section" id="section-orange">
            <a href="updateJSON.php?color=orange">cose</a>
        </section>
        <section data-role="section" id="section-amber">
            <a href="updateJSON.php?color=amber">cose</a>
        </section>
        <section data-role="section" id="section-yellow">
            <a href="updateJSON.php?color=yellow">cose</a>
        </section>
        <section data-role="section" id="section-fucsia">
            <a href="updateJSON.php?color=fucsia">cose</a>
        </section>
        <section data-role="section" id="section-pink">
            <a href="updateJSON.php?color=pink">cose</a>
        </section>
        <section data-role="section" id="section-light-pink">
            <a href="updateJSON.php?color=lightPink">cose</a>
        </section>
        <section data-role="section" id="section-white">
            <a href="updateJSON.php?color=white">cose</a>
        </section>

        <div class="dock_container" id="demo">
            <div class="dock">
                <ul>
                    <li>
                        <span>Black</span>
                        <div class="color black" onclick="$(document).horizon('scrollTo', 'section-black'); changeColor('light');"></div>
                    </li>
                    <li>
                        <span>Dark Green</span>
                        <div class="color darkGreen" onclick="$(document).horizon('scrollTo', 'section-dark-green'); changeColor('mid');"></div>
                    </li>
                    <li>
                        <span>Green</span>
                        <div class="color green" onclick="$(document).horizon('scrollTo', 'section-green'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Light Green</span>
                        <div class="color lightGreen" onclick="$(document).horizon('scrollTo', 'section-light-green'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Blue</span>
                        <div class="color blue" onclick="$(document).horizon('scrollTo', 'section-blue'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Indigo</span>
                        <div class="color indigo" onclick="$(document).horizon('scrollTo', 'section-indigo'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>LightBlue</span>
                        <div class="color lightBlue" onclick="$(document).horizon('scrollTo', 'section-light-blue'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Heavenly</span>
                        <div class="color heavenly" onclick="$(document).horizon('scrollTo', 'section-heavenly'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Red</span>
                        <div class="color red" onclick="$(document).horizon('scrollTo', 'section-red'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Orange</span>
                        <div class="color orange" onclick="$(document).horizon('scrollTo', 'section-orange'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Amber</span>
                        <div class="color amber" onclick="$(document).horizon('scrollTo', 'section-amber'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Yellow</span>
                        <div class="color yellow" onclick="$(document).horizon('scrollTo', 'section-yellow'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Fucsia</span>
                        <div class="color fucsia" onclick="$(document).horizon('scrollTo', 'section-fucsia'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Pink</span>
                        <div class="color pink" onclick="$(document).horizon('scrollTo', 'section-pink'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>LightPink</span>
                        <div class="color lightPink" onclick="$(document).horizon('scrollTo', 'section-light-pink'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>White</span>
                        <div class="color white" onclick="$(document).horizon('scrollTo', 'section-white'); changeColor('dark');"></div>
                    </li>
                </ul>
            </div>
        </div>

        <script type="text/javascript">
            $('section').horizon();

            function changeColor(i) { 
                if (i == "dark") {
                    document.getElementById("demo").style.background = "#00000066";
                } else if(i == "mid"){
                    document.getElementById("demo").style.background = "#ffffff1a";
                } else {
                    document.getElementById("demo").style.background = "#ffffff33";
                }
            }
        </script>
    </body>
</html>
