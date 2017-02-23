<?php require("ScrabbleScorer.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>A2 Scrabble Scorer</title>
        <meta charset="utf-8"/>
        <link type="text/css" rel="stylesheet" href="css/scrabble.css"/>


    </head>
    <body>
        <h1>Scrabble Score Calculator</h1>
        <form method="get" action="index.php">
            <label for="word">Enter your word</label>
            <input type="text" id="word" name="word" required/><br/>
            <label for="bonus">Bonus multiplier</label>
            <input type="radio" id="bonus" name="bonus" value="None" checked/>None<br/>
            <input type="radio" id="bonus" name="bonus" value="Double"/>Double<br/>
            <input type="radio" id="bonus" name="bonus" value="Triple"/>Triple<br/>
            <label for="bingo">Include 50 point "bingo"?</label>
            <input type="checkbox" id="bingo" name="bingo"/><br/>
            <label for="firstWord">Is this first word of the game?</label>
            <input type="checkbox" id="firstWord" name="firstWord"/><br/>
            <input type="submit" value="Calculate Score"/>
        </form>
        <div id="display">

        </div>

    </body>
</html>
