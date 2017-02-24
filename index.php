<?php require("calculate.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>A2 Scrabble Scorer</title>
        <meta charset="utf-8"/>
        <link type="text/css" rel="stylesheet" href="css/scrabble.css"/>


    </head>
    <body>
    
    <?php  #DWA\Tools::dump($testVar); ?>
    <?php  #DWA\Tools::dump($isFirstWord); ?>
    <?php  #DWA\Tools::dump($form); ?>
    <?php  #DWA\Tools::dump($isBingo); ?>
    <?php  #DWA\Tools::dump($word); ?>
    <?php  #DWA\Tools::dump($letters); ?>
    <?php  #DWA\Tools::dump($total); ?>
    <?php  #DWA\Tools::dump($multiplier); ?>
    
        <h1>Scrabble Score Calculator</h1>
        <form method="get" action="index.php">
            <table>
				<tr>
					<td>
					<label for="word">Enter your word</label>
					</td>
					<td>
					<input type="text" id="word" name="word" value='<?=$form->prefill('word')?>' required/><br/>
					</td>
				</tr>
				<tr>
					<td>
					<label for="bonus">Bonus multiplier</label>
					</td>
					<td>
					<input type="radio" id="none" name="bonus" value="1" 
						<?php if(($form->get("bonus") == 1)||!($form->get("bonus"))) echo 'checked'?> />None<br/>
					<input type="radio" id="double" name="bonus" value="2" 
						<?php if($form->get("bonus") == 2) echo 'checked'?> />Double<br/>
					<input type="radio" id="triple" name="bonus" value="3" 
						<?php if($form->get("bonus") == 3) echo 'checked'?> />Triple<br/>
					</td>
				</tr>
				<tr>
					<td>
					<label for="bingo">Include 50 point "bingo"?</label>
					</td>
					<td>
					<input type="checkbox" id="bingo" name="bingo" 
						<?php if($form->isChosen("bingo")) echo 'checked'?> /><br/>
					</td>
				</tr>
				<tr>
					<td>
					<label for="firstWord">Is this first word of the game?</label>
					<t/d>
					<td>
					<input type="checkbox" id="firstWord" name="firstWord" 
						<?php if($form->isChosen("firstWord")) echo 'checked'?> /><br/>
					</td>
				</tr>
				<tr>
					<td>
					<input type="submit" value="Calculate Score"/>
					</td>
				</tr>
            </table>
        </form>
        <div id="display">
            <?="Your score is $total"?>
        </div>

    </body>
</html>
